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
Route::get('/nova_coop', 'CoopController@nova_coop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
