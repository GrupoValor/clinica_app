<?php
use Illuminate\Http\Request;
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


Route::get('/login', function () {
    return view('login/login');
});

Route::post('/login', 'loginController@login');
Route::get('/session', 'loginController@session');
Route::get('/user', 'loginController@user');
Route::get('/logout', 'loginController@logout');


//prototipo

Route::get('/prototipo/registro', function () {
    return view('prototipo/dirregistro');
});
Route::get('/prototipo/busqueda', function () {
    return view('prototipo/dirbusqueda');
});

//index
Route::get('/index', function (Request $request) {
    $result = app('App\Http\Controllers\loginController')->session($request);
    if($result == '1')
        return view('intranet/index');
    else
        return view('login/login');
});

//casos
Route::get('/casos_registro', function () {
    return view('intranet/registro_casos');
});
Route::get('/casos_busqueda', function () {
    return view('intranet/busqueda_casos');
});

//perfil

Route::get('/perfil', function (Request $request) {
    $result = app('App\Http\Controllers\loginController')->session($request);
    if($result == '1')
        return view('intranet/profile');
    else
        return view('login/login');
});


//Tareas
Route::get('/ta_alumnos', function () {
    return view('intranet/ta_alumno');
});
Route::resource('rubrica', 'RubricaController');
Route::resource('rubro', 'RubroController');
Route::get('/ta_notas', function () {
    return view('intranet/ta_notas');
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

Route::get('manten2', function () {
    return view('intranet/mantenimiento2');
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

