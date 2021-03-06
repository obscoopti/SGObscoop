<?php
namespace App\Http\Controllers;
use File;
use App\Creditocoop;
use App\Agrocoop;
use App\Instituicao;
use App\Arquivo_coop;
use App\Demonstrativo_financeiro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class CoopController extends Controller
{

    protected $array_tFonte = [
      'RA'=>'',
      'BP'=>'',
      'Estatuto'=>'',
      'Ata'=>'',
      'Balancete'=>'',
      'DMPL'=>''
    ];
    protected $array_lFonte = [
      'RA'=>'RA',
      'BP'=>'BP',
      'Estatuto'=>'Estatuto',
      'Ata'=>'Ata',
      'Balancete'=>'Balancete',
      'DMPL'=>'DMPL'
    ];

// ---------------------------------------------------------------------------------------------------------------------------------
     /**
     * Create a new controller instance.
     *
     * @return void
     */     
    public function __construct()
    {
        $this->middleware('auth');
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function analisar_estatuto(Request $request)
    {
      $estatuto = DB::table('coop.estatuto')
        ->where('cnpj_estatuto_completo','=',$request->cnpj)
        ->where ('ano_estatuto','=',$request->ano)
        ->first();

      $id = DB::select(
          DB::raw(
          "select id from coop.estatuto
          where cnpj_estatuto_completo = '{$request->cnpj}' and
          ano_estatuto =  '{$request->ano}'
          " 
          )
        );
      $data= json_decode( json_encode($id), true);
    
      $estatuto_box = DB::table('coop.estatuto_ckbox')
        ->where('id_estatuto','=',$data)
        ->get();

      return view('analisar_estatuto')
              ->with("estatuto", $estatuto)
              ->with("estatuto_box", $estatuto_box)
              ->with("cnpj",$request->cnpj);

    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function lista_coop()
    {
    	$lista_coop = DB::table('coop.instituicao')
    		->select('id','cnpj','nome', 'tipo', 'cnpj_completo')
        ->where('tipo','=','Cooperativa de Crédito')
        ->orwhere('tipo','=','Cooperativa de Agro')
    		->get();

    	return view('lista_coop')
    		      ->with('lista_coop', $lista_coop)
    		      ->render();
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function info_coop(Request $request)
    {
      $coop = DB::table('coop.instituicao')
                ->where('id','=', $request->input('id'))
                ->first();

      return view('info_coop')
              ->with("coop", $coop);
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function upload_coop(Request $request)
    {
      $coop = DB::table('coop.instituicao')
                ->where('id','=', $request->input('id'))
                ->first();

      return view('upload_coop')
              ->with("array_lFonte", $this->array_lFonte)
              ->with("coop", $coop);
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function estatuto_coop(Request $request)
    {
      $estatutos = DB::table('coop.estatuto')
                    ->select('ano_estatuto', 'estatuto_completo')
                    ->where('cnpj_estatuto','=', $request->input('cnpj'))
                    ->orwhere('cnpj_estatuto_completo','=', $request->input('cnpj'))
                    ->orderby('ano_estatuto','asc')
                    ->get();

      return view('estatuto_coop')
              ->with("estatutos", $estatutos)
              ->with("cnpj", $request->cnpj);
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function analisar_df (Request $request)
    {
      if($request->tipo == 'Cooperativa de Crédito')
      {
        $ano = $request->ano.$request->mes;
        $anob =$request->ano."/".$request->mes; 
      
        $balancetes = DB::select(
          DB::raw(
            "select * from coop.balancetes
            where cnpj_sgo = '{$request->cnpj}' and
            data_base::text like '{$ano}'" 
          )
        );
        if ($balancetes == null) {
          return redirect()->back()->with('status', 'Não existe balancete para esse semestre no banco de dados.');
        }
        return view('analisar_df')
              ->with("balancetes", $balancetes)
              ->with("anob", $anob)
              ->with("tipo", $request->tipo)
              ->with("cnpj", $request->cnpj);
      }
      else
      {
        $balancetes = DB::select(
          DB::raw(
            "select * from coop.demonstrativo_fin_agro
            where cnpj_sgo = '{$request->cnpj}' and ano = '{$request->ano}'
            order by ano asc"
          )
        );
        return view('analisar_df')
              ->with("balancetes", $balancetes)
              ->with("tipo", $request->tipo)
              ->with("ano", $request->ano)
              ->with("cnpj", $request->cnpj);
      }
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function df_coop(Request $request)
    {
      $coop = DB::table('coop.instituicao')
                ->where('id','=', $request->input('id'))
                ->first();
      if($coop->tipo == 'Cooperativa de Crédito')
      {
        $dados = DB::select(
          DB::raw(
            "select distinct substring(data_base::text from 1 for 4 )::integer as ano from coop.balancetes
            where cnpj_sgo = '{$coop->cnpj_completo}' and
            data_base::text like '%12'
            order by substring(data_base::text from 1 for 4 )::integer asc" 
          )
        );
      }
      else
      {
        $dados = DB::select(
          DB::raw(
            "select distinct ano from coop.demonstrativo_fin_agro
            where cnpj_sgo = '{$coop->cnpj_completo}'
            order by ano asc" 
          )
        );
      }

      return view('df_coop')
                ->with('coop', $coop)
                ->with('dados', $dados);
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function fonte_coop(Request $request){
    		$coop = DB::table('coop.instituicao')
    			->where('id','=', $request->input('id'))
    			->first();
        $fontes = DB::table('arquivo_coop')
          ->select('nome','tipo','ano')
          ->where('instituicao_id','=',$coop->id)
          ->orderby('ano','asc')
          ->get();

        if ($coop->tipo == 'Cooperativa de Agro') {
          return view('home');
        }
        $anos['anos'] = DB::select(
            DB::raw(
              "select distinct ano::integer from arquivo_coop where instituicao_id = {$coop->id}")
          );

        $anos['balancetes']=DB::select(
          DB::raw(
            "select distinct substring(data_base::text from 1 for 4 )::integer as ano from coop.balancetes
            where cnpj_sgo = '{$coop->cnpj_completo}' and
            data_base::text like '%12'
            order by substring(data_base::text from 1 for 4 )::integer asc" 
          )
        );
         $anos['estatutos']=DB::select(
          DB::raw(
            "select distinct ano_estatuto::integer as ano from coop.estatuto
            where cnpj_estatuto_completo = '{$coop->cnpj_completo}' 
            order by ano_estatuto::integer asc" 
          )
        );
        //Faz o merge dos anos e tira repeticao
        foreach($anos as $anos_aux)
          foreach ($anos_aux as $ano)
            $anos_f[(int)$ano->ano] = (int)$ano->ano; 

        foreach($anos['balancetes'] as $balancete_aux)
          $balancetes[$balancete_aux->ano] = $balancete_aux->ano;

        foreach($anos['estatutos'] as $estatuto_aux)
          $estatutos[$estatuto_aux->ano] = $estatuto_aux->ano;  
          
        // return var_dump($anos);  
        if ($coop->tipo == 'Cooperativa de Crédito') {
          sort($anos_f);
          // return var_dump($anos_f);  
          $tab_dados = [];
          foreach ($anos_f as $ano) { // varia os anos encontrados 
            $array_tFonte =  $this->array_tFonte; // Zera o vetor com os tipos do ano
            foreach($array_tFonte as $kFonte=>$vFonte){ // varia os tipos para encontrar ocorrencia
              
              // foreach ($fontes as $fonte) { // varias as fontes vindas do bd e preenche ocorrencia
              
                // if($fonte->tipo == $kFonte && $fonte->ano == $ano){
                //   $array_tFonte[$kFonte] = 1; 
                // }
                if(in_array($ano, $balancetes) && $kFonte == 'Balancete'){
                  $array_tFonte[$kFonte] = 1; 
                }
                if(in_array($ano, $estatutos) && $kFonte == 'Estatuto'){
                  $array_tFonte[$kFonte] = 1; 
                }
              // }
            }
            $tab_dados[(int)$ano] = [];
            $tab_dados[(int)$ano] = $array_tFonte;
          }
        } 
        return view('fonte_coop')
          ->with('coop',$coop)
        	->with('tab_dados',$tab_dados);
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function nova_coop(Request $request)
    {
    	return view('nova_coop');
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function editar_controle(Request $request)
    {
      $user = Auth::user();
      $id = Auth::id();
      return var_dump($user);
      return view ('editar_controle');
    }

// ---------------------------------------------------------------------------------------------------------------------------------
    public function cadastro_coop(Request $request)
    {
      return view('cadastro_coop');
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function auditor_coop(Request $request)
    {
      return view('auditor_coop');
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function auditor_file(Request $request)
    {
      $this->validate($request,[
        'arq'=>'required',
      ]);
      $file = $request->file('arq');
      $csv = $this->readCSV($file);
      foreach ($csv as $csvs) 
      {
        $coope = preg_split("/;/", $csvs[0]);

        if($coope[0] == '' || $coope == null || $coope == 'null' || $coope == ' '){
          return redirect()->back()->with('status', 'Inserido com sucesso.');
        }
        
        $coop = DB::table('coop.instituicao_credito')
                    ->where('cnpj','=', $coope[0])
                    ->first();

        // return var_dump($coop, $coope);
        if($coop != null){
          DB::table('coop.instituicao_credito')
                    ->where('id', $coop->id)
                    ->update([ 'auditor' => $coope[1]]);
        }
      }
      return redirect()->back()->with('status', 'Inserido com sucesso.');
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function cadastro_file(Request $request) 
    {
      $this->validate($request,[
        'arq'=>'required',
      ]);
      $file = $request->file('arq');
      $csv = $this->readCSV($file);
    
      foreach ($csv as $csvs) 
      {
        $coope = preg_split("/;/", $csvs[0]);

        if($coope[0] == '' || $coope == null || $coope == 'null' || $coope == ' '){
          return redirect()->back()->with('status', 'Cadastro feito com sucesso.');
        }
        
        $coop = DB::table('coop.instituicao')
                    ->where('cnpj','=', $coope[0])
                    ->first();

        if ($request->seg_coop == 0 ) 
        {
          if ($coop == null) 
          {
            $cnpjcompleto = $this->completa_cnpj($coope[0]);
            $cidadecoop = $this->acerta_cidade($coope[6]);
            $ufcoop = strtoupper($coope[7]);
            $nomecoop = strtoupper($coope[1]);
            $tel = "(".$coope[8].")".$coope[9];

            $cidade_cod = DB::table('coop.municipio_uf_ibge')
                ->where('municipio','=', $cidadecoop)
                ->where('uf', '=', $ufcoop)
                ->first();
              
            if ($cidade_cod == null) {
              return redirect()->back()->with('status', 'Não existe essa cidade '.$cidadecoop);
              // return var_dump($cidadecoop,$coope,$cnpjcompleto);
            }
            $id = DB::table('coop.instituicao_credito')->insertGetId([
              'cnpj'=>$coope[0], 'telefone'=>$tel,
              'fax'=>"", 'natureza_juridica'=>"Sociedade Cooperativa",
              'tipo'=>"Cooperativa de Crédito", 'situacao'=>"ATIVA",
              'endereco_eletronico'=>$coope[14],
              'codigo_compensacao'=>"", 'nome'=>$nomecoop,
              'endereco'=>$coope[2], 'complemento'=>$coope[3],
              'bairro'=>$coope[4], 'cep'=>$coope[5],
              'municipio'=>$cidadecoop, 'uf'=>$ufcoop,
              'tipo_cooperativa'=>$coope[11], 'classe_cooperativa'=>$coope[10],
              'site'=>$coope[15], 'categ_coop_sing'=>$coope[12],
              'filiacao'=>$coope[13], 'cnpj_completo'=>$cnpjcompleto,
              'cod_municipio'=>$cidade_cod->cod_municipio, 'cod_uf'=>$cidade_cod->cod_uf,
            ]);
          }
          else
          {
            $cnpjcompleto = $this->completa_cnpj($coope[0]);
            $cidadecoop = $this->acerta_cidade($coope[6]);
            $ufcoop = strtoupper($coope[7]);
            $nomecoop = strtoupper($coope[1]);
            $tel = "(".$coope[8].")".$coope[9];

            $cidade_cod = DB::table('coop.municipio_uf_ibge')
                ->where('municipio','=', $cidadecoop)
                ->where('uf', '=', $ufcoop)
                ->first();

            if ($cidade_cod == null) {
              return redirect()->back()->with('status', 'Não existe essa cidade '.$cidadecoop);
              // return var_dump($cidadecoop,$coope,$cnpjcompleto);
            }

            $id = DB::table('coop.instituicao_credito')
            ->where('cnpj', $coope[0])
            ->update([
              'cnpj'=>$coope[0], 'telefone'=>$tel,
              'fax'=>"", 'natureza_juridica'=>"Sociedade Cooperativa",
              'tipo'=>"Cooperativa de Crédito", 'situacao'=>"ATIVA",
              'endereco_eletronico'=>$coope[14],
              'codigo_compensacao'=>"", 'nome'=>$nomecoop,
              'endereco'=>$coope[2], 'complemento'=>$coope[3],
              'bairro'=>$coope[4], 'cep'=>$coope[5],
              'municipio'=>$cidadecoop, 'uf'=>$ufcoop,
              'tipo_cooperativa'=>$coope[11], 'classe_cooperativa'=>$coope[10],
              'site'=>$coope[15], 'categ_coop_sing'=>$coope[12],
              'filiacao'=>$coope[13], 'cnpj_completo'=>$cnpjcompleto,
              'cod_municipio'=>$cidade_cod->cod_municipio, 'cod_uf'=>$cidade_cod->cod_uf,
            ]);
          }
        }
        elseif ($request->seg_coop == 1)     
        {  
          if ($coop == null) 
          {
           $cnpjcompleto = $this->completa_cnpj($coope[0]);
            $cidadecoop = $this->acerta_cidade($coope[6]);
            $ufcoop = strtoupper($coope[7]);
            $nomecoop = strtoupper($coope[1]);
            $tel = "(".$coope[8].")".$coope[9];

            $cidade_cod = DB::table('coop.municipio_uf_ibge')
                ->where('municipio','=', $cidadecoop)
                ->where('uf', '=', $ufcoop)
                ->first();

            if ($cidade_cod == null) {
              return redirect()->back()->with('status', 'Não existe essa cidade '.$cidadecoop);
              // return var_dump($cidadecoop,$coope,$cnpjcompleto);
            }
            $id = DB::table('coop.instituicao_agro')->insertGetId([
              'cnpj'=>$coope[0], 'telefone'=>$tel,
              'fax'=>"", 'natureza_juridica'=>"Sociedade Cooperativa",
              'tipo'=>"Cooperativa de Agro", 'situacao'=>"ATIVA",
              'endereco_eletronico'=>$coope[14],
              'codigo_compensacao'=>"", 'nome'=>$nomecoop,
              'endereco'=>$coope[2], 'complemento'=>$coope[3],
              'bairro'=>$coope[4], 'cep'=>$coope[5],
              'municipio'=>$cidadecoop, 'uf'=>$ufcoop,
              'tipo_cooperativa'=>$coope[11], 'classe_cooperativa'=>$coope[10],
              'site'=>$coope[15], 'categ_coop_sing'=>$coope[12],
              'filiacao'=>$coope[13], 'cnpj_completo'=>$cnpjcompleto,
              'cod_municipio'=>$cidade_cod->cod_municipio, 'cod_uf'=>$cidade_cod->cod_uf,
            ]);
          }
          else
          {
            $cnpjcompleto = $this->completa_cnpj($coope[0]);
            $cidadecoop = $this->acerta_cidade($coope[6]);
            $ufcoop = strtoupper($coope[7]);
            $nomecoop = strtoupper($coope[1]);
            $tel = "(".$coope[8].")".$coope[9];

            $cidade_cod = DB::table('coop.municipio_uf_ibge')
                ->where('municipio','=', $cidadecoop)
                ->where('uf', '=', $ufcoop)
                ->first();

            if ($cidade_cod == null) {
              return redirect()->back()->with('status', 'Não existe essa cidade '.$cidadecoop);
             // return var_dump($cidadecoop,$coope,$cnpjcompleto);
            }                
            $id = DB::table('coop.instituicao_agro')
            ->where('cnpj', $coope[0])
            ->update([
              'cnpj'=>$coope[0], 'telefone'=>$tel,
              'fax'=>"", 'natureza_juridica'=>"Sociedade Cooperativa",
              'tipo'=>"Cooperativa de Agro", 'situacao'=>"ATIVA",
              'endereco_eletronico'=>$coope[14],
              'codigo_compensacao'=>"", 'nome'=>$nomecoop,
              'endereco'=>$coope[2], 'complemento'=>$coope[3],
              'bairro'=>$coope[4], 'cep'=>$coope[5],
              'municipio'=>$cidadecoop, 'uf'=>$ufcoop,
              'tipo_cooperativa'=>$coope[11], 'classe_cooperativa'=>$coope[10],
              'site'=>$coope[15], 'categ_coop_sing'=>$coope[12],
              'filiacao'=>$coope[13], 'cnpj_completo'=>$cnpjcompleto,
              'cod_municipio'=>$cidade_cod->cod_municipio, 'cod_uf'=>$cidade_cod->cod_uf,
            ]);
          }
        }
        else
        {
          
        }
      }
      return redirect()->back()->with('status', 'Cadastro feito com sucesso.');
   }
// ---------------------------------------------------------------------------------------------------------------------------------
    function readCSV($csvFile)
    {
      $file_handle = fopen($csvFile, 'r');
      while (!feof($file_handle) ) 
      {
        $line_of_text[] = fgetcsv($file_handle, 1024);
      }
      fclose($file_handle);
      return $line_of_text;
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function editar_coop(Request $request)
    {
      $coop = DB::table('coop.instituicao')
                ->where('id','=', $request->input('id'))
                ->first();
      $request->session()->flash('id_session',$coop->id);
      return view('editar_coop')
              ->with('coop', $coop);
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function nova_submit_coop(Request $request)
    {
      if($request->seg_coop == 'Cooperativa de Agro' || $request->seg_coop == 'Cooperativa de Crédito')
      {
        $this->validate($request,[
        'nome_coop'=>'required',
        'uf_coop'=>'max:2',
        'telefone_coop'=>'max:14',
        'fax_coop'=>'max:14',
        'cep_coop'=>'max:9',
        'seg_coop'=>'required',
        'cnpj_coop'=>'required',
      ]);
        $coop1 = DB::table('coop.instituicao')
                ->where('cnpj','=', $request->cnpj_coop)
                ->orwhere('cnpj_completo', $request->cnpj_coop)
                ->first();

        if($coop1 == null)
        {
          $cidadecoop = $this->acerta_cidade($request->municipio_coop);
          $ufcoop = strtoupper($request->uf_coop);
          $nomecoop = strtoupper($request->nome_coop);    

          $cidade_cod = DB::table('coop.municipio_uf_ibge')
                      ->where('municipio','=', $cidadecoop)
                      ->where('uf', '=', $ufcoop)
                      ->first();

          $cnpjcompleto = $this->completa_cnpj($request->cnpj_coop);

          if ($request->seg_coop == 'Cooperativa de Agro')
          {          
            Agrocoop::create([
              'cnpj'=>$request->cnpj_coop, 'telefone'=>$request->telefone_coop,
              'fax'=>$request->fax_coop, 'natureza_juridica'=>$request->natureza_coop,
              'tipo'=>$request->seg_coop, 'situacao'=>$request->sit_coop,
              'auditor'=>$request->auditor_coop, 'endereco_eletronico'=>$request->email_coop,
              'codigo_compensacao'=>$request->cod_comp_coop, 'nome'=>$nomecoop,
              'endereco'=>$request->end_coop, 'complemento'=>$request->compl_coop,
              'bairro'=>$request->bairro_coop, 'cep'=>$request->cep_coop,
              'municipio'=>$cidadecoop, 'uf'=>$ufcoop,
              'tipo_cooperativa'=>$request->tipo_coope, 'classe_cooperativa'=>$request->class_coop,
              'site'=>$request->site_coop, 'categ_coop_sing'=>$request->cat_coop,
              'filiacao'=>$request->filiacao_coop, 'lat'=>$request->lat_coop,
              'long'=>$request->long_coop, 'cnpj_completo'=>$cnpjcompleto,
              'cod_municipio'=>$cidade_cod->cod_municipio, 'cod_uf'=>$cidade_cod->cod_uf,
            ]);
            return redirect('lista_coop')->with('status', 'Inserido com sucesso.');
          }
          else
          {
            Creditocoop::create([
              'cnpj'=>$request->cnpj_coop, 'telefone'=>$request->telefone_coop,
              'fax'=>$request->fax_coop, 'natureza_juridica'=>$request->natureza_coop,
              'tipo'=>$request->seg_coop, 'situacao'=>$request->sit_coop,
              'auditor'=>$request->auditor_coop, 'endereco_eletronico'=>$request->email_coop,
              'codigo_compensacao'=>$request->cod_comp_coop, 'nome'=>$nomecoop,
              'endereco'=>$request->end_coop, 'complemento'=>$request->compl_coop,
              'bairro'=>$request->bairro_coop, 'cep'=>$request->cep_coop,
              'municipio'=>$cidadecoop, 'uf'=>$ufcoop,
              'tipo_cooperativa'=>$request->tipo_coope, 'classe_cooperativa'=>$request->class_coop,
              'site'=>$request->site_coop, 'categ_coop_sing'=>$request->cat_coop,
              'filiacao'=>$request->filiacao_coop, 'lat'=>$request->lat_coop,
              'long'=>$request->long_coop, 'cnpj_completo'=>$cnpjcompleto,
              'cod_municipio'=>$cidade_cod->cod_municipio, 'cod_uf'=>$cidade_cod->cod_uf,
            ]);
            return redirect('lista_coop')->with('status', 'Inserido com sucesso.');
          }
        }
        else
        {
          return redirect('nova_coop')->with('status', 'Já existe uma Cooperativa com esse CNPJ.');
        }
      }
      else
      {
        $this->validate($request,[
        'nome_instituicao'=>'required',
        'uf_post'=>'max:2',
        'cep_coop'=>'max:9',
        'seg_coop'=>'required',
        'cnpj_post  '=>'required',
      ]);

        $cidadecoop = $this->acerta_cidade($request->muni_post);
          $ufcoop = strtoupper($request->uf_post);
          $nomecoop = strtoupper($request->insti_post);    

          $cidade_cod = DB::table('coop.municipio_uf_ibge')
                      ->where('municipio','=', $cidadecoop)
                      ->where('uf', '=', $ufcoop)
                      ->first();

        Postos_atentimento::create([
          'cnpj'=>$request->cnpj_post, 'ano'=>$request->ano_post, 'nome_instituicao'=>$nomecoop,
          'tipo_dependencia'=>$request->tipo_post, 'nome_instalacao'=>$request->insta_post, 'endereco'=>$request->end_post,
          'complemento'=>$request->comp_post, 'bairro'=>$request->bairro_post, 'cep'=>$request->cep_post,
          'municipio'=>$cidadecoop, 'uf'=>$ufcoop, 'cod_municipio'=>$cidade_cod->cod_municipio, 'cod_uf'=>$cidade_cod->cod_uf,
          'latitude'=>$request->lat_post, 'longitude'=>$request->long_post,
        ]);
      }
    }
// ---------------------------------------------------------------------------------------------------------------------------------    
    public function download_coop(Request $request){
      $coop = DB::table('arquivo_coop')
                ->where('instituicao_id','=', $request->input('id'))
                ->orderby('tipo','asc')
                ->get();
     
      $coopcnpj = DB::table('coop.instituicao')
                ->where('id','=', $request->input('id'))
                ->first();

      $user = Auth::user();
      
        return view('download_coop')
            ->with('coop', $coop)
            ->with('coopcnpj', $coopcnpj)
            ->with('user', $user);
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function editar_submit_coop(Request $request){
      $id = $request->session()->get('id_session');
        // return var_dump($id);
       $this->validate($request,[
          'nome_coop'=>'required',
          'uf_coop'=>'max:2',
          'telefone_coop'=>'max:14',
          'fax_coop'=>'max:14',
          'cep_coop'=>'max:9',
          'seg_coop'=>'required',
          'cnpj_coop'=>'required',
      ]);

      $cidadecoop = $this->acerta_cidade($request->municipio_coop); 
      $ufcoop = strtoupper($request->uf_coop);
      $nomecoop = strtoupper($request->nome_coop);

      $cidade_cod = DB::table('coop.municipio_uf_ibge')
                ->where('municipio','=', $cidadecoop)
                ->where('uf', '=', $ufcoop)
                ->first();

      $cnpjcompleto = $this->completa_cnpj($request->cnpj_coop);

      $coop = Instituicao::find($id);
    
      $coop->fill([
        'cnpj'=>$request->cnpj_coop, 'telefone'=>$request->telefone_coop,
        'fax'=>$request->fax_coop, 'natureza_juridica'=>$request->natureza_coop,
        'tipo'=>$request->seg_coop, 'situacao'=>$request->sit_coop,
        'auditor'=>$request->auditor_coop, 'endereco_eletronico'=>$request->email_coop,
        'codigo_compensacao'=>$request->cod_comp_coop, 'nome'=>$nomecoop,
        'endereco'=>$request->end_coop, 'complemento'=>$request->compl_coop,
        'bairro'=>$request->bairro_coop, 'cep'=>$request->cep_coop,
        'municipio'=>$request->municipio_coop, 'uf'=>$request->uf_coop,
        'tipo_cooperativa'=>$request->tipo_coope, 'classe_cooperativa'=>$request->class_coop,
        'site'=>$request->site_coop, 'categ_coop_sing'=>$request->cat_coop,
        'filiacao'=>$request->filiacao_coop, 'lat'=>$request->lat_coop,
        'long'=>$request->long_coop, 'cnpj_completo'=>$cnpjcompleto,
        'cod_municipio'=>$cidade_cod->cod_municipio, 'cod_uf'=>$cidade_cod->cod_uf,
      ]);
      $coop->save();
      return redirect()->back()->with('status', 'Editado com sucesso.');
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function download_submit(Request $request){
      $myFile = public_path("uploads/".$request->arq_tipo."/".$request->arq_nome);
  
      return response()->download($myFile);
    }
// ---------------------------------------------------------------------------------------------------------------------------------
    public function showUploadFile(Request $request) {
      $this->validate($request,[
        'arq'=>'required',
        'tArq'=>'required',
        'anoArq'=>'required',
        'coop_id'=>'required',
        'coop_cnpj'=>'required',
        ]
      );
      $user = Auth::user();
     
      $file = $request->file('arq');

      $file_name = $request->coop_cnpj."_".$request->tArq."_".$request->anoArq.'.'.$file->getClientOriginalExtension();
   
      $destinationPath = 'uploads/'.$request->tArq;

      try{
            Arquivo_coop::create([
                  'tipo'=> $request->tArq, 
                  'nome'=> $file_name, 
                  'instituicao_id'=> $request->coop_id, 
                  'ano'=> $request->anoArq,
                  'user'=>$user->name,
            ]);
      }catch(\Exception $e){
        return redirect()->back()->withErrors("Este tipo de arquivo ({$request->tArq}) já existe para {$request->anoArq}.");
      }
      $file->move($destinationPath,$file_name );
      // Storage::disk('gdrive')->put('churras.txt', $file);
      return redirect()->back()->with('status', 'Upload feito com sucesso.');
   }
// ---------------------------------------------------------------------------------------------------------------------------------
   public function download_delete(Request $request)
   {
    
    DB::table('sgobscoop.arquivo_coop')->where('nome', '=',$request->arq_nome)->delete();
    
    $myFile = 'uploads/'.$request->arq_tipo.'/'.$request->arq_nome;
    
    File::delete($myFile);
    return redirect()->back()->with('status', 'Deletado com sucesso.');
   }
// ---------------------------------------------------------------------------------------------------------------------------------
  public function completa_cnpj_banco (){
    // $array_coop =  Instituicao::all();
    $array_coop =  DB::table('coop.instituicao_banco_aux')
                ->select('cnpj','cnpj_completo')
                 ->whereNull('cnpj_completo')
                // ->offset(1000000)
                ->limit(100000)
                ->get();


      foreach($array_coop as $coop){
        $coop->cnpj_completo = $this->completa_cnpj($coop->cnpj);
        var_dump( $coop);
        DB::table('coop.instituicao_banco_aux')
          ->where('cnpj',$coop->cnpj)
          ->update(['cnpj_completo' => $coop->cnpj_completo]);
      }
  }
// ---------------------------------------------------------------------------------------------------------------------------------  
  function acerta_cidade ( $cidade ){
    $cidadecoop = str_replace ( array("á", "à", "â", "ã", "Á", "À", "Â", "Ã"), "a", $cidade );
    $cidadecoop = str_replace ( array('é', 'è', 'ê', 'É', 'È', 'Ê'), 'e', $cidadecoop );
    $cidadecoop = str_replace ( array('í', 'ì', 'î', 'Í', 'Ì', 'Î'), 'i', $cidadecoop );
    $cidadecoop = str_replace ( array('ó', 'ò', 'ô', 'õ', 'Ó', 'Ò', 'Ô', 'Õ'), 'o', $cidadecoop );
    $cidadecoop = str_replace ( array('ú', 'ù', 'û', 'Ú', 'Ù', 'Û'), 'u', $cidadecoop );
    $cidadecoop = strtoupper($cidadecoop);
    $cidadecoop = str_replace("D'O", "DO O", $cidadecoop);
    $cidadecoop = str_replace("D'A", "DA A", $cidadecoop);
    $cidadecoop = str_replace("Ç", "C", $cidadecoop);
    $cidadecoop = str_replace("-", " ", $cidadecoop);
    return $cidadecoop;
  }
// ---------------------------------------------------------------------------------------------------------------------------------
  /**
   * Completa CNPJ
   *
   * Retorna recebe um cnpj e completa calculando o DV
   * @param string $cnpj 
   * @return string $cnpj
   *
   */
  function completa_cnpj ( $cnpj ) {
      // Deixa o CNPJ com apenas números
      $cnpj = preg_replace( '/[^0-9]/', '', $cnpj );
      
      // Garante que o CNPJ é uma string
      $cnpj = (string)$cnpj;
      
      // O valor original
      $cnpj_original = $cnpj;
      
      $aux_cnpj = explode('0001',$cnpj);

      if(count($aux_cnpj) ==  1){// Se nao existe 0001 no cnpj
        $cnpj .= '0001';
        $max_len = 12;
        $cnpj_len = strlen($cnpj);
        $cnpj = $this->completa_zeros_esquerda($cnpj, $max_len, $cnpj_len);

      }elseif(count($aux_cnpj) ==  2 && strlen($aux_cnpj[0])>4){ // no caso da primeira parte conter 0001
        $max_len = 14;
        $cnpj_len = strlen($cnpj);
        $cnpj = $this->completa_zeros_esquerda($cnpj, $max_len, $cnpj_len);

        return $cnpj;
      }else{$cnpj .= '0001';
        
        $max_len = 12;
        $cnpj_len = strlen($cnpj);
        $cnpj = $this->completa_zeros_esquerda($cnpj, $max_len, $cnpj_len);     
        
      }

      // Captura os primeiros 12 números do CNPJ
      $primeiros_numeros_cnpj = substr( $cnpj, 0, 12 );
      
      // Faz o primeiro cálculo
      $primeiro_calculo = $this->multiplica_cnpj( $primeiros_numeros_cnpj );
      
      // Se o resto da divisão entre o primeiro cálculo e 11 for menor que 2, o primeiro
      // Dígito é zero (0), caso contrário é 11 - o resto da divisão entre o cálculo e 11
      $primeiro_digito = ( $primeiro_calculo % 11 ) < 2 ? 0 :  11 - ( $primeiro_calculo % 11 );
      
      // Concatena o primeiro dígito nos 12 primeiros números do CNPJ
      // Agora temos 13 números aqui
      $primeiros_numeros_cnpj .= $primeiro_digito;
   
      // O segundo cálculo é a mesma coisa do primeiro, porém, começa na posição 6
      $segundo_calculo = $this->multiplica_cnpj( $primeiros_numeros_cnpj, 6 );
      $segundo_digito = ( $segundo_calculo % 11 ) < 2 ? 0 :  11 - ( $segundo_calculo % 11 );
      
      // Concatena o segundo dígito ao CNPJ
      $cnpj = $primeiros_numeros_cnpj . $segundo_digito;
      
      return $cnpj;
  }


  /**
   * Multiplicação do CNPJ
   *
   * @param string $cnpj Os digitos do CNPJ
   * @param int $posicoes A posição que vai iniciar a regressão
   * @return int O
   *
   */
  // ---------------------------------------------------------------------------------------------------------------------------------
  function multiplica_cnpj( $cnpj, $posicao = 5 ) {
    // Variável para o cálculo
    $calculo = 0;
    
    // Laço para percorrer os item do cnpj
    for ( $i = 0; $i < strlen( $cnpj ); $i++ ) {
        // Cálculo mais posição do CNPJ * a posição
        $calculo = $calculo + ( $cnpj[$i] * $posicao );
        
        // Decrementa a posição a cada volta do laço
        $posicao--;
        
        // Se a posição for menor que 2, ela se torna 9
        if ( $posicao < 2 ) {
            $posicao = 9;
        }
    }
    // Retorna o cálculo
    return $calculo;
}

  /*
  * funcao auxiliar que insere zeros a esquerda do cnpj
  * sting cnpj a ser completada
  * max_len representa o tamanho maximo do cnpj
  * cnpj_len representa o tamnha do cnpj
  * retorna o cnpj com zeros a esquerda
  */
  // ---------------------------------------------------------------------------------------------------------------------------------
  function completa_zeros_esquerda($cnpj, $max_len, $cnpj_len){
    for($i = 0; $i< $max_len - $cnpj_len; $i++)
      $cnpj = '0'.$cnpj;  
    
    return $cnpj;
  }

  function atualiza_fk(){
    $array_coop =  DB::table('coop.balancetes')
                ->select('cnpj_sgo','fk_instituicao')
                ->distinct('cnpj_sgo')
                 ->whereNull('fk_instituicao')
                 // ->where('tipo','!=','Bancos')
                // ->offset(1000000)
                // ->limit(10)
                ->get();

      foreach($array_coop as $coop){
        $id = DB::table('coop.instituicao')
          ->select('id')
          ->where('cnpj_completo','=',$coop->cnpj_sgo)
          ->first();
          if($id != null){
          
            // var_dump($coop->cnpj_sgo);
            // echo '<br>';
            // var_dump($id);
            // echo '<br>';

            $coop->fk_instituicao = $id->id;
            var_dump( $coop);
            echo '<br>';
            DB::table('coop.balancetes')
              ->where('cnpj_sgo',$coop->cnpj_sgo)
              ->update(['fk_instituicao' => $coop->fk_instituicao]);
          }
      }
  }
// ---------------------------------------------------------------------------------------------------------------------------------
  public function cadastro_df(Request $request){

    $coop = DB::table('coop.instituicao')
      ->where('id','=', $request->id)
      ->first();

    return view('cadastro_df')
      ->with('array_df_1',$this->array_df_1)
      ->with('array_df_2',$this->array_df_2)
      ->with('array_df_3',$this->array_df_3)
      ->with('coop', $coop);

  }
// ---------------------------------------------------------------------------------------------------------------------------------
  function soma_df( $valor){
    $soma = 0;
    if($valor != null){
      $language = new ExpressionLanguage();
      $soma = $language->evaluate($valor);
    }
    return $soma;
  }
// ---------------------------------------------------------------------------------------------------------------------------------
  public function df_submit(Request $request){

  // return var_dump($request['1_1']);

  $this->validate($request,[
        'ano'=>'required',
      ]);

    $id = $request->all()['id_coop'];

    $coop = DB::table('coop.instituicao')
      ->where('id','=', $id)
      ->first();

    $ano = $request->all()['ano'];
    $cnpjcompleto = $this->completa_cnpj($coop->cnpj);

   $demonstrativo = DB::table('coop.demonstrativo_fin_agro_new')
   ->where('ano','=', $ano)
   ->first();

   if($demonstrativo == null){
      $resultado1_1 = 0;
      $resultado1_2 = 0;
      $resultado1_3 = 0;
      $resultado1 = 0;
      // return var_dump($request->all());
      // if(array_key_exists("1_1", $request->all()))
      // {
      $resultado1_1 = $this->soma_df($request->all()['1_1']);
      // }
      $resultado1_1 = $resultado1_1 + $resultado1_1_1 = $this->soma_df($request->all()['1_1_1']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_2 = $this->soma_df($request->all()['1_1_2']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3 = $this->soma_df($request->all()['1_1_3']); 
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_1 = $this->soma_df($request->all()['1_1_3_1']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_1_1 = $this->soma_df($request->all()['1_1_3_1_1']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_1_2 = $this->soma_df($request->all()['1_1_3_1_2']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_1_3 = $this->soma_df($request->all()['1_1_3_1_3']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_2 = $this->soma_df($request->all()['1_1_3_2']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_2_1 = $this->soma_df($request->all()['1_1_3_2_1']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_2_2 = $this->soma_df($request->all()['1_1_3_2_2']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_2_3 = $this->soma_df($request->all()['1_1_3_2_3']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_3 = $this->soma_df($request->all()['1_1_3_3']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_3_1 = $this->soma_df($request->all()['1_1_3_3_1']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_3_2 = $this->soma_df($request->all()['1_1_3_3_2']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_3_3_3 = $this->soma_df($request->all()['1_1_3_3_3']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4 = $this->soma_df($request->all()['1_1_4']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_1 = $this->soma_df($request->all()['1_1_4_1']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_1_1 = $this->soma_df($request->all()['1_1_4_1_1']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_1_2 = $this->soma_df($request->all()['1_1_4_1_2']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_1_3 = $this->soma_df($request->all()['1_1_4_1_3']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_1_4 = $this->soma_df($request->all()['1_1_4_1_4']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_1_5 = $this->soma_df($request->all()['1_1_4_1_5']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_1_6 = $this->soma_df($request->all()['1_1_4_1_6']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_2 = $this->soma_df($request->all()['1_1_4_2']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_2_1 = $this->soma_df($request->all()['1_1_4_2_1']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_4_2_2 = $this->soma_df($request->all()['1_1_4_2_2']);
      $resultado1_1 = $resultado1_1 + $resultado1_1_5 = $this->soma_df($request->all()['1_1_5']);
      $resultado1_2 = $this->soma_df($request->all()['1_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1 = $this->soma_df($request->all()['1_2_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_1 = $this->soma_df($request->all()['1_2_1_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_1_1 = $this->soma_df($request->all()['1_2_1_1_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_1_2 = $this->soma_df($request->all()['1_2_1_1_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_1_3 = $this->soma_df($request->all()['1_2_1_1_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_2 = $this->soma_df($request->all()['1_2_1_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_2_1 = $this->soma_df($request->all()['1_2_1_2_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_2_2 = $this->soma_df($request->all()['1_2_1_2_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_2_3 = $this->soma_df($request->all()['1_2_1_2_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_3 = $this->soma_df($request->all()['1_2_1_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_4 = $this->soma_df($request->all()['1_2_1_4']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_4_1 = $this->soma_df($request->all()['1_2_1_4_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_4_2 = $this->soma_df($request->all()['1_2_1_4_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_4_3 = $this->soma_df($request->all()['1_2_1_4_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_1_4_4 = $this->soma_df($request->all()['1_2_1_4_4']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_2 = $this->soma_df($request->all()['1_2_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_2_1 = $this->soma_df($request->all()['1_2_2_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_2_2 = $this->soma_df($request->all()['1_2_2_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_2_3 = $this->soma_df($request->all()['1_2_2_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_2_4 = $this->soma_df($request->all()['1_2_2_4']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3 = $this->soma_df($request->all()['1_2_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_1 = $this->soma_df($request->all()['1_2_3_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_1_1 = $this->soma_df($request->all()['1_2_3_1_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_1_2 = $this->soma_df($request->all()['1_2_3_1_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_1_3 = $this->soma_df($request->all()['1_2_3_1_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_1_4 = $this->soma_df($request->all()['1_2_3_1_4']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_1_5 = $this->soma_df($request->all()['1_2_3_1_5']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_1_6 = $this->soma_df($request->all()['1_2_3_1_6']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_2 = $this->soma_df($request->all()['1_2_3_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_2_1 = $this->soma_df($request->all()['1_2_3_2_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_2_2 = $this->soma_df($request->all()['1_2_3_2_2']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_2_3 = $this->soma_df($request->all()['1_2_3_2_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_2_4 = $this->soma_df($request->all()['1_2_3_2_4']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_2_5 = $this->soma_df($request->all()['1_2_3_2_5']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_2_6 = $this->soma_df($request->all()['1_2_3_2_6']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_3_3 = $this->soma_df($request->all()['1_2_3_3']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_4 = $this->soma_df($request->all()['1_2_4']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_4_1 = $this->soma_df($request->all()['1_2_4_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_4_2 = $this->soma_df($request->all()['1_2_4_2']);
      $resultado1_2 = $resultado1_2 +  $resultado1_2_5 = $this->soma_df($request->all()['1_2_5']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_5_1 = $this->soma_df($request->all()['1_2_5_1']);
      $resultado1_2 = $resultado1_2 + $resultado1_2_5_2 = $this->soma_df($request->all()['1_2_5_2']);
      $resultado1_3 = $this->soma_df($request->all()['1_3']);
      $resultado1 = $resultado1_1 + $resultado1_2 + $resultado1_3;

      $resultado2 = 0;
      $resultado2_1 = 0;
      $resultado2_2 = 0;
      $resultado2_3 = 0;
      $resultado2_4 = 0;
      $resultado2_1 = $this->soma_df($request->all()['2_1']);
      $resultado2_1 = $resultado2_1 + $resultado2_1_1 = $this->soma_df($request->all()['2_1_1']);
      $resultado2_1 = $resultado2_1 + $resultado2_1_1_1 = $this->soma_df($request->all()['2_1_1_1']);
      $resultado2_1 = $resultado2_1 + $resultado2_1_1_2 = $this->soma_df($request->all()['2_1_1_2']);
      $resultado2_1 = $resultado2_1 + $resultado2_1_1_3 = $this->soma_df($request->all()['2_1_1_3']);
      $resultado2_1 = $resultado2_1 + $resultado2_1_1_4 = $this->soma_df($request->all()['2_1_1_4']);
      $resultado2_1 = $resultado2_1 + $resultado2_1_1_5 = $this->soma_df($request->all()['2_1_1_5']);
      $resultado2_1 = $resultado2_1 + $resultado2_1_1_6 = $this->soma_df($request->all()['2_1_1_6']);
      $resultado2_1 = $resultado2_1 + $resultado2_1_1_7 = $this->soma_df($request->all()['2_1_1_7']);
      $resultado2_2 = $this->soma_df($request->all()['2_2']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1 = $this->soma_df($request->all()['2_2_1']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1_1 = $this->soma_df($request->all()['2_2_1_1']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1_2 = $this->soma_df($request->all()['2_2_1_2']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1_3 = $this->soma_df($request->all()['2_2_1_3']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1_4 = $this->soma_df($request->all()['2_2_1_4']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1_5 = $this->soma_df($request->all()['2_2_1_5']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1_6 = $this->soma_df($request->all()['2_2_1_6']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1_7 = $this->soma_df($request->all()['2_2_1_7']);
      $resultado2_2 = $resultado2_2 + $resultado2_2_1_8 = $this->soma_df($request->all()['2_2_1_8']);
      $resultado2_3 = $this->soma_df($request->all()['2_3']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_1 = $this->soma_df($request->all()['2_3_1']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_1_1 = $this->soma_df($request->all()['2_3_1_1']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_1_2 = $this->soma_df($request->all()['2_3_1_2']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_2 = $this->soma_df($request->all()['2_3_2']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_2_1 = $this->soma_df($request->all()['2_3_2_1']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_2_2 = $this->soma_df($request->all()['2_3_2_2']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_3 = $this->soma_df($request->all()['2_3_3']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_3_1 = $this->soma_df($request->all()['2_3_3_1']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_3_2 = $this->soma_df($request->all()['2_3_3_2']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_4 = $this->soma_df($request->all()['2_3_4']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_4_1 = $this->soma_df($request->all()['2_3_4_1']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_4_2 = $this->soma_df($request->all()['2_3_4_2']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_4_3 = $this->soma_df($request->all()['2_3_4_3']);
      $resultado2_3 = $resultado2_3 + $resultado2_3_5 = $this->soma_df($request->all()['2_3_5']);
      $resultado2_4 = $this->soma_df($request->all()['2_4']);
      $resultado2 = $resultado2_1 + $resultado2_2 + $resultado2_3 + $resultado2_4;

      $resultado3 = 0;
      $resultado3_1 = 0;
      $resultado3_2 = 0;
      $resultado3_3 = 0;
      $resultado3_4 = 0;
      $resultado3_5 = 0;
      $resultado3_6 = 0;
      $resultado3_7 = 0;
      $resultado3_8 = 0;
      $resultado3_9 = 0;
      $resultado3_10 = 0;
      $resultado3_11 = 0;
      $resultado3_12 = 0;
      $resultado3_13 = 0;
      $resultado3_14 = 0;
      $resultado3_15 = 0;
      $resultado3_16 = 0;
      $resultado3_17 = 0;
      $resultado3_18 = 0;
      $resultado3_1 = $this->soma_df($request->all()['3_1']);
      $resultado3_1 = $resultado3_1 + $resultado3_1_1 = $this->soma_df($request->all()['3_1_1']);
      $resultado3_1 = $resultado3_1 + $resultado3_1_2 = $this->soma_df($request->all()['3_1_2']);
      $resultado3_2 = $this->soma_df($request->all()['3_2']);
      $resultado3_3 = $this->soma_df($request->all()['3_3']);
      $resultado3_4 = $this->soma_df($request->all()['3_4']);
      $resultado3_4 = $resultado3_4 + $resultado3_4_1 = $this->soma_df($request->all()['3_4_1']);
      $resultado3_4 = $resultado3_4 + $resultado3_4_2 = $this->soma_df($request->all()['3_4_2']);
      $resultado3_4 = $resultado3_4 + $resultado3_4_3 = $this->soma_df($request->all()['3_4_3']);
      $resultado3_4 = $resultado3_4 + $resultado3_4_4 = $this->soma_df($request->all()['3_4_4']);
      $resultado3_5 = $this->soma_df($request->all()['3_5']);
      $resultado3_6 = $this->soma_df($request->all()['3_6']);
      $resultado3_6 = $resultado3_6 + $resultado3_6_1 = $this->soma_df($request->all()['3_6_1']);
      $resultado3_6 = $resultado3_6 + $resultado3_6_2 = $this->soma_df($request->all()['3_6_2']);
      $resultado3_6 = $resultado3_6 + $resultado3_6_3 = $this->soma_df($request->all()['3_6_3']);
      $resultado3_6 = $resultado3_6 + $resultado3_6_4 = $this->soma_df($request->all()['3_6_4']);
      $resultado3_6 = $resultado3_6 + $resultado3_6_5 = $this->soma_df($request->all()['3_6_5']);
      $resultado3_6 = $resultado3_6 + $resultado3_6_6 = $this->soma_df($request->all()['3_6_6']);
      $resultado3_6 = $resultado3_6 + $resultado3_6_7 = $this->soma_df($request->all()['3_6_7']);
      $resultado3_6 = $resultado3_6 + $resultado3_6_8 = $this->soma_df($request->all()['3_6_8']);
      $resultado3_7 = $this->soma_df($request->all()['3_7']);
      $resultado3_7 = $resultado3_7 + $resultado3_7_1 = $this->soma_df($request->all()['3_7_1']);
      $resultado3_7 = $resultado3_7 + $resultado3_7_2 = $this->soma_df($request->all()['3_7_2']);
      $resultado3_8 = $this->soma_df($request->all()['3_8']);
      $resultado3_9 = $this->soma_df($request->all()['3_9']);
      $resultado3_10 = $this->soma_df($request->all()['3_10_']);
      $resultado3_11 = $this->soma_df($request->all()['3_11']);
      $resultado3_11 = $resultado3_11 + $resultado3_11_1 = $this->soma_df($request->all()['3_11_1']);
      $resultado3_11 = $resultado3_11 + $resultado3_11_2 = $this->soma_df($request->all()['3_11_2']);
      $resultado3_12 = $this->soma_df($request->all()['3_12']);
      $resultado3_13 = $this->soma_df($request->all()['3_13']);
      $resultado3_13 = $resultado3_13 + $resultado3_13_1 = $this->soma_df($request->all()['3_13_1']);
      $resultado3_13 = $resultado3_13 + $resultado3_13_2 = $this->soma_df($request->all()['3_13_2']);
      $resultado3_14 = $this->soma_df($request->all()['3_14']);
      $resultado3_15 = $this->soma_df($request->all()['3_15']);
      $resultado3_15 = $resultado3_15 + $resultado3_15_1 = $this->soma_df($request->all()['3_15_1']);
      $resultado3_15 = $resultado3_15 + $resultado3_15_2 = $this->soma_df($request->all()['3_15_2']);
      $resultado3_15 = $resultado3_15 + $resultado3_15_3 = $this->soma_df($request->all()['3_15_3']);
      $resultado3_16 = $this->soma_df($request->all()['3_16']);
      $resultado3_17 = $this->soma_df($request->all()['3_17']);
      $resultado3_17 = $resultado3_17 + $resultado3_17_1 = $this->soma_df($request->all()['3_17_1']);
      $resultado3_17 = $resultado3_17 + $resultado3_17_2 = $this->soma_df($request->all()['3_17_2']);
      $resultado3_17 = $resultado3_17 + $resultado3_17_3 = $this->soma_df($request->all()['3_17_3']);
      $resultado3_17 = $resultado3_17 + $resultado3_17_4 = $this->soma_df($request->all()['3_17_4']);
      $resultado3_17 = $resultado3_17 + $resultado3_17_5 = $this->soma_df($request->all()['3_17_5']);
      $resultado3_17 = $resultado3_17 + $resultado3_17_6 = $this->soma_df($request->all()['3_17_6']);
      $resultado3_18 = $this->soma_df($request->all()['3_18']);
      $resultado3 = $resultado3_1 + $resultado3_2 + $resultado3_3 + $resultado3_4 + $resultado3_5 + $resultado3_6 + $resultado3_7 + $resultado3_8 + $resultado3_9 + $resultado3_10 + $resultado3_11 + $resultado3_12 + $resultado3_13 + $resultado3_14 + $resultado3_15 + $resultado3_16 + $resultado3_17 + $resultado3_18; 

      $array = ['Ativo Circulante 1.1' => $resultado1_1,
        'Ativo Nao Circulante 1.2' => $resultado1_2,
        'Compensacao (Ativo) 1.3' => $resultado1_3,
        'TOTAL Ativo 1' => $resultado1,
        'Passivo Circulante 2.1' => $resultado2_1,
        'Passivo Nao Circulante 2.2' => $resultado2_2,
        'Patrimonio Liquido 2.3' => $resultado2_3,
        'Compensacao (Passivo) 2.4' => $resultado2_4,
        'TOTAL Passivo e Patrimonio Liquido 2' => $resultado2,
        'Ingressos e Receitas Brutas 3.1' => $resultado3_1,
        '(-) Impostos Contribuicoes S/ Vendas E Servicos 3.2' => $resultado3_2,
        'Ingressos e Receitas Liquidas 3.3' => $resultado3_3,
        '(-) Custos 3.4' => $resultado3_4,
        'Sobra e Margem Bruta 3.5' => $resultado3_5,
        '(-) Dispendios e Despesas Operacionais 3.6' => $resultado3_6,
        'Outros Resultados Operacionais 3.7' => $resultado3_7,
        'Resultado de Equivalencia Patrimonial 3.8' => $resultado3_8,
        'Resultado de Operacoes Com Coligadas/Controladas 3.9' => $resultado3_9,
        'Sobra/Perda Operacional (Antes Result Financ) 3.10' => $resultado3_10,
        'Resultado Financeiro Liquido 3.11' => $resultado3_11,
        'Sobra/Perda Exercicio (Antes dos Tributos) 3.12' => $resultado3_12,
        '(-) Provisao de Impostos S/ Resultado 3.13' => $resultado3_13,
        'Sobra/Perda Liquida Exercicio (Antes Ajustes) 3.14' => $resultado3_14,
        '(+/-) Ajustes Legais 3.15' => $resultado3_15,
        'Sobra/Perda Liquida Exercicio (Antes Destin) 3.16' => $resultado3_16,
        '(+/-) Destinacoes Legais e Estatutarias 3.17' => $resultado3_17,
        'Sobras ou Perdas a Disposicao da AGO 3.18' => $resultado3_18,
        'TOTAL Contas de Resultado 3' => $resultado3
      ];
      
      // return $array;
      
      $id = DB::table('coop.demonstrativo_fin_agro_new')
        ->insert([
        'CNPJ_completo'=>$cnpjcompleto, 'ano'=> $ano, 'UF'=>$coop->uf, 'Ativo_Circ'=>$resultado1_1, 
        'Disponibilidades'=>$resultado1_1_1, 'Ativo_Fin'=>$resultado1_1_2, 'Cred'=>$resultado1_1_3,
        'Cred_Coop'=>$resultado1_1_3_1, 'Cred_Coop_VR'=>$resultado1_1_3_1_1, 'Cred_Coop_PECLD'=>$resultado1_1_3_1_2,
         'Cred_Coop_AVP'=>$resultado1_1_3_1_3, 'Clientes'=>$resultado1_1_3_2, 'Clientes_VR'=>$resultado1_1_3_2_1,
        'Clientes_PECLD'=>$resultado1_1_3_2_2, 'Clientes_AVP'=>$resultado1_1_3_2_3, 'OutrosCred'=>$resultado1_1_3_3,
         'OutrosCred_VR'=>$resultado1_1_3_3_1, 'OutrosCred_PECLD'=>$resultado1_1_3_3_2, 'OutrosCred_AVP'=>$resultado1_1_3_3_3,
        'Estoq'=>$resultado1_1_4, 'EstoqProp'=>$resultado1_1_4_1, 'EstoqProp_PAgro'=>$resultado1_1_4_1_1,
        'EstoqProp_BF'=>$resultado1_1_4_1_2, 'EstoqProp_PI'=>$resultado1_1_4_1_3, 'EstoqProp_AB'=>$resultado1_1_4_1_4, 
        'EstoqProp_Almox'=>$resultado1_1_4_1_5, 'EstoqProp_AAP'=>$resultado1_1_4_1_6, 'EstoqMerc'=>$resultado1_1_4_2, 
        'EstoqMerc_Coop'=>$resultado1_1_4_2_1, 'EstoqMerc_Terc'=>$resultado1_1_4_2_2, 'DispAntec'=>$resultado1_1_5, 
        'Ativo_NCirc'=>$resultado1_2, 'RLP'=>$resultado1_2_1, 'Coop_RLP'=>$resultado1_2_1_1, 'Coop_Rec_RLP'=>$resultado1_2_1_1_1, 
        'Coop_PECLD_RLP'=>$resultado1_2_1_1_2, 'Coop_AVP_RLP'=>$resultado1_2_1_1_3, 'Clientes_RLP'=>$resultado1_2_1_2, 
        'Clientes_Receb_RLP'=>$resultado1_2_1_2_1, 'Clientes_PECLD_RLP'=>$resultado1_2_1_2_2, 'Clientes_AVP_RLP'=>$resultado1_2_1_2_3, 
        'EstoqForm'=>$resultado1_2_1_3, 'Outros_LP'=>$resultado1_2_1_4, 'Outros_LP_VR'=>$resultado1_2_1_4_1, 
        'Outros_Jud'=>$resultado1_2_1_4_2, 'Outros_PECLD'=>$resultado1_2_1_4_3, 'Outros_AVP'=>$resultado1_2_1_4_4, 
        'Invest'=>$resultado1_2_2, 'Invest_Coop'=>$resultado1_2_2_1, 'Invest_PI'=>$resultado1_2_2_2, 'Invest_outros'=>$resultado1_2_2_3, 
        'Invest_AVP'=>$resultado1_2_2_4, 'Imob'=>$resultado1_2_3, 'BensCorp'=>$resultado1_2_3_1, 'Imoveis'=>$resultado1_2_3_1_1, 
        'Maquinas'=>$resultado1_2_3_1_2, 'Moveis'=>$resultado1_2_3_1_3, 'Veiculos'=>$resultado1_2_3_1_4, 'BensCorp_Outros'=>$resultado1_2_3_1_5, 
        'Ativo_Bio'=>$resultado1_2_3_1_6, 'Dep_Acum'=>$resultado1_2_3_2, 'Dep_Acum_Imoveis'=>$resultado1_2_3_2_1, 
        'Dep_Acum_Maquinas'=>$resultado1_2_3_2_2, 'Dep_Acum_Moveis'=>$resultado1_2_3_2_3, 'Dep_Acum_Veiculos'=>$resultado1_2_3_2_4,
        'Dep_Acum_Outros'=>$resultado1_2_3_2_5, 'Red_Ativo_Bio'=>$resultado1_2_3_2_6, 'AAP_BensCorp'=>$resultado1_2_3_3, 
        'Intang'=>$resultado1_2_4, 'BensIncorp'=>$resultado1_2_4_1, 'Amort_BensIncorp'=>$resultado1_2_4_2, 'Diferido'=>$resultado1_2_5, 
        'Ativo_Diferido'=>$resultado1_2_5_1, 'Amort_Diferido'=>$resultado1_2_5_2, 'Ativo_Total'=>$resultado1, 'Passivo_Circ'=>$resultado2_1, 
        'Obrigacoes'=>$resultado2_1_1, 'Emp_Fin'=>$resultado2_1_1_1, 'Coop_VP'=>$resultado2_1_1_2, 'Fornecedores'=>$resultado2_1_1_3, 
        'Obr_Tribut'=>$resultado2_1_1_4, 'Obr_Trab'=>$resultado2_1_1_5, 'Obr_outras'=>$resultado2_1_1_6, 'Obr_AVP'=>$resultado2_1_1_7, 
        'Passivo_NCirc'=>$resultado2_2, 'Obrigacoes_LP'=>$resultado2_2_1, 'Emp_Fin_LP'=>$resultado2_2_1_1, 'Coop_VP_LP'=>$resultado2_2_1_2, 
        'Fornecedores_LP'=>$resultado2_2_1_3, 'Obr_Tribut_LP'=>$resultado2_2_1_4, 'Obr_Trab_LP'=>$resultado2_2_1_5, 
        'Prov_Fiscais_LP'=>$resultado2_2_1_6, 'Obr_outras_LP'=>$resultado2_2_1_7, 'Obr_AVP_LP'=>$resultado2_2_1_8, 'PL'=>$resultado2_3, 'CS'=>$resultado2_3_1, 
        'CS_Sub'=>$resultado2_3_1_1, 'CS_a_Integ'=>$resultado2_3_1_2, 'Res_Cap'=>$resultado2_3_2, 'Doa_SubFiscais'=>$resultado2_3_2_1, 
        'Res_Cap_Outras'=>$resultado2_3_2_2, 'PL_AAP_Total'=>$resultado2_3_3, 'PL_AAP'=>$resultado2_3_3_1, 'Res_Reav'=>$resultado2_3_3_2, 
        'Res_Sobras'=>$resultado2_3_4, 'Res_Legal'=>$resultado2_3_4_1, 'RATES'=>$resultado2_3_4_2, 'Res_Outras'=>$resultado2_3_4_3, 
        'Sobras_AGO'=>$resultado2_3_5, 'PassivoPL_Total'=>$resultado2, 'Ingressos_Bruto'=>$resultado3_1, 'Ingressos_Venda'=>$resultado3_1_1,
        'Ingressos_Servicos'=>$resultado3_1_2, 'Impostos_Ingresso'=>$resultado3_2, 'Ingressos_Liq'=>$resultado3_3, 'Custos'=>$resultado3_4, 
        'Repasse_Vendas'=>$resultado3_4_1, 'Repasse_Servicos'=>$resultado3_4_2, 'Custos_Vendas'=>$resultado3_4_3, 'Custos_Servicos'=>$resultado3_4_4, 
        'Sobra_Bruta'=>$resultado3_5, 'Desp_Op'=>$resultado3_6, 'Desp_Op_Comerc'=>$resultado3_6_1, 'Desp_Op_Pesssoal'=>$resultado3_6_2, 
        'Desp_Op_Adm'=>$resultado3_6_3, 'Desp_Op_Trib'=>$resultado3_6_4, 'Desp_Op_Tec'=>$resultado3_6_5, 'Desp_Op_Dep'=>$resultado3_6_6, 
        'Desp_Op_Outras'=>$resultado3_6_7, 'Result_Op_Outros'=>$resultado3_7, 'Ingressos_Outros'=>$resultado3_7_1, 'Disp_Outros'=>$resultado3_7_2, 
        'REP'=>$resultado3_8, 'Result_Intragrupo'=>$resultado3_9, 'Sobras_Op'=>$resultado3_10, 'Result_Fin_Liq'=>$resultado3_11, 
        'Ingressos_Fin'=>$resultado3_11_1, 'Disp_Fin'=>$resultado3_11_2, 'SAIR'=>$resultado3_12, 'Prov_Imp'=>$resultado3_13, 'IRPJ'=>$resultado3_13_1, 
        'CSSL'=>$resultado3_13_2, 'Sobras_Antes_Ajustes'=>$resultado3_14, 'Ajustes_Legais'=>$resultado3_15, 'Dest_Inc_Fisc'=>$resultado3_15_1, 
        'Cred_Fisc'=>$resultado3_15_2, 'Reavaliação'=>$resultado3_15_3, 'Sobras_Liq'=>$resultado3_16, 'Destinacoes'=>$resultado3_17, 
        'Dest_Res_Legal'=>$resultado3_17_1, 'Dest_RATES'=>$resultado3_17_2, 'Part_Result'=>$resultado3_17_3, 'Capitalizacao'=>$resultado3_17_4, 
        'Dest_Outras_Res'=>$resultado3_17_5, 'Util_Res'=>$resultado3_17_6, 'SobrasAGO'=>$resultado3_18, 'ResultadoExercicio'=>$resultado3, 'cnpj_sgo'=>$cnpjcompleto,
      ]);
      return redirect()->back()->with('status', 'Demonstrativo financeiro cadastrado com sucesso.');
    }
    return redirect()->back()->with('status', 'Já existe com esse CNPJ e ANO um demonstrativo no Banco de Dados.');
  }
// ------------------------------------------------------------------------------------------------------------------------------------------------------
  protected $array_df_1 = [
    [
      'codigo' => '1.1',
      'nome' => 'Ativo Circulante',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.1.1',
      'nome' => 'Disponibilidades',
      'explicacao' => 'Caixa, Bancos, Conta geral dos cooperados, conta corrente, numerários, banco com movimento',
    ],
    [
      'codigo' => '1.1.2',
      'nome' => 'Ativos Financeiros',
      'explicacao' => 'Aplicações financeiras; Outros ativos com liquidez próxima ao de disponibilidades; bancos com aplicações financeiras; fundo de renda fixa. Certificados do tesouro nacional (tava negativo no passivo);',
    ],
    [
      'codigo' => '1.1.3',
      'nome' => 'Créditos',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os créditos não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.1.3.1',
      'nome' => 'Cooperados',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [ 
      'codigo' => '1.1.3.1.1',
      'nome' => 'Cooperados - Valores a Receber',
      'explicacao' => 'Débitos de cooperados; cooperados; cooperados C/c em funcionamento',
    ],
    
[      'codigo' => '1.1.3.1.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Cooperados',
      'explicacao' => 'PLCD ou PDD cooperados',
    ],
    [
      'codigo' => '1.1.3.1.3',
      'nome' => '(-) Ajuste a Valor Presente - Cooperados',
      'explicacao' => 'AVP',
    ],
    [
      'codigo' => '1.1.3.2',
      'nome' => 'Clientes',
      'explicacao' => 'SubTOTAL - feito por fórmula',
    ],
    [
      'codigo' => '1.1.3.2.1',
      'nome' => 'Clientes - Valores a Receber',
      'explicacao' => 'Cheques a receber; duplicatas a receber',
    ],
    [
      'codigo' => '1.1.3.2.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Clientes',
      'explicacao' => 'PLCD ou PDD clientes',
    ],
    [
      'codigo' => '1.1.3.2.3',
      'nome' => '(-) Ajuste a Valor Presente - Clientes',
      'explicacao' => 'AVP',
    ],
    [
      'codigo' => '1.1.3.3',
      'nome' => 'Outros Créditos',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.1.3.3.1',
      'nome' => 'Outros - Valores a Receber',
      'explicacao' => 'Cheques a compensar; outros créditos; outros ativos (observar liquidez e não pertencer a outras contas)',
    ],
    [
      'codigo' => '1.1.3.3.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Outros',
      'explicacao' => '?',
    ],
    [
      'codigo' => '1.1.3.3.3',
      'nome' => '(-) Ajuste a Valor Presente - Outros',
      'explicacao' => '?',
    ],
    [
      'codigo' => '1.1.4',
      'nome' => 'Estoques',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os estoques não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.1.4.1',
      'nome' => 'Estoque Próprio',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.1.4.1.1',
      'nome' => 'de Produtos Agropecuários',
      'explicacao' => 'Produtos acabados ',
    ],
    [
      'codigo' => '1.1.4.1.2',
      'nome' => 'de Bens de Fornecimento',
      'explicacao' => 'Materiais de embalagem; aditivos e higenização; laboratório',
    ],
    [
      'codigo' => '1.1.4.1.3',
      'nome' => 'de Produtos Industrializados',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.1.4.1.4',
      'nome' => 'de Ativos Biológicos',
      'explicacao' => 'Matéria prima  (no caso da galinha! )',
    ],
    [
      'codigo' => '1.1.4.1.5',
      'nome' => 'Almoxarifados de Bens de Produção',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.1.4.1.6',
      'nome' => '(-) Ajustes Avaliação Patrimonial - Estoque',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.1.4.2',
      'nome' => 'Mercadorias em Depósito',
      'explicacao' => 'SubTOTAL - calculado por fórmula ou Estoque de mercadoria de revendas',
    ],
    [
      'codigo' => '1.1.4.2.1',
      'nome' => 'de Cooperados',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.1.4.2.2',
      'nome' => 'de Terceiros',
      'explicacao' => 'Outros bens e direitos',
    ],
    [
      'codigo' => '1.1.5',
      'nome' => 'Dispêndios do Exercício Seguinte',
      'explicacao' => 'Adiantamento à fornecedores e à funcionarios;  impostos antecipados;  dispêndios antecipados; impostos a recuperar',
    ],
    [
      'codigo' => '1.2',
      'nome' => 'Ativo Não Circulante',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.1',
      'nome' => 'Realizável a Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os realizáveis não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.2.1.1',
      'nome' => 'Cooperados - Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.1.1.1',
      'nome' => 'Cooperados a Receber - L.P.',
      'explicacao' => 'Débitos de cooperados; cooperados',
    ],
    [
      'codigo' => '1.2.1.1.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Cooperados L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.1.3',
      'nome' => '(-) Ajuste a Valor Presente - Cooperados L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.2',
      'nome' => 'Clientes - Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.1.2.1',
      'nome' => 'Clientes a Receber - L.P.',
      'explicacao' => 'Devedores por repasse; duplicatas a descontar LP',
    ],
    [
      'codigo' => '1.2.1.2.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Clientes L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.2.3',
      'nome' => '(-) Ajuste a Valor Presente - Clientes L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.3',
      'nome' => 'Estoques em Formação',
      'explicacao' => 'Estoque de Longo Prazo',
    ],
    [
      'codigo' => '1.2.1.4',
      'nome' => 'Outros - Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.1.4.1',
      'nome' => 'Outros Valores a Receber - L.P.',
      'explicacao' => 'Títulos de capitalização; valores a realizar no LP; impostos a recuperar, adiantamento a fornecedores',
    ],
    [
      'codigo' => '1.2.1.4.2',
      'nome' => 'Depósitos Judiciais',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.4.3',
      'nome' => '(-) Perdas Estimadas c/ CLD - Outros L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.4.4',
      'nome' => '(-) Ajuste a Valor Presente - Outros L.P.',
      'explicacao' => 'Juros a transcorrer sobre vendas a prazo',
    ],
    [
      'codigo' => '1.2.2',
      'nome' => 'Investimentos',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os investimentos não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.2.2.1',
      'nome' => 'Sociedades Cooperativas',
      'explicacao' => 'Contas CCL; nomes de cooperativas na conta de investimento',
    ],
    [
      'codigo' => '1.2.2.2',
      'nome' => 'Propriedades p/ Investimentos',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.2.3',
      'nome' => 'Outros Investimentos',
      'explicacao' => 'Construção em andamento; Construção em andamento sede própria',
    ],
    [
      'codigo' => '1.2.2.4',
      'nome' => '(-) Ajustes Avaliação Patrimonial - Investim',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.3',
      'nome' => 'Imobilizado',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os imobilizados não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.2.3.1',
      'nome' => 'Bens Corpóreos',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.3.1.1',
      'nome' => 'Imóveis e Instalações',
      'explicacao' => 'Terrenos, edifícios, imobilizações técnicas, bens em operação, construção em andamento',
    ],
    [
      'codigo' => '1.2.3.1.2',
      'nome' => 'Máquinas e Equipamentos',
      'explicacao' => 'Equipamentos de informática, segurança, laboratório',
    ],
    [
      'codigo' => '1.2.3.1.3',
      'nome' => 'Móveis e Utensílios',
      'explicacao' => 'Móveis, utensílios, ferramentas, vasilhames, eletronicos e eletrodomestico, aparelhos de comunicação (telefone, fax)',
    ],
    [
      'codigo' => '1.2.3.1.4',
      'nome' => 'Veículos e Máquinas Agrícolas',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.3.1.5',
      'nome' => 'Outros Bens Corpóreos',
      'explicacao' => 'Benfeitorias em imóveis de terceiros, imobilização vinculada, consorcios não contemplados',
    ],
    [
      'codigo' => '1.2.3.1.6',
      'nome' => 'Ativo Biológico de Produção',
      'explicacao' => 'Plantas e animais para produção',
    ],
    [
      'codigo' => '1.2.3.2',
      'nome' => '(-) Depreciação Acumulada',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando as depreciações não são especificadas pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.2.3.2.1',
      'nome' => '(-) Depreciação Acumulada - Imóveis e Instala',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.2',
      'nome' => '(-) Depreciação Acumulada - Maquinas e Equipamentos',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.3',
      'nome' => '(-) Depreciação Acumulada - Móveis e Utensíli',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.4',
      'nome' => '(-) Depreciação Acumulada - Veículos e Máquin',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.5',
      'nome' => '(-) Depreciação Acumulada - Outros Bens Corpó',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.6',
      'nome' => '(-) Redução de Exploração Ativo Biológico',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.3.3',
      'nome' => '(-) Ajustes Avaliação Patrimonial - Bens Corp',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.4',
      'nome' => 'Intangível',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.4.1',
      'nome' => 'Bens Incorpóreos',
      'explicacao' => 'Software, marcas e patentes',
    ],
    [
      'codigo' => '1.2.4.2',
      'nome' => '(-) Amortização - Bens Intangível',
      'explicacao' => 'amortização',
    ],
    [
      'codigo' => '1.2.5',
      'nome' => 'Diferido',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.5.1',
      'nome' => 'Ativo Diferido',
      'explicacao' => 'Apenas saldos remanescentes. Esta conta não pode ter novos lançamentos.',
    ],
    [
      'codigo' => '1.2.5.2',
      'nome' => '(-) Amortização Acumulada',
      'explicacao' => 'amortização',
    ],
    [
      'codigo' => '1.3',
      'nome' => 'Compensação (Ativo)',
      'explicacao' => 'Contas novas PR',
    ],
    [
      'codigo' => '1',
      'nome' => 'TOTAL Ativo',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
  ];

  protected $array_df_2 = [
    [
      'codigo' => '2.1',
      'nome' => 'Passivo Circulante',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '2.1.1',
      'nome' => 'Obrigações',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando as obrigações não são especificadas pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '2.1.1.1',
      'nome' => 'Empréstimos e Financiamentos',
      'explicacao' => 'Empréstimos, financiamentos, juros',
    ],
    [
      'codigo' => '2.1.1.2',
      'nome' => 'Obrigações com Cooperados',
      'explicacao' => 'Pagamento aos cooperados, saldos a liquidar e capital a restituir',
    ],
    [
      'codigo' => '2.1.1.3',
      'nome' => 'Fornecedores',
      'explicacao' => 'Fornecedores em geral',
    ],
    [
      'codigo' => '2.1.1.4',
      'nome' => 'Tributárias e Fiscais',
      'explicacao' => 'Obrigações tributárias, impostos a recolher, órgãos públicos arrecadadores, parcelamento Refis',
    ],
    [
      'codigo' => '2.1.1.5',
      'nome' => 'Sociais e Trabalhistas',
      'explicacao' => 'Salários, encargos sociais, provisão para férias, provisão para 13°, provisões sociais',
    ],
    [
      'codigo' => '2.1.1.6',
      'nome' => 'Outras Obrigações',
      'explicacao' => 'Adiantamento de clientes, outros passivos, vendas para entregas, credores diversos, contas a pagar, credores por funcionamento, valores a realizar, provisões (exceto férias e 13°)',
    ],
    [
      'codigo' => '2.1.1.7',
      'nome' => '(-) Ajustes a Valor Presente - Curto Prazo',
      'explicacao' => '',
    ],
    [
      'codigo' => '2.2',
      'nome' => 'Passivo Não Circulante',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '2.2.1',
      'nome' => 'Obrigações - Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando as obrigações não são especificadas pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '2.2.1.1',
      'nome' => 'Empréstimos e Financiamentos - L.P.',
      'explicacao' => 'Credores por financiamento',
    ],
    [
      'codigo' => '2.2.1.2',
      'nome' => 'Obrigações com Cooperados - L.P.',
      'explicacao' => 'Pagamento aos cooperados, saldos a liquidar e capital a restituir, de prazo acima de 12 meses',
    ],
    [
      'codigo' => '2.2.1.3',
      'nome' => 'Fornecedores - L.P.',
      'explicacao' => 'Fornecedores em LP',
    ],
    [
      'codigo' => '2.2.1.4',
      'nome' => 'Tributárias - L.P.',
      'explicacao' => 'Tributos em discussão judicial',
    ],
    [
      'codigo' => '2.2.1.5',
      'nome' => 'Sociais e Trabalhistas - L.P.',
      'explicacao' => 'Férias a pg, INSS a pg, Salários a pg',
    ],
    [
      'codigo' => '2.2.1.6',
      'nome' => 'Provisões Fiscais - L.P.',
      'explicacao' => 'Provisão para riscos e contingências, provisões em geral',
    ],
    [
      'codigo' => '2.2.1.7',
      'nome' => 'Outras Obrigações - L.P.',
      'explicacao' => 'Prejuízos de anos anteriores, contingências, vendas para entrega futura',
    ],
    [
      'codigo' => '2.2.1.8',
      'nome' => '(-) Ajustes a Valor Presente - L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '2.3',
      'nome' => 'Patrimônio Líquido',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '2.3.1',
      'nome' => 'Capital Social Integralizado',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '2.3.1.1',
      'nome' => 'Capital Social Subscrito',
      'explicacao' => 'Capital subscrito',
    ],
    [
      'codigo' => '2.3.1.2',
      'nome' => '(-) Capital Social a Integralizar',
      'explicacao' => '',
    ],
    [
      'codigo' => '2.3.2',
      'nome' => 'Reserva de Capital',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '2.3.2.1',
      'nome' => 'Doações e Subvenções Fiscais',
      'explicacao' => '',
    ],
    [
      'codigo' => '2.3.2.2',
      'nome' => 'Outras Reservas de Capital',
      'explicacao' => '',
    ],
    [
      'codigo' => '2.3.3',
      'nome' => 'Ajuste de Avaliação Patrimonial.',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '2.3.3.1',
      'nome' => 'Ajuste de Avaliação Patrimonial',
      'explicacao' => 'AAP',
    ],
    [
      'codigo' => '2.3.3.2',
      'nome' => 'Reserva de Reavaliação',
      'explicacao' => 'Não existe mais, mas balanços antigos podem ter. Foi substituído pelo AAP, justificando ser parte deste item.',
    ],
    [
      'codigo' => '2.3.4',
      'nome' => 'Reserva de Sobras',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '2.3.4.1',
      'nome' => 'Reserva Legal',
      'explicacao' => 'Fundo de Reserva (algumas cooperativas ainda chamam assim)',
    ],
    [
      'codigo' => '2.3.4.2',
      'nome' => 'RATES / FATES',
      'explicacao' => 'Fundo de assistência técnica educacional e social, Reserva de assistência técnica educacional e social (saldo final - depois de eliminadas as apropriações, quando houver)',
    ],
    [
      'codigo' => '2.3.4.3',
      'nome' => 'Outras Reservas',
      'explicacao' => 'Fundo de desenvolvimento economico, fundo de equalização, Fundo Natalino, Fundo de Descanso Anual, Fundo DIT (Diária por Incapacidade Temporária), fundo de melhoramento, fundo para capital de giro, perdas rateadas/ acumuladas',
    ],
    [
      'codigo' => '2.3.5',
      'nome' => 'Sobra/Perda Líquida a Disposição da AGO',
      'explicacao' => 'Sobras ou perdas do exercício',
    ],
    [
      'codigo' => '2.4',
      'nome' => 'Compensação (Passivo)',
      'explicacao' => 'Contas novas PR',
    ],
    [
      'codigo' => '2',
      'nome' => 'TOTAL Passivo e Patrimônio Líquido',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
  ];

  protected $array_df_3 = [
    [
      'codigo' => '3.1',
      'nome' => 'Ingressos e Receitas Brutas',
      'explicacao' => 'Soma(3.1.1 e 3.1.2) feita por fórmula.',
    ],
    [
      'codigo' => '3.1.1',
      'nome' => 'de Vendas (Liq. De Devolução)',
      'explicacao' => 'Vendas de produtos ou mercadorias. . As devoluções devem ser colocadas após a fórmula (Soma(3.1.1;3.1.2)-Devoluções)',
    ],
    [
      'codigo' => '3.1.2',
      'nome' => 'Receitas Operacionais de Serviços',
      'explicacao' => 'Prestação de serviços',
    ],
    [
      'codigo' => '3.2',
      'nome' => '(-) Impostos Contribuições S/ Vendas E Serviços',
      'explicacao' => 'Impostos incidentes sobre vendas( sempre colocar negativo)',
    ],
    [
      'codigo' => '3.3',
      'nome' => 'Ingressos e Receitas Líquidas',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.4',
      'nome' => '(-)  Custos',
      'explicacao' => 'Dispêndio com produtos e mercadorias vendidas , retirar crédito tributário, quando houver',
    ],
    [
      'codigo' => '3.4.1',
      'nome' => 'Repasse a Cooperados - Vendas',
      'explicacao' => 'Repasses a cooperados referentes a vendas',
    ],
    [
      'codigo' => '3.4.2',
      'nome' => 'Repasse a Cooperados - Serviços',
      'explicacao' => 'Repasses a cooperados referentes a serviços',
    ],
    [
      'codigo' => '3.4.3',
      'nome' => 'Dispêndios e Custos de Vendas',
      'explicacao' => '',
    ],
    [
      'codigo' => '3.4.4',
      'nome' => 'Dispêndios e Custos de Serviços',
      'explicacao' => '',
    ],
    [
      'codigo' => '3.5',
      'nome' => 'Sobra e Margem Bruta',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.6',
      'nome' => '(-) Dispêndios e Despesas Operacionais',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.6.1',
      'nome' => '(-) Comerciais',
      'explicacao' => 'Dispêndios diretos ao produto; Dispendio com vendas, mercadorias e embalagens, frete, bonificação, descontos, comissões,  fornecimento de mercadoria',
    ],
    [
      'codigo' => '3.6.2',
      'nome' => '(-) de Pessoal',
      'explicacao' => 'Dispêndio com pessoal, honorários diretoria',
    ],
    [
      'codigo' => '3.6.3',
      'nome' => '(-) Administrativas',
      'explicacao' => 'Dispêndios gerais e administrativos, dispêndio com funcionamento, ocupação, utilidades, publicidade e propaganda',
    ],
    [
      'codigo' => '3.6.4',
      'nome' => '(-) Tributárias',
      'explicacao' => 'Dispêndios tributários, parcelamento refis',
    ],
    [
      'codigo' => '3.6.5',
      'nome' => '(-) Técnicas',
      'explicacao' => 'Dispendios com manutenção, serviços técnicos',
    ],
    [
      'codigo' => '3.6.6',
      'nome' => '(-) de Depreciação',
      'explicacao' => 'Despesa com depreciação ',
    ],
    [
      'codigo' => '3.6.7',
      'nome' => '(-) Outras',
      'explicacao' => 'Despesas operacionais, despesas não dedutíveis',
    ],
    [
      'codigo' => '3.6.8',
      'nome' => '(-) Juros sobre Capital Proprio',
      'explicacao' => 'Juros sobre capital integralizado',
    ],
    [
      'codigo' => '3.7',
      'nome' => 'Outros Resultados Operacionais',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.7.1',
      'nome' => 'Outros Ingressos e Receitas Operacionais',
      'explicacao' => 'Outros ingressos operacionais',
    ],
    [
      'codigo' => '3.7.2',
      'nome' => '(-) Outros Dispêndios Operacionais e Patrimoniais',
      'explicacao' => 'Custo de mercadorias de revenda, perda na venda de imobilizado',
    ],
    [
      'codigo' => '3.8',
      'nome' => 'Resultado de Equivalência Patrimonial',
      'explicacao' => '',
    ],
    [
      'codigo' => '3.9',
      'nome' => 'Resultado de Operações Com Coligadas/Controladas',
      'explicacao' => '',
    ],
    [
      'codigo' => '3.10.',
      'nome' => 'Sobra/Perda Operacional (Antes Result Financ)',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.11',
      'nome' => 'Resultado Financeiro Líquido',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.11.1',
      'nome' => 'Ingressos e Receitas Financeiras',
      'explicacao' => 'Ingressos financeiros, receitas não operacionais, venda de imobilizado, descontos obtidos, rendimentos de aplicações',
    ],
    [
      'codigo' => '3.11.2',
      'nome' => '(-) Dispêndios e Despesas Financeiras',
      'explicacao' => 'Dispêndios financeiros líquidos, dispêndios bancários, juros e descontos',
    ],
    [
      'codigo' => '3.12',
      'nome' => 'Sobra/Perda Exercício (Antes dos Tributos)',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.13',
      'nome' => '(-) Provisão de Impostos S/ Resultado',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os impostos não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '3.13.1',
      'nome' => '(-) Provisão IRPJ',
      'explicacao' => 'Imposto de renda',
    ],
    [
      'codigo' => '3.13.2',
      'nome' => '(-) Provisão CSSL',
      'explicacao' => 'Contribuição social',
    ],
    [
      'codigo' => '3.14',
      'nome' => 'Sobra/Perda Líquida Exercício (Antes Ajustes)',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.15',
      'nome' => '(+/-) Ajustes Legais',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.15.1',
      'nome' => '(-) Destinação Reserva de Incentivos Fiscais',
      'explicacao' => 'Reserva de Incentivos Fiscais decorrentes de doações ou subvenções governamentais para investimentos',
    ],
    [
      'codigo' => '3.15.2',
      'nome' => '(-) Créditos Fiscais a Realizar',
      'explicacao' => '',
    ],
    [
      'codigo' => '3.15.3',
      'nome' => '(+) Realização Reserva Reavaliação',
      'explicacao' => 'Realização de reservas de reavaliação e ajuste de avaliação patrimonial',
    ],
    [
      'codigo' => '3.16',
      'nome' => 'Sobra/Perda Líquida Exercício (Antes Destin)',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.17',
      'nome' => '(+/-) Destinações Legais e Estatutárias',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3.17.1',
      'nome' => '(-) Reserva Legal',
      'explicacao' => 'Fundo de reserva legal (reservas negativas)',
    ],
    [
      'codigo' => '3.17.2',
      'nome' => '(-) RATES / FATES',
      'explicacao' => 'Fundo de assistência técnica educacional e social, Reserva de assistência técnica educacional e social (saldo final - depois de eliminadas as apropriações como transferência de resultados com terceiros para RATES e utilização da RATES, quando houver)',
    ],
    [
      'codigo' => '3.17.3',
      'nome' => '(-) Participação no Resultado',
      'explicacao' => '',
    ],
    [
      'codigo' => '3.17.4',
      'nome' => '(-) Capitalização',
      'explicacao' => 'Fundo de capital de giro,  capital social',
    ],
    [
      'codigo' => '3.17.5',
      'nome' => '(-) Outras Reservas/Especificar',
      'explicacao' => 'Reserva sobre sobras a realizar (perda no exercício anterior),  reserva de ganho de equivalência patrimonial',
    ],
    [
      'codigo' => '3.17.6',
      'nome' => '(+) Utilização de Reservas',
      'explicacao' => 'Retorno de sobras não distribuídas, realização de reservas',
    ],
    [
      'codigo' => '3.18',
      'nome' => 'Sobras ou Perdas a Disposição da AGO',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '3',
      'nome' => 'TOTAL Contas de Resultado',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
  ];
}

