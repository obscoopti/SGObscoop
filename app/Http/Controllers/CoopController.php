<?php

namespace App\Http\Controllers;

use App\Instituicao;
use App\Arquivo_coop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista_coop(){
      $lista_coop = DB::table('instituicao')
    	// $lista_coop = DB::table('coop.instituicao')
    		->select('id','cnpj','nome', 'tipo')
    		// ->take(5)
    		->get();
    	return view('lista_coop')
    		->with('lista_coop', $lista_coop)
    		->render();
    }

    public function upload_coop(Request $request){
        $coop = DB::table('instituicao')
        /*$coop = DB::table('coop.instituicao')*/
                ->where('id','=', $request->input('id'))
                ->first();
        return view('upload_coop')
            ->with("array_lFonte", $this->array_lFonte)
            ->with("coop", $coop);
    }

    public function estatuto_coop(Request $request){
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

    public function fonte_coop(Request $request){
    		// return $request->input('id');
    		$coop = DB::table('instituicao')
        /*$coop = DB::table('coop.instituicao')*/
    			->where('id','=', $request->input('id'))
    			->first();
        $fontes = DB::table('arquivo_coop')
          ->select('nome','tipo','ano')
          ->where('instituicao_id','=',$coop->id)
          ->orderby('ano','asc')
          ->get();

          $anos['anos'] = DB::select(
            DB::raw(
              "select distinct ano::integer from arquivo_coop where instituicao_id = {$coop->id}")
          );

          // return var_dump($anos);

        // $balancetes 
        $anos['balancetes']=DB::select(
          DB::raw(
            "select distinct substring(data_base::text from 1 for 4 )::integer as ano from coop.balancetes
            where cnpj = '00000000' and
            data_base::text like '%12'
            order by substring(data_base::text from 1 for 4 )::integer asc" 
          )
        );

        //Faz o merge dos anos e tira repeticao
        foreach($anos as $anos_aux)
          foreach ($anos_aux as $ano)
            $anos_f[(int)$ano->ano] = (int)$ano->ano; 

        foreach($anos['balancetes'] as $balancete_aux)
          $balancetes[$balancete_aux->ano] = $balancete_aux->ano; 
            
        sort($anos_f);
        // var_dump($anos_f);
        // return;
          
        $tab_dados = [];
        foreach ($anos_f as $ano) { // varia os anos encontrados 
          $array_tFonte =  $this->array_tFonte; // Zera o vetor com os tipos do ano
          foreach($array_tFonte as $kFonte=>$vFonte){ // varia os tipos para encontrar ocorrencia
            foreach ($fontes as $fonte) { // varias as fontes vindas do bd e preenche ocorrencia
              if($fonte->tipo == $kFonte && $fonte->ano == $ano){
                $array_tFonte[$kFonte] = 1; 
              }
              if(in_array($ano, $balancetes) && $kFonte == 'Balancete'){
                $array_tFonte[$kFonte] = 1; 
              }
            }
          }
          $tab_dados[(int)$ano] = [];
          $tab_dados[(int)$ano] = $array_tFonte;
        }
          // var_dump($tab_dados);
          // return;

        return view('fonte_coop')
          ->with('coop',$coop)
        	->with('tab_dados',$tab_dados);
    }

    public function nova_coop(Request $request){
    	return view('nova_coop');
    }

    public function editar_coop(Request $request){
      $coop = DB::table('instituicao')
      // $coop = DB::table('coop.instituicao')
                ->where('id','=', $request->input('id'))
                ->first();
      $request->session()->flash('id_session',$coop->id);
      return view('editar_coop')
        ->with('coop', $coop);

    }

    public function nova_submit_coop(Request $request){
       $this->validate($request,[
          'nome_coop'=>'required',
          'cnpj_coop'=>'required|max:18',
          'uf_coop'=>'max:2',
          'telefone_coop'=>'max:14',
          'fax_coop'=>'max:14',
          'cep_coop'=>'max:9',
          'seg_coop'=>'required',
      ]);
       $cnpj = str_replace (  array('.', '-', '/') ,  '' ,  $request->cnpj_coop );
      Instituicao::create([
        'cnpj'=>$cnpj, 'telefone'=>$request->telefone_coop,
        'fax'=>$request->fax_coop, 'natureza_juridica'=>$request->natureza_coop,
        'tipo'=>$request->seg_coop, 'situacao'=>$request->sit_coop,
        'auditor'=>$request->auditor_coop, 'endereco_eletronico'=>$request->email_coop,
        'codigo_compensacao'=>$request->cod_comp_coop, 'nome'=>$request->nome_coop,
        'endereco'=>$request->end_coop, 'complemento'=>$request->compl_coop,
        'bairro'=>$request->bairro_coop, 'cep'=>$request->cep_coop,
        'municipio'=>$request->municipio_coop, 'uf'=>$request->uf_coop,
        'tipo_cooperativa'=>$request->tipo_coope, 'classe_cooperativa'=>$request->class_coop,
        'site'=>$request->site_coop, 'categ_coop_sing'=>$request->cat_coop,
        'filiacao'=>$request->filiacao_coop, 'lat'=>$request->lat_coop,
        'long'=>$request->long_coop,
      ]);
      return redirect('lista_coop')->with('status', 'Inserido com sucesso.');
    }

    public function editar_submit_coop(Request $request){
      $id = $request->session()->get('id_session');

       $this->validate($request,[
          'nome_coop'=>'required',
          'cnpj_coop'=>'required|max:18',
          'uf_coop'=>'max:2',
          'telefone_coop'=>'max:14',
          'fax_coop'=>'max:14',
          'cep_coop'=>'max:9',
          'seg_coop'=>'required',
      ]);
      $coop = Instituicao::find($id);

      $cnpj = str_replace (  array('.', '-', '/') ,  '' ,  $request->cnpj_coop );
      $coop->fill([
        'cnpj'=>$cnpj, 'telefone'=>$request->telefone_coop,
        'fax'=>$request->fax_coop, 'natureza_juridica'=>$request->natureza_coop,
        'tipo'=>$request->seg_coop, 'situacao'=>$request->sit_coop,
        'auditor'=>$request->auditor_coop, 'endereco_eletronico'=>$request->email_coop,
        'codigo_compensacao'=>$request->cod_comp_coop, 'nome'=>$request->nome_coop,
        'endereco'=>$request->end_coop, 'complemento'=>$request->compl_coop,
        'bairro'=>$request->bairro_coop, 'cep'=>$request->cep_coop,
        'municipio'=>$request->municipio_coop, 'uf'=>$request->uf_coop,
        'tipo_cooperativa'=>$request->tipo_coope, 'classe_cooperativa'=>$request->class_coop,
        'site'=>$request->site_coop, 'categ_coop_sing'=>$request->cat_coop,
        'filiacao'=>$request->filiacao_coop, 'lat'=>$request->lat_coop,
        'long'=>$request->long_coop,
      ]);
      $coop->save();
      return redirect()->back()->with('status', 'Editado com sucesso.');
    }
    public function showUploadFile(Request $request) {
      $this->validate($request,[
        'arq'=>'required',
        'tArq'=>'required',
        'anoArq'=>'required',
        'coop_id'=>'required',
        'coop_cnpj'=>'required',
        ]
      );
      // return $request->all();
      $file = $request->file('arq') ;
   
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName() ;
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension() ;
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath() ;
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize() ;
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType() ;

      $file_name = $request->coop_cnpj."_".$request->tArq."_".$request->anoArq.'.'.$file->getClientOriginalExtension();
   
      //Move Uploaded File
      // $destinationPath = 'uploads';
      $destinationPath = 'uploads/'.$request->tArq;

      try{
            Arquivo_coop::create([
                  'tipo'=> $request->tArq, 
                  'nome'=> $file_name, 
                  'instituicao_id'=> $request->coop_id, 
                  'ano'=> $request->anoArq,
            ]);
      }catch(\Exception $e){
        return redirect()->back()->withErrors("Este tipo de arquivo ({$request->tArq}) já existe para {$request->anoArq}.");
      }
      $file->move($destinationPath,$file_name );
      // Storage::disk('gdrive')->put('churras.txt', $file);
      return redirect()->back()->with('status', 'Upload feito com sucesso.');

   }
}
