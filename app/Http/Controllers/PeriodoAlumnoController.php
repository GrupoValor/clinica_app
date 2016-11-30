<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use App\Models\TAUSUARIO;
use App\Models\TAALUMNO;
use App\Models\TaCurso;
use App\Models\TaCiclo;
use App\Models\TaPeriodo;

class PeriodoAlumnoController extends Controller {

	public function index(Request $request)
	{
		//Verificar si el usuario tiene permisos para visualizar esta pantalla
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::info('Se intento entrar a la seleccion de alumnos para los periodos sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1 && $usuario['rol'] != 4) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento entrar a la seleccion de alumnos para los periodos sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Obtener el periodo a buscar
		$periodo = TaPeriodo::where('per_id', $request['periodo'])->first();
		if (empty($periodo)) {
			Log::info('El usuario con id ' . $usuario['userid'] . ' intento entrar a la seleccion de alumnos para un periodo no existente.');
			Session::flash('msg-err', 'El periodo que solicit&oacute; no existe.');
			return redirect()->action('PeriodoController@index');
		}
		if ($periodo['cln_id'] != $usuario['clinica']) {
			Log::warning('El usuario con id '. $usuario['userid'] . ' intento entrar a la seleccion de alumnos para un periodo del que no tiene permisos de edicion.');
			Session::flash('msg-err', 'No tiene permisos para ver este periodo.');
			return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
		}

		//Obtener todos los alumnos (no voluntarios) que pertenecen a la clinica
		$db_alumnos = TAALUMNO::where('alu_volunt', 0)->get()->toArray();
		$alumnos = array();
		foreach ($db_alumnos as $db_alumno) {
			//No incluir a los alumnos que estan ya registrados en otro periodo
			if (!empty($db_alumno['per_id']) && ($db_alumno['per_id'] != $periodo['per_id'])) continue;
			//Si no aparece en la tabla de usuarios o no pertenece a esta clinica tampoco se incluye
			$usu_alumno = TAUSUARIO::find($db_alumno['usu_id']);
			if (empty($usu_alumno) || ($usu_alumno['cln_id'] != $usuario['clinica'])) continue;
			//Si ha cumplido todo lo anterior, registrarlo en el arreglo de alumnos
			array_push($alumnos, ['alu_id' => $db_alumno['alu_id'], 'alu_nombre' => $db_alumno['alu_nombre'], 'alu_codigo' => $db_alumno['alu_codpuc'], 'per_id' => $db_alumno['per_id']]);
		}

		//Ir a la pagina de selección de alumnos
		Log::info('El usuario con id ' . $usuario['userid'] . ' entro a la pagina de seleccion de alumnos del mantenimiento de rubricas.');
		return view('intranet.ta_registro_alumnos', ['alumnos' => $alumnos, 'periodo' => $periodo]);
	}

	public function store(Request $request) {
		abort(404);
		$asd = $request['alumno'];
		print_r($asd);
	}
}