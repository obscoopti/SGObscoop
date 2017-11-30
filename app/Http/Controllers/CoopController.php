<?php

namespace App\Http\Controllers;

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
        $estatuto = DB::table('coop.estatuto')
                ->select('ano_estatuto', 'estatuto_completo')
                ->where('cnpj_estatuto','=', $request->input('cnpj'))
                ->orwhere('cnpj_estatuto_completo','=', $request->input('cnpj'))
                ->get();
        return view('estatuto_coop')
            ->with("estatuto", $estatuto)
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
