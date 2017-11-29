<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    		->with('lista_coop', $lista_coop);
    }

    public function upload_coop(Request $request){
        return view('upload_coop');
    }
}
