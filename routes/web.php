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

Route::get('pruebas/', 'VistasController@array');

Route::get('jugar/','VistasController@play');

Route::get('acerca de/','VistasController@about');

Route::post('jugar/random/','personajeController@generar')->name('random');

Route::post('jugar/personas/','personajeController@tomar')->name('personas');

Route::get('historia/','VistasController@game')->name('game');

/*Route::get('hola/{id}', function($id){//obligatorio
    return "Bienvenido useer ".$id;
});
Route::get('hol/{id?}', function($id = null){//opcional
    return "Bienvenido useer ".$id;
});*/
//Route::get('users/{id}', 'UserController@show');
//Route::get('/', 'UserController@saluda');