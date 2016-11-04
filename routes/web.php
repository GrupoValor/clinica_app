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



//prototipo

Route::get('/prototipo/registro', function () {
    return view('prototipo/dirregistro');
});
Route::get('/prototipo/busqueda', function () {
    return view('prototipo/dirbusqueda');
});

//index
Route::get('/index', function () {
    return view('intranet/index');
});

//casos
Route::get('/casos_registro', function () {
    return view('intranet/registro_casos');
});
Route::get('/casos_busqueda', function () {
    return view('intranet/busqueda_casos');
});

//perfil
Route::get('/perfil', function () {
    return view('intranet/profile');
});


//Tareas
Route::get('/ta_alumnos', function () {
    return view('intranet/ta_alumno');
});
Route::get('/ta_notas', function () {
    return view('intranet/ta_notas');
});
Route::get('/ta_rubricas', function () {
    return view('intranet/ta_rubricas');
});

//directorio de usuarios
Route::get('directorio', function () {
    return view('intranet/directorio');
});


//mapa
Route::get('/mapa', function () {
    return view('intranet/mapa');
});

//mantenimientos
Route::get('mant_prof', function () {
    return view('intranet/mantenimiento_profesor');
});
Route::get('mant_jp', function () {
    return view('intranet/mantenimiento_jp');
});
Route::get('mant_alu', function () {
    return view('intranet/mantenimiento_alumno');
});
Route::get('mant_cli', function () {
    return view('intranet/mantenimiento_cliente');
});

//mantenimiento unificado
Route::get('manten', function () {
    return view('intranet/mantenimiento');
});

//reportes

//gestor de contenidos
Route::get('/eventos', function () {
    return view('intranet/gestor_eventos');
});
Route::get('/noticias_registro', function () {
    return view('intranet/gestor_noticias_registro');
});

//page error
Route::get('/error-500', function () {
    return view('errors/500');
});

Route::resource('service_alumno','alumnoController');
Route::resource('service_jp','jpController');
Route::resource('service_profesor','profesorController');
Route::resource('service_docente','docenteController');
Route::resource('service_directorio','directorioController');
Route::resource('service_casos','casosController');
Route::resource('service_cliente','clienteController');
//Route::resource('test','testController');

