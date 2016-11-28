<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use App\Models\TaCiclo;
use App\Models\TACLINICA;

class CicloController extends Controller {

	public function index(Request $request)
	{
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
		$ciclos = TaCiclo::all()->toArray();
		foreach ($ciclos as &$ciclo) {
			$ciclo['cln_nombre'] = TACLINICA::where('cln_id', $curso['cln_id'])->value('cln_nombre');
		}

		//Obtener todas las clínicas, para los select
		$db_clinicas = TACLINICA::all()->toArray();
		$cln_id = array_map(function($o) { return $o['cln_id']; }, $db_clinicas);
		$cln_nombre = array_map(function($o) { return $o['cln_nombre']; }, $db_clinicas);
		$clinicas = array_combine($cln_id, $cln_nombre);

		return view('intranet.mant_ciclo', ['ciclos' => $ciclos, 'clinicas' => $clinicas]);
	}

	public function store(Request $request)
	{
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

		//Verificar que los campos no estén vacíos
		if (empty($request['cur_descrip']) || empty($request['cur_codigo'])) {
			Session::flash('msg-err', 'Se deben ingresar todos los datos.');
		} else {
			//Crear un nuevo curso
			$curso = TaCurso::create([
				'cur_descrip' => $request['cur_descrip'],
				'cur_codigo' => $request['cur_codigo'],
				'cln_id' => $request['cln_id']
			]);
			//Verificar si se pudo guardar correctamente
			if ($curso->save()) {
				Session::flash('msg-ok', 'El curso fue guardado exitosamente.');
				Log::info('El usuario con id '. $usuario['userid'] . 'agrego exitosamente un curso.');
			}
			else {
				Session::flash('msg-err', 'No se pudo grabar el nuevo curso. Intente nuevamente m&aacute;s tarde.');
				Log::error('El usuario con id '. $usuario['userid'] . ' tuvo un problema al guardar el curso.');
			}
		}

		return redirect()->action('CursoController@index');
	}

	public function update(Request $request)
	{
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

		//Obtener los campos
		$cur_id = $request['cur_edit_id'];
		$cur_descrip = $request['cur_edit_descrip'];
		$cur_codigo = $request['cur_edit_codigo'];
		$cln_id = $request['cln_edit_id'];

		//Verificar que los campos no estén vacíos
		if (empty($cur_id) || empty($cur_descrip) || empty($cur_codigo)) {//|| empty($cln_id)) {
			Session::flash('msg-err', 'Se deben ingresar todos los datos.');
		}
		elseif (!$this->es_entero_positivo($cur_id)) { //|| !$this->es_entero_positivo($cln_id)) {
			Session::flash('msg-err', 'El id del curso o de la clinica no es valido.');
		}
		else {
			$curso = TaCurso::find($cur_id);
			if (empty($curso)) {
				Session::flash('msg-err', 'No se ha encontrado alg&uacute;n curso que tenga el mismo id.');
			}
			$curso->cur_descrip = $cur_descrip;
			$curso->cur_codigo = $cur_codigo;
			//$curso->cln_id = $cln_id;
			if ($curso->save()) {
				Session::flash('msg-ok', 'El curso fue actualizado correctamente.');
				Log::info('El usuario con id '. $usuario['userid'] . 'modifico exitosamente un curso.');
			} else {
				Session::flash('msg-err', 'No se pudo actualizar el nuevo curso. Intente nuevamente m&aacute;s tarde.');
				Log::error('El usuario con id '. $usuario['userid'] . ' tuvo un problema al actualizar el curso.');
			}
		}		
		return redirect()->action('CursoController@index');
	}

	public function destroy(Request $request)
	{
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

		//Obtener el campo
		$curso = TaCurso::find($request['cur_del_id']);
		$curso->delete();
		Session::flash('msg-ok', 'El curso fue eliminado correctamente.');
		Log::info('El usuario con id ' . $usuario['userid'] . ' elimino exitosamente un curso.');
		return redirect()->action('CursoController@index');
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}
}