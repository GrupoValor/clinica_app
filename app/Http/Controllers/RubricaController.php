<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\TaCurso;
use App\Models\TaCiclo;
use App\Models\TaRubrica;
use App\Models\TaJoinRubrica;

class RubricaController extends Controller {

	public function index() {
		//Verificar si el usuario tiene permisos para visualizar esta pantalla
		/* FALTA IMPLEMENTAR LOL */

		//Extraer cursos según clínica
		$db_cursos = TaCurso::where('cln_id', 1)->get();
		$cur_id = array();
		$cur_nombre = array();
		foreach ($db_cursos as $value) {
			array_push($cur_id, $value['cur_id']);
			array_push($cur_nombre, "[" . $value['cur_codigo'] . "] " . $value['cur_descrip']);
		}
		$cursos = array_combine($cur_id, $cur_nombre);

		//Extraer ciclos según clínica
		$db_ciclos = TaCiclo::where('cln_id', 1)->get();
		$cic_id = array();
		$cic_nombre = array();
		foreach ($db_ciclos as $value) {
			array_push($cic_id, $value['cic_id']);
			array_push($cic_nombre, $value['cic_nombre']);
		}
		$ciclos = array_combine($cic_id, $cic_nombre);
		
		//Ingresar a la vista principal
		return view('intranet.ta_rubricas_busq', ['cursos' => $cursos, 'ciclos' => $ciclos]);
	}


	public function store(Request $request) {
		$rba_nombre = $request['rba_nombre'];
		$rba_peso = $request['rba_peso'];
		//Verificar que los datos se han ingresado correctamente
		if (empty($rba_nombre)) Session::flash('msg-error', 'El nombre no puede estar vac&iacute;o.');
		else if (empty($rba_peso) || !is_numeric($rba_peso) || ((float)$rba_peso != (int)$rba_peso) || ((int)$rba_peso <= 0))
			Session::flash('msg-error', 'El peso no puede estar vac&iacute;o, y debe ser un entero positivo.');
		else {
			//Guardar la rubrica y el join => ESTO SERÁ FUERTEMENTE EDITADO PARA LA SIGUIENTE
			$rubrica = TaRubrica::create([
				'rba_nombre' => $rba_nombre,
				'rba_peso' => $rba_peso,
				'cln_id' => '1',
				'rba_maxpunt' => '0'
			]);
			if ($rubrica->save()) {
				$join = TaJoinRubrica::create([
					'rba_id' => $rubrica->rba_id,
					'cur_id' => $request['cur_id'],
					'cic_id' => $request['cic_id']
				]);
				if ($join->save())
					Session::flash('msg-ok', 'R&uacute;brica guardada con &eacute;xito.');
				else
					Session::flash('msg-error', 'No se pudo grabar la r&uacute;brica correctamente. Por favor int&eacute;ntelo m&aacute;s tarde.');
			} 
			else Session::flash('msg-error', 'No se pudo grabar la r&uacute;brica correctamente. Por favor int&eacute;ntelo m&aacute;s tarde.');
		}					
		return redirect()->action('RubroController@index', ['curso' => $request['cur_id'], 'ciclo' => $request['cic_id']]);
	}

}
