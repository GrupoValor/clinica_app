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

class RubroController extends Controller {

	public function store(Request $request)
	{
		//Verificar que la sesión iniciada sea válida y que el usuario tenga acceso a esta página
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::warning('Se intento crear un rubro sin haber iniciado sesion. Se le mando al usuario a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1 && $usuario['rol'] != 4) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento crear un rubro sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Buscar la rúbrica donde se insertará el rubro
		$rba_id = $request['rba_add_id'];
		$rubrica = TaRubrica::where('rba_id', $rba_id)->first();
		if (empty($rubrica))
		{
			Session::flash('msg-err', 'El rubro que se intent&oacute; crear tiene una r&uacute;brica no v&aacute;lida.');
			Log::info('El usuario ' . $usuario['userid'] . ' intento crear un rubro en una rubrica inexistente.')
			return redirect()->action('PeriodoController@index');
		}
		try {
			$periodo = TaPeriodo::where('per_id', $rubrica['per_id'])->firstOrFail();
			//Verificar que los datos sean correctos
			$nombre = $request['rbo_nombre'];
			$maxpunt = $request['rbo_maxpunt'];
			if (empty($nombre)) {
				Session::flash('msg-err', 'El nombre no puede estar vac&iacute;o.');
			} else if (!$this->es_entero_positivo($maxpunt)) {
				Session::flash("msg-err", "El m&aacute;ximo puntaje no puede estar vac&iacute;o, y debe ser un entero positivo.");
			} else {
				//Crear modelo de rubro
				$rubro = TaRubro::create([
					'rbo_nombre' => $nombre,
					'rba_id' => $rba_id,
					'rbo_maxpunt' => $maxpunt
				]);
				//Actualizar la suma de puntajes
				TaRubrica::where('rba_id', $rba_id)->increment('rba_maxpunt', $maxpunt);
				//Mostrar la pantalla de resultados de la búsqueda
				Session::flash('msg-ok', "Se guard&oacute; el rubro correctamente.");
			}

			//Volver a la página de resultados de la búsqueda
			return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
		} catch (\Exception $e) {
			Session::flash('msg-err', 'Hubo un error al intentar guardar el rubro. Por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.');
			return redirect()->action('PeriodoController@index');
		}		
	}

	public function update(Request $request) {
		//Verificar la existencia del ID del rubro
		$rbo_id = $request['rbo_edit_id'];
		$rubro = TaRubro::find($rbo_id);
		if (empty($rbo_id) || empty($rubro)) {
			Session::flash('msg-err', 'No se pudo encontrar el rubro solicitado. Por favor int&eacute;ntelo de nuevo m&aacute;s tarde.');
			return redirect()->action('PeriodoController@index');
		}
		//Verificar que los datos a modificar son correctos
		$rbo_nombre = $request['rbo_edit_nombre'];
		$rbo_maxpunt = $request['rbo_edit_maxpunt'];
		if (empty($rbo_nombre)) {
			Session::flash('msg-err', 'El nombre no puede estar vac&iacute;o.');
		} else if (!$this->es_entero_positivo($rbo_maxpunt)) {
			Session::flash("msg-err", "El m&aacute;ximo puntaje de un rubro no puede estar vac&iacute;o, y debe ser un entero positivo.");
		} else {
			try {
				//Actualizar rubro
				$rubro->rbo_nombre = $rbo_nombre;
				$rbo_old_maxpunt = $rubro->rbo_maxpunt;
				$rubro->rbo_maxpunt = $rbo_maxpunt;
				if ($rubro->save()) {
					//Actualizar suma de puntos de rúbrica
					$rubrica = TaRubrica::where('rba_id', $rubro->rba_id)->firstOrFail();
					$rubrica->rba_maxpunt += ($rbo_maxpunt - $rbo_old_maxpunt);
					if ($rubrica->save()) {
						Session::flash('msg-ok', 'Se actualiz&oacute; el rubro correctamente.');
					} else {
						Session::flash('msg-err', 'Hubo un error al intentar actualizar la r&uacute;brica que pertenece al rubro. Por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.');
					}
				} else {
					Session::flash('msg-err', 'Hubo un error al intentar actualizar el rubro. Por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.');
				}
			} catch (\Exception $e) {
				Session::flash('msg-err', 'Hubo un error desconocido al intentar actualizar el rubro. Por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.');
			}
		}
		//Ir a la página de resultados de la búsqueda
		$per_id = (empty($rubrica)) ? TaRubrica::where('rba_id', $rubro->rba_id)->value('per_id') : $rubrica->per_id;
		$periodo = TaPeriodo::where('per_id', $per_id)->first();
		if (empty($periodo)) {
			Session::flash('msg-adv', 'No se pudo volver al periodo de los resultados de la b&uacute;squeda.');
		} else {
			return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
		}	
		return redirect()->action('PeriodoController@index');
	}

	public function destroy(Request $request) {
		$rbo_id = $request['rbo_delete_id'];
		$rubro = TaRubro::where('rbo_id', $rbo_id)->first();
		if (empty($rbo_id) || empty($rubro)) {
			Session::flash('msg-err', 'No se pudo encontrar el rubro a eliminar. Por favor int&eacute;ntelo de nuevo m&aacute;s tarde.');
			return redirect()->action('PeriodoController@index');
		}
		//Guardar el puntaje del rubro, y eliminarlo
		$rba_id = $rubro->rba_id;
		$rbo_maxpunt = $rubro->rbo_maxpunt;
		$rubro->delete();
		//Restar la suma de puntajes a la rúbrica
		$rubrica = TaRubrica::where('rba_id', $rba_id)->first();
		if (empty($rubrica)) {
			Session::flash('msg-err', 'Se pudo eliminar el rubro, pero no se pudo actualizar la suma de puntajes de la r&uacute;brica. Esto puede dar errores en los c&aaucte;lculos de las notas. Por favor contacte al administrador de bases de datos para poder solucionar este problema.');
			return redirect()->action('PeriodoController@index');
		}
		$rubrica->rba_maxpunt -= $rbo_maxpunt;
		if ($rubrica->save()) {
			Session::flash('msg-ok', 'Se elimin&oacute; el rubro correctamente.');
		} else {
			Session::flash('msg-err', 'Se pudo eliminar el rubro, pero no se pudo actualizar la suma de puntajes de la r&uacute;brica. Esto puede dar errores en los c&aaucte;lculos de las notas. Por favor contacte al administrador de bases de datos para poder solucionar este problema.');
		}
		//Volver a los resultados de la búsqueda
		$periodo = TaPeriodo::where('per_id', $rubrica->per_id)->first();
		if (empty($periodo)) {
			Session::flash('msg-adv', 'No se pudo volver al periodo de los resultados de la b&uacute;squeda.');
			return redirect()->action('PeriodoController@index');
		} else {
			return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
		}
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}

}
