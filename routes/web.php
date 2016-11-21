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

Route::get('/miscasos', 'casosController@miscasos');


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
//TAREAS ACADÉMICAS - Mantenimiento de rúbricas
Route::resource('ta_registro', 'PeriodoController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('rubrica', 'RubricaController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('rubro', 'RubroController', ['only' => ['store', 'update', 'destroy']]);
//TAREAS ACADÉMICAS - Registro de notas
Route::get('/ta_notas', function () {
    return view('intranet/ta_notas');
});

//directorio de usuarios
Route::get('directorio', function () {
    return view('intranet/directorio');
});

//prueba
//mapa
Route::get('/mapa_intranet2', function () {
    return view('intranet/kari_mapa2');
});

Route::get('/mapa_intranet', function () {
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
//mantenimiento de clinicas
Route::get('mant_clinica',function(){
   return view('intranet/clinica_registro');
});
//mantenimiento unificado
Route::get('manten', function () {
    return view('intranet/mantenimiento');
});
//mantenimiento unificado
Route::get('manten2', function (Request $request) {
    $result = app('App\Http\Controllers\loginController')->session($request);
    if($result == '1')
        return view('intranet/kari_manten2');
    else
        return view('login/login');
});
Route::get('docente', function () {
    return view('intranet/docente');
});

Route::get('alumno', function () {
    return view('intranet/alumno');
});
Route::get('cliente', function () {
    return view('intranet/alumno');
});
//reportes

Route::get('mantenimiento2', function () {
    return view('intranet/mantenimiento2');
});

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
Route::resource('service_alumno_ta','taAlumnoController');
Route::resource('service_clinica','clinicaController');

//Route::resource('test','testController');

