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
use Illuminate\Support\Facades\Log;

class RubricaController extends Controller {

	public function index(Request $request)
	{
		//Verificar que la sesión iniciada sea válida y que el usuario tenga acceso a esta página
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::info('Se intento entrar a la pagina de mantenimiento de rubricas sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1 && $usuario['rol'] != 4) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento acceder a la pagina de mantenimiento de rubricas sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Verificar si los IDs de curso y ciclo son válidos
		$curso = TaCurso::where('cur_id', $request['curso'])->first();
		$ciclo = TaCiclo::where('cic_id', $request['ciclo'])->first();
		if (empty($curso) || empty($ciclo)) {
			Log::info('El usuario con id ' . $usuario['userid'] . ' intento acceder a la pagina de mantenimiento de rubricas con un curso o ciclo inexistente. Se le mando una respuesta HTTP 404.');
			return abort(404);
		}

		//Obtener el periodo y las rúbricas y rubros a mostrar según la búsqueda realizada
		$periodo = TaPeriodo::where(['cur_id' => $request['curso'], 'cic_id' => $request['ciclo']])->first();

		//Si no se encontró el periodo, mostrar una pantalla de creación de periodo
		if (empty($periodo)) {
			$valores = ['cur_id' => $request['curso'], 'cic_id' => $request['ciclo']];
			//Colocar los nombres a usar en el arreglo del periodo
			$valores['cur_nombre'] = "\"" . $curso['cur_descrip'] . "\" (" . $curso['cur_codigo'] . ")";
			$valores['cic_nombre'] = $ciclo['cic_nombre'];

			//Extraer todos los periodos de la clínica:
			$db_periodo = TaPeriodo::where('cln_id', '1')->get()->toArray();
			$per_id = ['0'];
			$per_nombre = ['Ninguno'];
			foreach ($db_periodo as $value) {
				//Obtener ids del array
				array_push($per_id, $value['per_id']);
				//Obtener valores del array
				$curso = TaCurso::find($value['cur_id']);
				$ciclo = TaCiclo::find($value['cic_id']);
				array_push($per_nombre, "[" . $curso['cur_codigo'] . "] " . $curso['cur_descrip'] . " (" . $ciclo['cic_nombre'] . ")");
			}
			$periodos = array_combine($per_id, $per_nombre);

			//Ir a vista de creación de periodos
			Log::info('El usuario con id ' . $usuario['userid'] . ' entro a la pagina de creacion de rubricas para el ciclo ' . $request['curso'] . ', ciclo ' . $request['ciclo']);
			return view('intranet.ta_rubricas_crear', ['valores' => $valores, 'periodos' => $periodos]);

		} else {
			$periodo = $periodo->toArray();

			//Verificar que el usuario tenga acceso al periodo
			if ($periodo['cln_id'] != $usuario['clinica']) {
				Session::flash('msg-err', 'El periodo al que esta intentando ingresar pertenece a una clinica distinta. &iexcl;No tiene los permisos para ingresar a ella!');
				Log::warning('El usuario con id ' . $usuario['userid'] . ' intento acceder al registro de notas pero el periodo que solicito es de una clinica distinta a la suya. Por tanto, se le regreso a la pagina de busqueda del registro de notas.');
				return redirect()->action('PeriodoController@index');
			}

			//Obtener datos de las rúbricas
			$rubricas = TaRubrica::where('per_id', $periodo['per_id'])->get()->toArray();

			//Colocar los nombres a usar en el arreglo del periodo
			$periodo['cur_nombre'] = "\"" . $curso['cur_descrip'] . "\" (" . $curso['cur_codigo'] . ")";
			$periodo['cic_nombre'] = $ciclo['cic_nombre'];
			$periodo['editable'] = (time() <= strtotime($periodo['per_fechafin']));

			//Obtenemos y colocamos los datos de los rubros dentro de las rúbricas
			foreach ($rubricas as &$rubrica) {
				$rubrica['rubros'] = TaRubro::where('rba_id', $rubrica['rba_id'])->get()->toArray();
			}

			//Ir a la vista de resultados de la búsqueda
			Log::info('El usuario con id ' . $usuario['userid'] . ' entro a la pagina de mantenimiento de rubricas para el ciclo ' . $request['curso']. ', ciclo ' . $request['ciclo'] . ' (periodo '. $periodo['per_id'] . ').');
			return view('intranet.ta_rubricas_res', ['periodo' => $periodo, 'rubricas' => $rubricas]);
		}

	}

	public function store(Request $request)
	{
		//Verificar que la sesión iniciada sea válida y que el usuario tenga acceso a esta página
		$usuario = $request->session()->get('user');
		if (empty($usuario)) return view('login/login');
		if ($usuario['rol'] != 1 && $usuario['rol'] != 4) return abort(404);

		//Obtener los datos del request
		$rba_nombre = $request['rba_nombre'];
		$rba_peso = $request['rba_peso'];

		//Verificar que los datos se han ingresado correctamente
		if (empty($rba_nombre)) {
			Session::flash('msg-err', 'El nombre no puede estar vac&iacute;o.');
		}
		else if (!$this->es_entero_positivo($rba_peso)) {
			Session::flash('msg-err', 'El peso no puede estar vac&iacute;o, y debe ser un entero positivo.');
		}
		else {
			try {
				//Guardar la rubrica
				$rubrica = TaRubrica::create([
					'rba_nombre' => $rba_nombre,
					'rba_peso' => $rba_peso,
					'rba_maxpunt' => '0',
					'per_id' => $request['per_id'],
					'cln_id' => '1',
				]);
				//Actualizar la suma de pesos
				TaPeriodo::where('per_id', $request['per_id']);
				increment('per_sumapesos', $rba_peso);
				//Mostrar el mensaje
				Session::flash('msg-ok', 'R&uacute;brica guardada con &eacute;xito.');
			} catch (\Exception $e) {
				Session::flash('msg-error', 'No se pudo grabar la r&uacute;brica correctamente. Por favor int&eacute;ntelo m&aacute;s tarde.');
			}
		}

		//Ir a la vista de resultados de la búsqueda
		$periodo = TaPeriodo::where('per_id', $request['per_id'])->first();
		return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
	}

	public function update(Request $request)
	{
		//Verificar que la sesión iniciada sea válida y que el usuario tenga acceso a esta página
		$usuario = $request->session()->get('user');
		if (empty($usuario)) return view('login/login');
		//if ($usuario['rol'] != '1' || $usuario['rol'] != '4') return abort(404);

		//Obtener rúbrica
		$rubrica = TaRubrica::where('rba_id', $request['rba_edit_id'])->first();
		if (empty($rubrica)) {
			Session::flash('msg_err', 'No se pudo encontrar la r&uacute;brica solicitada. Por favor int&eacute;ntelo de nuevo m&aacute;s tarde.');
			return redirect()->action('PeriodoController@index');
		} else {
			//Verificar que los nombres estén correctamente ingresados
			$nombre = $request['rba_edit_nombre'];
			$peso = $request['rba_edit_peso'];
			if (empty($nombre)) {
				Session::flash('msg-err', 'El nombre no puede estar vac&iacute;o.');
			}
			else if (!$this->es_entero_positivo($peso)) {
				Session::flash('msg-err', 'El peso no puede estar vac&iacute;o, y debe ser un entero positivo.');
			}
			else {
				try {
					//Actualizar la rúbrica
					$rubrica->rba_nombre = $nombre;
					$peso_antiguo = $rubrica->rba_peso;
					$rubrica->rba_peso = $peso;
					$rubrica->save();
					//Actualizar la suma de pesos del periodo
					TaPeriodo::where('per_id', $rubrica->per_id)->increment('per_sumapesos', $peso - $peso_antiguo);
					//Mostrar mensaje de confirmación
					Session::flash('msg-ok', 'La r&uacute;brica fue actualizada correctamente.');				}
				catch (\Exception $e) {
					Session::flash('msg-err', 'Ocurri&oacute; un error al actualizar la r&uacute;brica. Por favor comun&iacute;quese con el administrador de base de datos.');
				}
			}

			//Ir a la vista de resultados de la búsqueda
			$periodo = TaPeriodo::where('per_id', $rubrica->per_id)->first();
			if (empty($periodo)) {
				return redirect()->action('PeriodoController@index');
			} else {
				return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
			}
			
		}
	}

	public function destroy(Request $request)
	{
		//Verificar que la sesión iniciada sea válida y que el usuario tenga acceso a esta página
		$usuario = $request->session()->get('user');
		if (empty($usuario)) return view('login/login');
		if ($usuario['rol'] != 1 && $usuario['rol'] != 4) return abort(404);

		//Asegurarse de que se especificó correctamente el id de la rúbrica
		$rba_id = $request['rba_delete_id'];
		if (empty($rba_id) || !($this->es_entero_positivo($rba_id))) {
			Session::flash('msg-err', 'No se seleccion&oacute; una r&uacute;brica v&aacute;lida.');
			$this->log('Usuario ' /*. $usuario['userid']*/ . ' intentó eliminar rubrica' . $rba_id . 'no válida.');
			return redirect()->action('PeriodoController@index');
		}
		$rubrica = TaRubrica::where('rba_id', $rba_id)->first();
		if (empty($rubrica)) {
			Session::flash('msg-err', 'No se encontr&oacute; la r&uacute;brica solicitada.');
			return redirect()->action('PeriodoController@index');
		}
		$periodo = TaPeriodo::where('per_id', $rubrica['per_id'])->first();
		if (empty($rubrica)) {
			Session::flash('msg-err', 'No se pudo encontrar el periodo de la r&uacute;brica solicitada.');
			return redirect()->action('PeriodoController@index');
		}
		//Eliminar todos los rubros de la rúbrica
		TaRubro::where('rba_id', $rba_id)->delete();
		//Eliminar la rúbrica en sí
		$rba_peso = $rubrica->rba_peso;
		$rubrica->delete();
		//Actualizar la suma de pesos del periodo
		$periodo->per_sumapesos -= $rba_peso;
		$periodo->save();
		//Si todo ha salido OK, regresar a la vista de resultados de la búsqueda
		Session::flash('msg-ok', 'Se elimin&oacute; la r&uacute;brica correctamente.');
		//Log::message('El usuario' . $usuario[]);
		return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}

}
