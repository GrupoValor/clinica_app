<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use App\Models\TAALUMNO;
use App\Models\TaCurso;
use App\Models\TaCiclo;
use App\Models\TaPeriodo;
use App\Models\TaRubrica;
use App\Models\TaRubro;
use App\Models\TaNotaProm;
use App\Models\TaNotaRubrica;
use App\Models\TaNotaRubro;

class ComentarioController extends Controller {

	public function index(Request $request)
	{
		//Verificar si el usuario tiene permisos para visualizar esta pantalla
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::info('Se intento entrar a la vista de comentarios del profesor sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1 || ) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento entrar a la vista de comentarios del profesor sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Obtener los datos necesarios
		$alu_id = $request['alumno'];
		$rbo_id = $request['rubro'];
		$semana = $request['semana'];
		if (empty($alu_id) || empty($rbo_id) || empty($semana)) {
			Log::info('Se intento entrar al mantenimiento de cursos sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');

		}

		//Obtener todos los comentarios

	}

}