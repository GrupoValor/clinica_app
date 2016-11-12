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

class RubroController extends Controller {

	public function store(Request $request) {
		try {
			$rba_id = $request['rba_add_id'];
			$rubrica = TaRubrica::where('rba_id', $rba_id)->firstOrFail();
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
				Session::flash('msg-ok', "Se gaurd&oacute; el rubro correctamente.");
			}

			//Volver a la página de resultados de la búsqueda
			return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
		} catch (\Exception $e) {
			Session::flash('msg-err', 'Hubo un error al intentar guardar el rubro. Por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.');
			return redirect()->action('PeriodoController@index');
		}		
	}

	public function update(Request $request) {
		try {
			$rbo_id = $request['rbo_edit_id'];
			$rbo_nombre = $request['rbo_edit_nombre'];
			$rbo_maxpunt = $request['rbo_edit_maxpunt'];
			echo "rbo_id=$rbo_id, rbo_nombre=$rbo_nombre, rbo_maxpunt=$rbo_maxpunt";
			if (empty($rbo_nombre)) {
				Session::flash('msg-err', 'El nombre no puede estar vac&iacute;o.');
			} else if (!$this->es_entero_positivo($rbo_maxpunt)) {
				Session::flash("msg-err", "El m&aacute;ximo puntaje de un rubro no puede estar vac&iacute;o, y debe ser un entero positivo.");
			} else {
				//Actualizar rubro
				$rubro = TaRubro::where('rbo_id', $rbo_id)->firstOrFail();
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
			}
			//Ir a la página de resultados de la búsqueda
			$periodo = TaPeriodo::where('per_id', $rubrica['per_id'])->first();
			if (empty($periodo)) {
				Session::flash('msg-err', 'No se pudo volver al periodo de los resultados de la b&uacute;squeda.');
			} else {
				return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
			}	
		} catch (\Exception $e) {
			Session::flash('msg-err', 'Hubo un error desconocido al intentar actualizar el rubro. Por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.');
		}
		return redirect()->action('PeriodoController@index');
	}

	public function destroy(Request $request) {
		$rbo_id = $request['rbo_delete_id'];
		try {
			//Eliminar el rubro
			$rubro = TaRubro::where('rbo_id', $rbo_id)->firstOrFail();
			$rbo_maxpunt = $rubro->rbo_maxpunt;
			$rubro->delete();
			//Restar la suma de puntajes a la rúbrica
			$rubrica = TaRubrica::where('rba_id', $rubro->rba_id)->firstOrFail();
			$rubrica->rba_maxpunt -= $rbo_maxpunt;
			if ($rubrica->save()) {
				Session::flash('msg-ok', 'Se elimin&oacute; el rubro correctamente.');
			} else {
				Session::flash('msg-err', 'Se pudo eliminar el rubro, pero no se pudo actualizar la suma de puntajes de la r&uacute;brica. Por favor contacte al administrador de bases de datos.');
			}
			//Volver a los resultados de la búsqueda
			$periodo = TaPeriodo::where('per_id', $rubrica['per_id'])->first();
			if (empty($periodo)) {
				Session::flash('msg-err', 'No se pudo volver al periodo de los resultados de la b&uacute;squeda.');
				return redirect()->action('PeriodoController@index');
			} else {
				return redirect()->action('RubricaController@index', ['curso' => $periodo['cur_id'], 'ciclo' => $periodo['cic_id']]);
			}
		} catch (\Exception $e) {
			Session::flash('msg-err', 'Hubo un error desconocido al intentar eliminar el rubro. Por favor, int&eacute;ntelo m&aacute;s tarde.');
			return redirect()->action('PeriodoController@index');
		}
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}


}
