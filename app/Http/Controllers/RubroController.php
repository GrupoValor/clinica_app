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
use App\Models\TaRubro;
use App\Models\TaJoinRubrica;

class RubroController extends Controller {

	public function index(Request $request) {
		//Obtener los nombres de curso y ciclo y verificar si son válidos
		$value_cursos = TaCurso::where('cur_id', $request['curso'])->value('cur_descrip');
		$value_ciclos = TaCiclo::where('cic_id', $request['ciclo'])->value('cic_nombre');
		if (empty($value_cursos) || empty($value_ciclos)) return abort(404);

		//Obtener los IDs de las rubricas a mostrar según la búsqueda realizada
		$rubricas_join = TaJoinRubrica::where(['cur_id' => $request['curso'], 'cic_id' => $request['ciclo']])->get();
		$rubricas_ids = [];
		foreach ($rubricas_join as $value) array_push($rubricas_ids, $value['rba_id']);

		//Obtener datos de las rúbricas
		$rubricas_data = TaRubrica::findMany($rubricas_ids)->toArray();
		//Obtenemos y colocamos los datos de los rubros dentro de las rúbricas
		foreach ($rubricas_data as &$value)
			$value['rubros'] = TaRubro::where('rba_id', $value['rba_id'])->get()->toArray();

		//Obtener los datos a colocar
		$nombres_keys = ['cur_id', 'cic_id', 'cur_descrip', 'cic_nombre'];
		$nombres_values = [$request['curso'], $request['ciclo'], $value_cursos, $value_ciclos];
		$valores = array_combine($nombres_keys, $nombres_values);

		return view('intranet.ta_rubricas_res', ['valores' => $valores, 'rubricas' => $rubricas_data]);
	}

	public function create() {
		return abort(404);
	}

	public function store(Request $request) {
		//Verificar que los datos sean correctos
		if ($request['rbo_nombre'] == null || $request['rbo_maxpunt'] == null) {
			Session::flush("msg-error", "Los datos ingresados no son v&aacute;lidos, por favor ingrese de nuevo.");
		}
		//Crear modelo de rubro
		$rubro = TaRubro::create([
			'rbo_nombre' => $request['rbo_nombre'],
			'rba_id' => 1,//$request['rba_id'],
			'rbo_maxpunt' => $request['rbo_maxpunt']
		]);
		//Guardarlo y asegurarse de que funcionó
		if ($rubro->save()) {
			Session::flush('msg-ok', "Se gaurd&oacute; el rubro correctamente.");
		} else {
			Session::flush("msg-error", "Se produjo un error al guardar el rubro. Por favor intente de nuevo m&aacute;s tarde.");
		}
		return Redirect::to('./rubro');
	}

}
