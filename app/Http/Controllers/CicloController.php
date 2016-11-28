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
			Log::info('Se intento entrar al mantenimiento de ciclos sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento acceder al mantenimiento de ciclos sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Obtener todos los ciclos, y colocarles el nombre respectivo de su clinica
		$ciclos = TaCiclo::all()->toArray();
		foreach ($ciclos as &$ciclo) {
			$ciclo['cic_fechaini'] = date('d-m-Y', strtotime($ciclo['cic_fechaini']));
			$ciclo['cic_fechafin'] = date('d-m-Y', strtotime($ciclo['cic_fechafin']));
			$ciclo['cln_nombre'] = TACLINICA::where('cln_id', $ciclo['cln_id'])->value('cln_nombre');
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
			Log::info('Se intento agregar un ciclo sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento agregar un ciclo
			 sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Obtener los campos
		$cic_nombre = $request['cic_nombre'];
		$cic_fechaini = $request['cic_fechaini'];
		$cic_fechafin = $request['cic_fechafin'];
		//Verificar que los campos no estén vacíos
		if (empty($cic_nombre) || empty($cic_fechaini) || empty($cic_fechafin)) {
			Session::flash('msg-err', 'Se deben ingresar todos los datos.');
		}
		elseif (strtotime($cic_fechaini) > strtotime($cic_fechafin)) {
			Session::flash('msg-err', 'La fecha de inicio no puede ser mayor a la fecha final.');
		}
		else {
			//Crear un nuevo ciclo
			$ciclo = TaCiclo::create([
				'cic_nombre' => $cic_nombre,
				'cln_id' => $request['cln_id'],
				'cic_fechaini' => strtotime($cic_fechaini),
				'cic_fechafin' => strtotime($cic_fechafin)
			]);
			//Verificar si se pudo guardar correctamente
			if ($ciclo->save()) {
				Session::flash('msg-ok', 'El ciclo fue guardado exitosamente.');
				Log::info('El usuario con id '. $usuario['userid'] . 'agrego exitosamente un ciclo.');
			}
			else {
				Session::flash('msg-err', 'No se pudo grabar el nuevo ciclo. Intente nuevamente m&aacute;s tarde.');
				Log::error('El usuario con id '. $usuario['userid'] . ' tuvo un problema al guardar el ciclo.');
			}
		}

		return redirect()->action('CicloController@index');
	}

	public function update(Request $request)
	{
		//Verificar si el usuario tiene permisos para visualizar esta pantalla
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::info('Se intento actualizar un ciclo sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento actualizar un ciclo sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Obtener los campos
		$cic_id = $request['cic_edit_id'];
		$cic_nombre = $request['cic_edit_nombre'];
		$cic_fechaini = $request['cic_edit_fechaini'];
		$cic_fechafin = $request['cic_edit_fechafin'];
		$cln_id = $request['cln_edit_id'];

		//Verificar que los campos no estén vacíos
		if (empty($cic_id) || empty($cic_nombre) || empty($cic_fechaini) || empty($cic_fechafin) || empty($cln_id)) {
			Session::flash('msg-err', 'Se deben ingresar todos los datos.');
		}
		elseif (!$this->es_entero_positivo($cic_id) || !$this->es_entero_positivo($cln_id)) {
			Session::flash('msg-err', 'El id del ciclo o de la clinica no es valido.');
		}
		elseif (strtotime($cic_fechaini) > strtotime($cic_fechafin)) {
			Session::flash('msg-err', 'La fecha de inicio no puede ser mayor a la fecha final.');
		}
		else {
			$ciclo = TaCiclo::find($cic_id);
			if (empty($ciclo)) {
				Session::flash('msg-err', 'No se ha encontrado alg&uacute;n ciclo que tenga el mismo id.');
			} else {
				$ciclo->cic_nombre = $cic_nombre;
				$ciclo->cic_fechaini = strtotime($cic_fechaini);
				$ciclo->cic_fechafin = strtotime($cic_fechafin);
				$ciclo->cln_id = $cln_id;
				if ($ciclo->save()) {
					Session::flash('msg-ok', 'El ciclo fue actualizado correctamente.');
					Log::info('El usuario con id '. $usuario['userid'] . 'modifico exitosamente un ciclo.');
				} else {
					Session::flash('msg-err', 'No se pudo actualizar el nuevo ciclo. Intente nuevamente m&aacute;s tarde.');
					Log::error('El usuario con id '. $usuario['userid'] . ' tuvo un problema al actualizar el ciclo.');
				}
			}			
		}		
		return redirect()->action('CicloController@index');
	}

	public function destroy(Request $request)
	{
		//Verificar si el usuario tiene permisos para visualizar esta pantalla
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::info('Se intento eliminar un ciclo sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento eliminar un ciclo sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Obtener el campo
		$ciclo = TaCiclo::find($request['cic_del_id']);
		$ciclo->delete();
		Session::flash('msg-ok', 'El ciclo fue eliminado correctamente.');
		Log::info('El usuario con id ' . $usuario['userid'] . ' elimino exitosamente un ciclo.');
		return redirect()->action('CicloController@index');
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}
}