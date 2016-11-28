<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\TaCurso;
use App\Models\TACLINICA;

class CursoController extends Controller {

	public function index(Request $request) {
		//Verificar si el usuario tiene permisos para visualizar esta pantalla
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::info('Se intento entrar al mantenimiento de cursos sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento acceder al mantenimiento de cursos sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Obtener todos los cursos, y colocarles el nombre respectivo de su clinica
		$cursos = TaCurso::all()->toArray();
		foreach ($cursos as &$curso) {
			$curso['cln_nombre'] = TACLINICA::where('cln_id', $curso['cln_id'])->value('cln_nombre');
		}

		//Obtener todas las clínicas, para los select
		$db_clinicas = TACLINICA::all()->toArray();
		$cln_id = array_map(function($o) { return $o['cln_id']; }, $db_clinicas);
		$cln_nombre = array_map(function($o) { return $o['cln_nombre']; }, $db_clinicas);
		$clinicas = array_combine($cln_id, $cln_nombre);

		return view('intranet.mant_curso', ['cursos' => $cursos, 'clinicas' => $clinicas]);
	}

	public function store(Request $request) {
		//Verificar que los campos no estén vacíos
		if ($request['cur_descrip'] == null || $request['cur_codigo'] == null)
			Session::flash('msg-error', 'Se deben ingresar todos los datos.');
		else {
			//Crear un nuevo curso
			$curso = TaCurso::create([
				'cur_descrip' => $request['cur_descrip'],
				'cur_codigo' => $request['cur_codigo'],
				'cln_id' => '1'
			]);
			//Verificar si se pudo guardar correctamente
			if ($curso->save()) 
				Session::flash('msg-ok', 'El curso fue guardado exitosamente.');
			else
				Session::flash('msg-error', 'No se pudo grabar el nuevo curso. Intente nuevamente m&aacute;s tarde.');
		}
		return Redirect::to('/curso');
	}

	public function update(Request $request, $id) {
		$curso = TaCurso::find($id);
		Session::flash('message', 'El curso fue actualizado correctamente.');
		return Redirect::to('/curso');
	}

}