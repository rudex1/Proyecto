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

/* Ruta saludo */
/*Route::get('/   /{nombre}/{color}', function($nombre, $color){
return view('saludo')->with[('nombre'=>$nombre, 'color'=>$color)];

})->where('nombre','[a-zA-Z]+');*/

/* Ruta formulario */
Route::get('/formulario', function () {
    return view('formulario');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/bienvenido', function () {
    return view('bienvenido');
});

Route::get('/saludo/{nombre}/{color}', 'PaginaController@index');
//Route::get('/saludo', 'PaginaController@store');
//calculadora*/
Route::get('/calculadora', 'AppController@postNombre');
Route::post('/calculadora', 'AppController@calcular');
