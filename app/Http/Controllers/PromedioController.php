<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use App\Models\TaCurso;
use App\Models\TaCiclo;
use App\Models\TaPeriodo;
use App\Models\TaRubrica;
use App\Models\TaRubro;
use App\Models\TaNotaPromedio;
use App\Models\TaNotaRubrica;
use App\Models\TaNotaRubro;

class PromedioController extends Controller {

	public function index(Request $request)
	{
		//Verificar que la sesión iniciada sea válida y que el usuario tenga acceso a esta página
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::info('Se intento entrar a la pagina de busqueda del registro de notas sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1 && $usuario['rol'] != 4 && $usuario['rol'] != 5) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento acceder a la pagina de busqueda del registro de notas sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Extraer cursos según clínica
		$db_cursos = TaCurso::where('cln_id', 1)->get();
		if (empty($db_cursos)) {
			Log::info('El usuario con id ' . $usuario['userid'] . 'intento acceder a la pagina de busqueda del registro de notas, pero la clinica donde labora no tiene ingres_cursor(result)s registrados.');
			return view('intranet.ta_error', ['tipo' => 'notas', 'faltante' => 'curso']);
		}
		$db_cursos = $db_cursos->toArray();
		$cur_id = array_map(function($o) { return $o['cur_id']; }, $db_cursos);
		$cur_nombre = array_map(function($o) { return "[" . $o['cur_codigo'] . "] " . $o['cur_descrip']; }, $db_cursos);
		$cursos = array_combine($cur_id, $cur_nombre);

		//Extraer ciclos según clínica
		$db_ciclos = TaCiclo::where('cln_id', 1)->get();
		if (empty($db_ciclos)) {
			Log::info('El usuario con id ' . $usuario['userid'] . 'intento acceder a la pagina de busqueda del registro de notas, pero la clinica donde labora no tiene ciclos registrados.');
			return view('intranet.ta_error', ['tipo' => 'notas', 'faltante' => 'ciclo']);
		}
		$db_ciclos = $db_ciclos->toArray();
		$cic_id = array_map(function($o) { return $o['cic_id']; }, $db_ciclos);
		$cic_nombre = array_map(function($o) { return $o['cic_nombre']; }, $db_ciclos);
		$ciclos = array_combine($cic_id, $cic_nombre);

		//Para poder mostrar los selects, se necesita saber el periodo del primer curso y primer ciclo en tabla:
		$periodo = TaPeriodo::where(['cur_id' => $cur_id[0], 'cic_id' => $cic_id[0]])->first();
		if (empty($periodo)) {
			$periodo = ['per_id' => 0, 'per_semanas' => 0];
		}
		//Obtenemos las rúbricas del periodo
		$rubricas = TaRubrica::where('per_id', $periodo['per_id'])->get();
		if (!empty($rubricas)) $rubricas = $rubricas->toArray();

		//Formatear rúbricas para el select
		$rba_id = [0];
		$rba_nombre = ['Todas'];
		foreach ($rubricas as $rubrica) {
			array_push($rba_id, $rubrica['rba_id']);
			array_push($rba_nombre, $rubrica['rba_nombre']);
		}
		$rubricas = array_combine($rba_id, $rba_nombre);

		//Formatear semanas para el select
		$semanas = range(1, $periodo['per_semanas']);
		$semanas = array_combine($semanas, $semanas);

		//Ir a la página de notas
		return view('intranet.ta_notas_busq', ['cursos' => $cursos, 'ciclos' => $ciclos, 'periodo' => $periodo, 'rubricas' => $rubricas, 'semanas' => $semanas]);
	}

	public function obtenerRubricas(Request $request)
	{
		//Obtener el periodo según el curso y ciclo
		$periodo = TaPeriodo::where(['cur_id' => $request['curso'], 'cic_id' => $request['ciclo']])->first();
		if (empty($periodo)) {
			$periodo = ['per_id' => 0, 'per_semanas' => 0];
		} else $periodo = $periodo->toArray();
		//Obtener las rúbricas del periodo obtenido
		$rubricas = TaRubrica::where('per_id', $periodo['per_id'])->get();
		if (!empty($rubricas)) $rubricas = $rubricas->toArray();

		//Formatear rúbricas para el select
		$rba_id = [0];
		$rba_nombre = ['Todas'];
		foreach ($rubricas as $rubrica) {
			array_push($rba_id, $rubrica['rba_id']);
			array_push($rba_nombre, $rubrica['rba_nombre']);
		}
		$rubricas = array_combine($rba_id, $rba_nombre);

		//Formatear semanas para el select
		$semanas = range(0, $periodo['per_semanas']);
		$semanas[0] = 'Todas';
		
		//Ir a la vista de edición de notas
		return response()->json([$periodo, $rubricas, $semanas]);
	}

}