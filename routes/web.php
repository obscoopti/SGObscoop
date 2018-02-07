<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lista_coop', 'CoopController@lista_coop');
Route::get('/upload_coop', 'CoopController@upload_coop');
Route::get('/fonte_coop', 'CoopController@fonte_coop');
Route::post('/upload_coop','CoopController@showUploadFile') ;
Route::get('/nova_coop', 'CoopController@nova_coop');
Route::post('/nova_coop', 'CoopController@nova_submit_coop');
Route::get('/estatuto_coop', 'CoopController@estatuto_coop');
Route::get('/editar_coop', 'CoopController@editar_coop');
Route::post('/editar_coop', 'CoopController@editar_submit_coop');
Route::get('/df_coop', 'CoopController@df_coop');
Route::get('/cadastro_df', 'CoopController@cadastro_df');
Route::post('/df_submit', 'CoopController@df_submit');
Route::get('/download_coop', 'CoopController@download_coop');
Route::get('/download_submit','CoopController@download_submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/completa_cnpj', 'CoopController@completa_cnpj_banco');
Route::get('/atualiza_fk', 'CoopController@atualiza_fk');
Route::get('/atualiza_fk', 'CoopController@atualiza_fk');
