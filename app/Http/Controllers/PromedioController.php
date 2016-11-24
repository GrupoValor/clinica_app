<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
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
		//Verificar si el usuario tiene permisos para visualizar esta pantalla
		//$usuario = $request->session()->get('user');
		//if (empty($usuario)) return view('login/login');

		//Extraer cursos según clínica
		$db_cursos = TaCurso::where('cln_id', 1)->get()->toArray();
		$cur_id = array_map(function($o) { return $o['cur_id']; }, $db_cursos);
		$cur_nombre = array_map(function($o) { return "[" . $o['cur_codigo'] . "] " . $o['cur_descrip']; }, $db_cursos);
		$cursos = array_combine($cur_id, $cur_nombre);

		//Extraer ciclos según clínica
		$db_ciclos = TaCiclo::where('cln_id', 1)->get()->toArray();
		$cic_id = array_map(function($o) { return $o['cic_id']; }, $db_ciclos);
		$cic_nombre = array_map(function($o) { return $o['cic_nombre']; }, $db_ciclos);
		$ciclos = array_combine($cic_id, $cic_nombre);

		//Para 
		//Formatear rúbricas para el select
		$rba_id = [0];
		$rba_nombre = ['Todas'];

		//Ir a la página de notas
		return view('intranet.ta_notas_busq', ['cursos' => $cursos, 'ciclos' => $ciclos]);		
	}

	public function datos(Request $request)
	{
		//Obtener

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
		return response()->json();
	}

}