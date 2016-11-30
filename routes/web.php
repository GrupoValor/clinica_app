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
    //return view('welcome');
	return view('web/indexWeb');
});


Route::get('/login', function () {
    return view('login/login');
});

Route::get('/ip', 'loginController@ImpressionCount');

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

/*************************************
 *         REGISTRO DE CASOS         *
 *************************************/
 
Route::get('/casos_registro', function () {
    return view('intranet/registro_casos');
});
Route::get('/casos_busqueda', function () {
    return view('intranet/busqueda_casos');
});

Route::get('/miscasos', 'casosController@miscasos');
Route::get('/mispendientes', 'casosController@getpendientes');

//perfil
Route::get('/perfil', function (Request $request) {
    $result = app('App\Http\Controllers\loginController')->session($request);
    if($result == '1')
        return view('intranet/profile');
    else
        return view('login/login');
});

/*************************************
 *         TAREAS ACADÉMICAS         *
 *************************************/
 
//Vista de alumno
Route::get('/ta_alumnos', function () {
    return view('intranet/ta_alumno');
});
//Mantenimiento de rúbricas
Route::resource('ta_registro', 'PeriodoController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('rubrica', 'RubricaController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('rubro', 'RubroController', ['only' => ['store', 'update', 'destroy']]);
//Registro de notas
Route::resource('ta_notas', 'PromedioController');
Route::get('ta_notas_per', 'PromedioController@obtenerRubricas');
Route::resource('ta_notas_res', 'NotasController');

/***************************************
 * MANTENIMIENTOS DE TAREAS ACADEMICAS *
 ***************************************/
Route::resource('mant_curso', 'CursoController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('mant_ciclo', 'CicloController', ['only' => ['index', 'store', 'update', 'destroy']]);

//directorio de usuarios
Route::get('directorio', function () {
    return view('intranet/directorio');
});

//mapa
Route::get('/mapa_intranet', function () {
    return view('intranet/kari_mapa2');
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
Route::get('manten2', function (Request $request) {
    $result = app('App\Http\Controllers\loginController')->session($request);
    if($result == '1')
        return view('intranet/kari_manten2');
    else
        return view('login/login');
});

//TODO no se si borrar esta parte hasta antes de reportes
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


//gestor de contenidos
Route::get('/eventos_intranet', function () {
    return view('intranet/kari_eventos2');
});
Route::get('/noticias_intranet', function () {
    return view('intranet/kari_noticias');
});


//noticas
Route::get('/noticias', function () {
    return view('intranet/kari_noticias');
});

//page error
Route::get('/error-500', function () {
    return view('errors/500');
});

//WEB

Route::get('/log', function () {
    return view('intranet/log');
});
Route::get('/log_service', 'logController@get');

//Pagina web
Route::get('/inicio', function () {
    return view('web/indexWeb');
});
//web eventos
Route::get('/eventos', function () {
    return view('web/eventos');
});
//web mapa
Route::get('/mapaweb', function () {
    return view('web/mapaWeb');
});
//web nosotros
Route::get('/nosotros', function () {
    return view('web/nosotros');
});
//web noticias
Route::get('/noticias', function () {
    return view('web/noticias');
});
//web plantillaEvento
Route::get('/web/plantillaEvento', function () {
    return view('web/plantillaEvento');
});
//web plantillaNoticia
Route::get('/web/plantillaNoticia', function () {
    return view('web/plantillaNoticia');
});


//mapa
Route::get('/mapa_web', function () {
    return view('web/mapaWeb');
});
//web inicio
Route::get('/web/inicio', function () {
    return view('web/indexWeb');
});
//web eventos
Route::get('/web/eventos', function () {
    return view('web/eventos');
});
//web mapa
Route::get('/web/mapaweb', function () {
    return view('web/mapaWeb');
});
//web nosotros
Route::get('/web/nosotros', function () {
    return view('web/nosotros');
});
//web noticias
Route::get('/web/noticias', function () {
    return view('web/noticias');
});
//web plantillaEvento
Route::get('/web/plantillaEvento', function () {
    return view('web/plantillaEvento');
});
//web plantillaNoticia
Route::get('/web/plantillaNoticia', function () {
    return view('web/plantillaNoticia');
});

//web pop-up-clinica
Route::get('/web/pop-up-clinica', function () {
    return view('web/pop-up-clinica');
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
Route::resource('service_evento','eventoController');
Route::resource('service_noticia','noticiaController');

//Route::resource('test','testController');

