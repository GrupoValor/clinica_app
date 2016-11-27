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
use App\Models\TaNotaProm;
use App\Models\TaNotaRubrica;
use App\Models\TaNotaRubro;

class NotasController extends Controller {

	public function index(Request $request)
	{
		//Verificar que la sesión iniciada sea válida y que el usuario tenga acceso a esta página
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::info('Se intento entrar a la pagina del registro de notas sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1 && $usuario['rol'] != 4 && $usuario['rol'] != 5) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento acceder a la pagina del registro de notas sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Buscar el periodo solicitado
		$periodo = TaPeriodo::find($request['periodo']);
		if (empty($periodo)) {
			Session::flash('msg-err', 'El periodo solicitado no existe.');
			Log::info('El usuario con id ' . $usuario['userid'] . ' intento acceder al registro de notas pero el periodo que solicito no existe. Por tanto, se le regreso a la pagina de busqueda del registro de notas.');
			return redirect()->action('PromedioController@index');
		}
		$periodo = $periodo->toArray();
		//Verificar que el usuario tenga acceso al periodo
		if ($periodo['cln_id'] != $usuario['clinica']) {
			Session::flash('msg-err', 'El periodo al que esta intentando ingresar pertenece a una clinica distinta. &iexcl;No tiene los permisos para ingresar a ella!');
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento acceder al registro de notas pero el periodo que solicito es de una clinica distinta a la suya. Por tanto, se le regreso a la pagina de busqueda del registro de notas.');
			return redirect()->action('PromedioController@index');
		}

		//Obtener todas las rúbricas a colocar
		$numRubrica = $request['rubrica'];
		//Todas las rubricas
		if (empty($numRubrica) || $numRubrica == 0)
		{
			$rubricas = TaRubrica::where('per_id', $periodo['per_id'])->get();
			if (empty($rubricas)) {
				Session::flash('msg-err', 'El periodo solicitado no tiene r&uacute;bricas colocadas.');
				Log::info('El usuario ' . $usuario['userid'] . 'intento entrar al registro de notas para las rubricas de un periodo que no las tiene. Por lo tanto, se le regreso a la pagina de busqueda del registro de notas.');
				return redirect()->action('PromedioController@index');
			}
			$rubricas = $rubricas->toArray();
		}
		//Una rúbrica en específico
		elseif ($this->es_entero($numRubrica)) {
			$rubricas = TaRubrica::find($numRubrica);
			if (empty($rubricas)) {
				Session::flash('msg-err', 'La r&uacute;brica solicitada no existe.');
				Log::info('El usuario ' . $usuario['userid'] . 'intento entrar al registro de notas para una rubrica de la cual no tiene los derechos de acceso. Por tanto, se le regreso a la pagina de busqueda del registro de notas.');
				return redirect()->action('PromedioController@index');
			}
			if ($periodo['per_id'] != $rubricas->per_id) {
				Session::flash('msg-err', '&iexcl;El periodo solicitado no tiene derechos de acceso a la r&uacute;brica solicitada!');
				Log::warning('El usuario ' . $usuario['userid'] . 'intento entrar al registro de notas de una rubrica de la cual no tiene los derechos de acceso. Por tanto, se le regreso a la pagina de busqueda del registro de notas.');
				return redirect()->action('PromedioController@index');
			}
			$rubricas = array($rubricas->toArray());
		} else {
			Session::flash('msg-err', 'La r&uacute;brica solicitada no existe.');
			return redirect()->action('PromedioController@index');
		}

		//Obtener los rubros de cada rúbrica
		foreach ($rubricas as &$rubrica) {
			$rubros = TaRubro::where('rba_id', $rubrica)->get();
			if (!empty($rubros)) 
				$rubrica['rubros'] = $rubros->toArray();
		}

		print_r($rubricas);

		//Obtener los ids de promedios de notas, para poder extraer los alumnos
		$db_promedio = TaNotaProm::where('per_id', $periodo['per_id'])->get();
		if (!empty($db_promedio)) {
			$db_promedio = $db_promedio->toArray();
			
			//Obtener las notas de rúbricas
			$notas = TaNotaRubrica::where('prm_id', 0);
		}

		print_r($db_promedio);


		return view('intranet.ta_notas_res');
	}

	private function es_entero($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor));
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}

}
