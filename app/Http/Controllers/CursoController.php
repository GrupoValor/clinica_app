<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\TaCurso;

class CursoController extends Controller {

	public function index() {
		$cursos = TaCurso::all();
		return view('intranet.mant_curso', ['cursos' => $cursos]);
	}

	public function store(Request $request) {
		//Verificar que los campos no estén vacíos
		if ($request['cur_descrip'] == null || $request['cur_codigo'] == null)
			Session::flash('msg-error', 'Se deben ingresar todos los datos.');
		else {
			//Crear un nuevo curso
			$curso = TaCurso::create([
				'cur_descrip' => $request['cur_descrip'],
				'cur_codigo' => $request['cur_codigo'],
				'cln_id' => '1'
			]);
			//Verificar si se pudo guardar correctamente
			if ($curso->save()) 
				Session::flash('msg-ok', 'El curso fue guardado exitosamente.');
			else
				Session::flash('msg-error', 'No se pudo grabar el nuevo curso. Intente nuevamente m&aacute;s tarde.');
		}
		return Redirect::to('/curso');
	}

	public function update(Request $request, $id) {
		$curso = TaCurso::find($id);
		Session::flash('message', 'El curso fue actualizado correctamente.');
		return Redirect::to('/curso');
	}

}