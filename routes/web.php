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
Route::get('/saludo/{nombre}/{color}', function($nombre, $color){
	return view('saludo')->with[('nombre'=>$nombre, 'color'=>$color)];

})->where('nombre','[a-zA-Z]+');

/* Ruta formulario */
Route::get('/formulario', function(request $request){
	return view('formulario');

});


