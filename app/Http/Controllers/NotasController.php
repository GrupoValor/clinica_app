<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use App\Models\TAALUMNO;
use App\Models\TaCurso;
use App\Models\TaCiclo;
use App\Models\TaPeriodo;
use App\Models\TaRubrica;
use App\Models\TaRubro;
use App\Models\TaNotaProm;
use App\Models\TaNotaRubrica;
use App\Models\TaNotaRubro;

class NotasController extends Controller {

	/************************************** VER REGISTRO DE NOTAS **************************************/

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

		//Obtener el número de la semana a buscar
		$numSemana = $request['semana'];
		if (!$this->es_entero($numSemana)) {
			Session::flash('msg-err', 'La semana solicitada no existe.');
			Log::info('El usuario '. $usuario['userid'] . ' intento entrar al registro de notas para una semana no existente. Por tanto, se le regreso a la pagina de busqueda del registro de notas.');
			return redirect()->action('PromedioController@index');
		}

		//Obtener la relación de alumnos que llevan el curso
			$alumnos = TAALUMNO::where('per_id', $periodo['per_id'])->get()->toArray();
		if (empty($alumnos)) {
			print_r("ALUMNOS VACIOS");
			Session::flash('msg-err', 'El periodo que esta buscando no tiene registrado ning&uacute;n alumno. Puede pedirle al administrador que incluya alumnado para este periodo.');
			Log::info('El usuario '. $usuario['userid'] . ' intento entrar al registro de notas pero el periodo que escogio no tiene registrado ningun alumno. Por tanto, se le regreso a la pagina de busqueda del registro de notas.');
			return redirect()->action('PromedioController@index');
		}

		//Obtener todas las rúbricas a colocar
		$numRubrica = $request['rubrica'];
		//Todas las rubricas
		if (empty($numRubrica) || $numRubrica == 0)
		{
			$rubricas = TaRubrica::where('per_id', $periodo['per_id'])->get()->toArray();
			if (empty($rubricas)) {
				Session::flash('msg-err', 'El periodo solicitado no tiene r&uacute;bricas colocadas.');
				Log::info('El usuario ' . $usuario['userid'] . 'intento entrar al registro de notas para las rubricas de un periodo que no las tiene. Por lo tanto, se le regreso a la pagina de busqueda del registro de notas.');
				return redirect()->action('PromedioController@index');
			}
		}
		//Una rúbrica en específico
		elseif ($this->es_entero($numRubrica))
		{
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
		}
		//No existe la rubrica
		else {
			Session::flash('msg-err', 'La r&uacute;brica solicitada no existe.');
			Log::info('El usuario '. $usuario['userid'] . ' intento entrar al registro de notas para una rubrica no existente. Por tanto, se le regreso a la pagina de busqueda del registro de notas.');
			return redirect()->action('PromedioController@index');
		}

		foreach ($alumnos as &$alumno)
		{
			//Obtener los promedios de cada alumno, para poder buscar las rubricas y rubros
			$nota_promedio = TaNotaProm::where(['cur_id' => $periodo['cur_id'], 'cic_id' => $periodo['cic_id'], 'alu_id' => $alumno['alu_id']])->first();
			if (empty($nota_promedio))
				$nota_promedio = ['prm_id' => 0, 'per_id' => $periodo['per_id'], 'alu_id' => $alumno['alu_id'], 'prm_notafinal' => 0];
			else
				$nota_promedio = $nota_promedio->toArray();

			$alumno_rubricas = array();

			foreach ($rubricas as $rba_key => &$rubrica)
			{
				//Obtener las notas de cada rubrica de cada alumno
				$nota_rubrica = TaNotaRubrica::where(['prm_id' => $nota_promedio['prm_id'], 'rba_id' => $rubrica['rba_id'], 'nra_semana' => $numSemana])->first();
				if (empty($nota_rubrica))
					$nota_rubrica = ['nra_id' => 0, 'prm_id' => $nota_promedio['prm_id'], 'rba_id' => $rubrica['rba_id'], 'nra_semana' => $numSemana, 'nra_promparcial' => null];
				else
					$nota_rubrica = $nota_rubrica->toArray();
				
				//Obtener los rubros de cada rúbrica
				$rubros = TaRubro::where('rba_id', $rubrica)->get()->toArray();
				$rubrica['rubros'] = $rubros;
				
				//Obtener las notas de cada rubro de cada alumno
				foreach ($rubros as $rbo_key => &$rubro)
				{
					$nota_rubro = TaNotaRubro::where(['nra_id' => $nota_rubrica['nra_id'], 'rbo_id' => $rubro['rbo_id']])->first();
					if (empty($nota_rubro))
						$nota_rubro = ['nrb_id' => 0, 'nra_id' => $nota_rubrica['nra_id'], 'rbo_id' => $rubro['rbo_id'], 'nrb_puntaje' => null];
					else
						$nota_rubro = $nota_rubro->toArray();
					$nota_rubrica['rubros'][$rbo_key] = $nota_rubro;
				}

				$alumno_rubricas[$rba_key] = $nota_rubrica;
			}

			$alumno['notas'] = $alumno_rubricas;
		}

		//Ir a los resultados de la búsqueda del registro de notas
		Log::info('El usuario ' . $usuario['userid'] . ' ingreso al registro de notas.');
		return view('intranet.ta_notas_res', ['rubricas' => $rubricas, 'alumnos' => $alumnos, 'periodo' => $periodo['per_id'], 'semana' => $numSemana]);
	}

	/************************************** GUARDAR REGISTRO DE NOTAS **************************************/

	public function store(Request $request)
	{

		//Verificar que la sesión iniciada sea válida y que el usuario tenga acceso a esta página
		$usuario = $request->session()->get('user');
		if (empty($usuario)) {
			Log::warning('Se intento guardar un registro de notas sin haber iniciado sesion. Se le mando a la pagina de inicio de sesion de la intranet.');
			return view('login.login');
		}
		if ($usuario['rol'] != 1 && $usuario['rol'] != 4 && $usuario['rol'] != 5) {
			Log::warning('El usuario con id ' . $usuario['userid'] . ' intento guardar un registro de notas sin tener los permisos requeridos. Se le mando una respuesta HTTP 403.');
			return abort(403);
		}

		//Verificar si el periodo es válido
		$periodo = TaPeriodo::find($request['periodo']);
		if (empty($periodo)) {
			Log::info('El usuario ' . $usuario['userid'] . ' intento guardar un registro de notas de un periodo que no existe. Por tanto, se le regreso a la pagina web con el error correspondiente.');
			return Redirect::back()->with('msg-err', 'El periodo que ha seleccionado no existe.');
		}
		$periodo = $periodo->toArray();

		//Verificar si el número de semana es válido
		$semana = $request['semana'];
		if (!$this->es_entero_positivo($semana)) {
			Log::info('El usuario ' . $usuario['userid'] . ' intento guardar un registro de notas en una semana que no existe. Por tanto, se le regreso a la pagina web con el error correspondiente.');
			return Redirect::back()->with('msg-err', 'La semana que ha seleccionado no existe.');
		}
		if ($semana > $periodo['per_semanas']) {
			Log::info('El usuario ' . $usuario['userid'] . ' intento guardar un registro de notas en una semana que se pasa del numero de semanas del periodo. Por tanto, se le regreso a la pagina web con el error correspondiente.');
			return Redirect::back()->with('msg-err', 'La semana que ha seleccionado se pasa del n&uacute;mero de semanas que tiene el periodo seleccionado.');
		}

		//Obtener los datos
		$rubros = $request['rubro'];
		$rubricas = $request['rubrica'];
		if (empty($rubros) || empty($rubricas)) {
			Log::info('El usuario ' . $usuario['userid'] . ' no ha registrado ninguna rubrica.');
			return Redirect::back()->with('msg-err', 'No se ha registrado ninguna rubrica dentro del registro de notas.');
		}

		//Registrar notas para cada alumno
		foreach ($rubros as $alu_id => $promedio_alumno)
		{
			//Verificar que el alumno existe
			$alumno = TAALUMNO::find($alu_id);
			if (empty($alumno)) {
				Log::info('El usuario '. $usuario['userid'] . ' intento guardar un registro de notas para un alumno con id ' . $alu_id . ', que no existe. Por tanto, se le regreso a la pagina web con el error correspondiente.');
				return Redirect::back()->with('msg-err', 'Ha intentado ingresar una nota a un alumno que no existe.');
			}

			//Verificar que se tengan rubricas para este alumno
			if (empty($rubricas[$alu_id])) {
				Log::info('El usuario ' . $usuario['userid'] . ' intento guardar un registro de notas para un alumno que no tiene notas ni de rubricas ni de rubros.');
				return Redirect::back()->with('msg-err', 'El alumno al que intenta registrar sus notas no tiene notas ni de rubricas ni de rubros.');
			}

			//Buscar el promedio de notas del alumno
			$nota_promedio = TaNotaProm::where(['cur_id' => $periodo['cur_id'], 'cic_id' => $periodo['cic_id'], 'alu_id' => $alu_id])->first();
			if (empty($nota_promedio)) {
				//Crear un promedio de notas en caso no se haya encontrado
				$nota_promedio = TaNotaProm::create([
					'alu_id' => $alu_id,
					'cur_id' => $periodo['cur_id'],
					'cic_id' => $periodo['cic_id'],
					'prm_notafinal' => '0'
				]);
			}

			//Registrar notas de cada rúbrica para un alumno y semana seleccionados
			foreach ($promedio_alumno as $rba_id => $rubrica_alumno)
			{
				//Verificar que la rubrica exista y que se cumpla el promedio parcial
				$rubrica = TaRubrica::find($rba_id);
				if (empty($rubrica)) {
					Log::info('El usuario '. $usuario['userid'] . ' intento guardar un registro de notas para un alumno con una rubrica inexistente. Por tanto, se le regreso a la pagina web con el error correspondiente.');
					return Redirect::back()->with('msg-err', 'Ha intentado ingresar una nota en una rubrica que no existe.');
				}

				//Verificar que se tengan rubricas para este alumno
				$promparcial = $rubricas[$alu_id][$rba_id];
				if (!$this->es_entero_positivo($promparcial)) {
					Log::info('El usuario '. $usuario['userid'] . ' intento guardar un registro de notas pero la nota asignada a una rubrica es vacia o no es valida. Por tanto, se le regreso a la pagina web con el error correspondiente.');
					return Redirect::back()->with('msg-err', 'Ha intentado ingresar una nota vac&iacute;a o no v&aacute;lida en una r&uacute;brica.');
				}
				if ($promparcial > $rubrica['rba_maxpunt']) {
					Log::info('El usuario '. $usuario['userid'] . ' intento guardar un registro de notas pero la nota asignada a una rubrica se pasa de la suma de puntajes maxima. Por tanto, se le regreso a la pagina web con el error correspondiente.');
					return Redirect::back()->with('msg-err', 'Ha intentado ingresar en una r&uacute;brica una nota que supera la m&aacute;xima suma de puntajes permitida.');
				}

				//Buscar la nota de rubrica del alumno
				$nota_rubrica = TaNotaRubrica::where(['prm_id' => $nota_promedio->prm_id, 'rba_id' => $rba_id, 'nra_semana' => $semana])->first();
				if (empty($nota_rubrica)) {
					//Crear una nota de rubrica en caso no se haya encontrado
					$nota_rubrica = TaNotaRubrica::create([
						'rba_id' => $rba_id,
						'prm_id' => $nota_promedio->prm_id,
						'nra_semana' => $semana,
						'nra_promparcial' => '0'
					]);
				}

				//Registrar notas de cada rubro para un alumno y semana seleccionados
				foreach ($rubrica_alumno as $rbo_id => $rubro_alumno)
				{
					//Verificar que existe el rubro
					$rubro = TaRubro::find($rbo_id);
					if (empty($rubro)) {
						Log::info('El usuario '. $usuario['userid'] . ' intento guardar un registro de notas para un alumno con un rubro inexistente. Por tanto, se le regreso a la pagina web con el error correspondiente.');
						return Redirect::back()->with('msg-err', 'Ha intentado ingresar una nota en un rubro que no existe.');
					}

					//Verificar que el puntaje no supere al máximo
					$puntaje = $rubros[$alu_id][$rba_id][$rbo_id];
					if (!$this->es_entero_positivo($puntaje)) {
						Log::info('El usuario '. $usuario['userid'] . ' intento guardar un registro de notas pero la nota asignada a un rubro es vacia o no es valida. Por tanto, se le regreso a la pagina web con el error correspondiente.');
						return Redirect::back()->with('msg-err', 'Ha intentado ingresar una nota vac&iacute;a o no v&aacute;lida en un rubro.');
					}
					if ($puntaje > $rubro['rbo_maxpunt']) {
						Log::info('El usuario '. $usuario['userid'] . ' intento guardar un registro de notas pero la nota asignada a un rubro se pasa del puntaje maximo. Por tanto, se le regreso a la pagina web con el error correspondiente.');
						return Redirect::back()->with('msg-err', 'Ha intentado ingresar en un rubro una nota que supera el m&aacute;ximo puntaje permitido.');
					}

					//Buscar la nota de rubro del alumno
					$nota_rubro = TaNotaRubro::where(['nra_id' => $nota_rubrica['nra_id'], 'rbo_id' => $rbo_id, 'nrb_semana' => $semana])->first();
					if (empty($nota_rubro)) {
						//Crear una nota de rubrica en caso no se haya encontrado
						$nota_rubro = TaNotaRubro::create([
							'rbo_id' => $rbo_id,
							'nra_id' => $nota_rubrica['nra_id'],
							'nrb_semana' => $semana,
							'nrb_puntaje' => '0'
						]);
					}

					//Guardar los cambios de la nota del rubro
					$nota_rubro['nrb_puntaje'] = $puntaje;
					$nota_rubro->save();
				}

				//Guardar los cambios de la nota de la rubrica
				$nota_rubrica->nra_promparcial = $promparcial;
				$nota_rubrica->save();
			}

			//Recalcular el promedio (FALTA)
			
		}

		//Volver a la pantalla de búsqueda
		Session::flash('msg-ok', 'Se guardaron las notas correctamente.');
		Log::info('El usuario ' . $usuario['userid'] . ' ha podido registrar las notas de sus alumnos del periodo ' . $periodo['per_id'] . ' en la semana ' . $semana . '.');
		return redirect()->action('PromedioController@index');
	}

	private function es_entero($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor));
	}

	private function es_entero_positivo($valor) {
		return (!empty($valor) && is_numeric($valor) && ((float)$valor == (int)$valor) && ((int)$valor > 0));
	}

}
