<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/prototipo/registro', function () {
    return view('prototipo/dirregistro');
});
Route::get('/prototipo/busqueda', function () {
    return view('prototipo/dirbusqueda');
});

Route::get('/casosregistro', function () {
    return view('intranet/registro_casos');
});
Route::get('/casosbusqueda', function () {
    return view('intranet/busqueda_casos');
});


Route::resource('directorio','directorioController');
Route::resource('casos','casosController');