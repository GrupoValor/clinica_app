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

class NotasController extends Controller {

	public function index(Request $request)
	{
		//Verificar que la sesión iniciada sea válida
		$usuario = $request->session()->get('user');
		if (empty($usuario)) return view('login/login');

		//Buscar el periodo solicitado
		$periodo = TaPeriodo::find($request['periodo']);
		if (empty($periodo)) return abort(404);
		$periodo = $periodo->toArray();
		//Verificar que el usuario tenga acceso al periodo
		//$usuario = ...
		//if ($periodo['cln_id'] != 0) abort(404);

		//Obtener todas las rúbricas a colocar
		$numRubrica = $request['rubrica'];
		if (empty($numRubrica) || $this->es_entero($numRubrica)) {
			if ($numRubrica == 0) {
				$rubricas = TaRubrica::where('per_id', $periodo['per_id'])->get();
				if (empty($rubricas)) {
					Session::flash('msg-err', 'El periodo solicitado no tiene r&uacute;bricas colocadas.');
					return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
				}
				$rubricas = $rubricas->toArray();
			}
			else {
				$rubricas = TaRubrica::find($numRubrica);
				if (empty($rubricas)) {
					Session::flash('msg-err', 'La r&uacute;brica solicitada no existe.');
					return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
				}
				if ($periodo['per_id'] != $rubricas->per_id) {
					Session::flash('msg-err', '¡El periodo solicitado no tiene derechos de acceso a la r&uacute;brica solicitada!');
					return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
				}
				$rubricas = array($rubricas->toArray());
			}
		} else {
			Session::flash('msg-err', 'La r&uacute;brica solicitada no existe.');
			return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
		}

		//Obtener los rubros de cada rúbrica
		foreach ($rubricas as &$rubrica) {
			$rubros = TaRubro::where('rba_id', $rubrica)->get();
			if (!empty($rubros)) 
				$rubrica['rubros'] = $rubros->toArray();
		}

		//Obtener los ids de promedios de notas, para poder extraer los alumnos
		$db_promedio = TaNotaPromedio::where('per_id', $periodo['per_id'])->get();
		if (!empty($notas)) {
			$db_promedio = $db_promedio->toArray();
			
			//Obtener las notas de rúbricas
			$notas = TaNotaRubrica::where('prm_id', 0);
		}


		return view('intranet.ta_notas_res');
	}

	private function es_entero($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor));
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}

}
