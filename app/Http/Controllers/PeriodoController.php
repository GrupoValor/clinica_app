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

class PeriodoController extends Controller {

	public function index(Request $request) {
		//Verificar si el usuario tiene permisos para visualizar esta pantalla
		/* FALTA IMPLEMENTAR LOL */


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

		//Ingresar a la vista principal
		return view('intranet.ta_rubricas_busq', ['cursos' => $cursos, 'ciclos' => $ciclos]);
	}

	public function store(Request $request) {
		$semanas = $request['per_semanas'];
		$fechaIni = time();
		$fechaFin = strtotime($request['per_fechafin']);
		if (!$this->es_entero_positivo($semanas)) {
			Session::flash('msg-err', 'El n&uacute;mero de fechas debe ser un entero positivo no vac&iacute;o.');
		} else if (empty($fechaFin)) {
			Session::flash('msg-err', 'Debe ingresar una fecha final no vac&iacute; y que sea v&aacute;lida.');
		} else if ($fechaIni > $fechaFin) {
			Session::flash('msg-err', 'La fecha de fin no puede ser menor al d&iacute;a de hoy.');
		}
		else try {
			//Crear un nuevo periodo
			$periodo = TaPeriodo::where('per_id', $request['per_base_id'])->first();
			$nuevoPeriodo = TaPeriodo::create([
				'cur_id' => $request['cur_id'],
				'cic_id' => $request['cic_id'],
				'per_sumapesos' => ($request['per_base_id'] > 0) ? $periodo['per_sumapesos'] : '0',
				'per_semanas' => $semanas,
				'per_fechaini' => date('Y-m-d', $fechaIni),
				'per_fechafin' => date('Y-m-d', $fechaFin),
				'cln_id' => '1'
			]);
			//Si el periodo se importará de uno ya existente, copiar todo lo que tiene el periodo antiguo.
			if ($request['per_base_id'] > 0) {
				//Para el periodo crear nuevas rúbricas que apunten al nuevo periodo
				$rubricas = TaRubrica::where('per_id', $periodo['per_id'])->get();
				foreach ($rubricas as $rubrica) {		
					$nuevaRubrica = TaRubrica::create([
						'rba_nombre' => $rubrica['rba_nombre'],
						'per_id' => $nuevoPeriodo->per_id,
						'rba_peso' => $rubrica['rba_peso'],
						'rba_maxpunt' => $rubrica['rba_maxpunt'],
						'cln_id' => $rubrica['cln_id']
					]);
					//Por cada rúbrica crear nuevos rubros que apunten a la nueva rúbrica
					$rubros = TaRubro::where('rba_id', $rubrica['rba_id'])->get();
					foreach ($rubros as $rubro) {	
						$nuevoRubro = TaRubro::create([
							'rba_id' => $nuevaRubrica->rba_id,
							'rbo_nombre' => $rubro['rbo_nombre'],
							'rbo_maxpunt' => $rubro['rbo_maxpunt']
						]);
					}
				}
			}
			//Si todo salió ok, ir a resultados de la búsqueda
			Session::flash('msg-ok', 'Se cre&oacute; el periodo acad&eacute;mico correctamente.');
			return redirect()->action('RubricaController@index', ['curso' => $request['cur_id'],
				'ciclo' => $request['cic_id']]);
		} catch (Exception $e) {
			Session::flash('msg-err', 'Ocurri&oacute; un error al intentar guardar los datos. Por favor int&eacute;ntelo nuevamente m&aacute;s tarde');
		}
		return redirect()->action('PeriodoController@index');
	}

	public function destroy(Request $request, $id) {
		try {
			//Para cada rúbrica borrar sus rubros
			$rubricas = TaRubrica::where('per_id', $id)->get();
			foreach ($rubricas as $rubrica) {
				TaRubro::where('rba_id', $rubrica['rba_id'])->delete();
			}
			//Borrar las rúbricas de la tabla de base de datos
			TaRubrica::where('per_id', $id)->delete();
			//Borrar el periodo de la tabla de base de datos
			TaPeriodo::where('per_id', $id)->delete();
			//Mostrar mensaje de éxito
			Session::flash('msg-ok', 'Se eliminaron todas las r&uacute;bricas correctamente.');
		} catch (Exception $e) {
			//Mostrar mensaje de error
			Session::flash('msg-err', 'Ocurri&oacute; un error al borrar la r&uacute;brica. Por favor int&eacute;ntelo de nuevo m&aacute;s tarde.');
		}
		return redirect()->action('PeriodoController@index');
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}
}