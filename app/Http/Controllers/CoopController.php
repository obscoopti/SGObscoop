<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CoopController extends Controller
{
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
    	$lista_coop = DB::table('coop.instituicao')
    		->select('id','cnpj','nome')
    		// ->take(5)
    		->get();
    	return view('lista_coop')
    		->with('lista_coop', $lista_coop)
    		->render();
    }

    public function upload_coop(Request $request){
        $coop = DB::table('coop.instituicao')
                ->where('id','=', $request->input('id'))
                ->first();
        return view('upload_coop')
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
    		$coop = DB::table('coop.instituicao')
    			->where('id','=', $request->input('id'))
    			->first();
        return view('fonte_coop')
        	->with('coop',$coop);
    }

    public function nova_coop(Request $request){
    	return view('nova_coop');
    }

    public function submit_coop(Request $request){
       $this->validate($request,[
          'nome_coop'=>'required'
      ]);
       $cnpj = str_replace (  array('.', '-', '/') ,  '' ,  $request->cnpj_coop );
      Instituicao::create([
        'cnpj'=>$cnpj, 'telefone'=>$request->telefone_coop,
        'fax'=>$request->fax_coop, 'natureza_juridica'=>$request->natureza_coop,
        'tipo'=>$request->tipo_coop, 'situacao'=>$request->sit_coop,
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
      return $request->all();
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
      $destinationPath = 'uploads';
      $file->move($destinationPath,$file_name );
      // Storage::disk('gdrive')->put('churras.txt', $file);
   }
}
