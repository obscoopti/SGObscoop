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
          'nome'=>'required'
      ]);
      Instituicao::create([
        'cnpj'=>$request->cnpj, 'telefone'=>$request->telefone,
        'fax'=>$request->fax, 'natureza_juridica'=>$request->natureza,
        'tipo'=>$request->tipo, 'situacao'=>$request->sit,
        'auditor'=>$request->auditor, 'endereco_eletronico'=>$request->email,
        'codigo_compensacao'=>$request->cod_comp, 'nome'=>$request->nome,
        'endereco'=>$request->end, 'complemento'=>$request->compl,
        'bairro'=>$request->bairro, 'cep'=>$request->cep,
        'municipio'=>$request->municipio, 'uf'=>$request->uf,
        'tipo_cooperativa'=>$request->tipo_coop, 'classe_cooperativa'=>$request->class_coop,
        'site'=>$request->site, 'categ_coop_sing'=>$request->cat_coop,
        'filiacao'=>$request->filiacao, 'lat'=>$request->lat,
        'long'=>$request->long,
      ]);
      return $request->all();
    }
    public function showUploadFile(Request $request) {
      $file = $request->file('image') ;
   
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
   
      //Move Uploaded File
      $destinationPath = 'uploads';
      // $file->move($destinationPath,$file->getClientOriginalName() );
      // Storage::disk('gdrive')->put('churras.txt', $file);
   }
}
