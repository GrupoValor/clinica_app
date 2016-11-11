<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Models\TaNotaProm;
use App\Models\TaNotaRubrica;
use App\Models\TaNotaRubro;
use App\Models\TaNotaComentario;

//necesito buscar por alumno (alu_id), ciclo (cic_id) y curso (cur_id)

class taAlumnoController extends Controller {

	public function index() {

		//Extraer datos de la tabla ta_nota_promedio

		//buscar la fila de promedio igual al del alumno

		//revisar
		$dbNotaAlum = TaNotaProm::all();

		//datos que se mandan
		$promedios = array();
		$estados = array();

		//prm_id //va a ser 1 luego depende de que valor le manden
		// :C
		

		//$promID = TaNotaProm::where('prm_id',1)->get();

		$promID=2;
		foreach ($dbNotaAlum as $value) {
			array_push($promedios, $value['prm_notafinal']);
			array_push($estados, $value['prm_estado']);
		}


		//Extraer los datos de la tabla ta_notas_rubrica
		$dbNotaRubrica = TaNotaRubrica::all();
		$dbNotaRubro = TaNotaRubro::all();
		$dbNotaComentario = TaNotaComentario::all();

		//datos que se mandan
		$sumanotasParticipacion = array();
		$sumanotasSeguimiento = array();
		$semanasParticipacion = array();
		$semanasSeguimiento = array();

		//datos que se mandan
		$listaPuntajesParticipacion= array();
		$listaPuntajesSeguimiento =array();

		
		//comentarios y fechas de emision y modificacion
		$comentariosPorSemana = array();


		//variables de comentarios que se pasan
		$comentariosEnSemanaParticipacion = array();
		$comentariosEnSemanaSeguimiento = array();

		$rubricaID=1;
		$semanaID=1;

		foreach ($dbNotaRubrica as $value) {

			if ((int)$value['prm_id']==$promID) {	
				# code...
				if((int)$value['rba_id']==1){//participacion

					array_push($sumanotasParticipacion,$value['nra_promparcial']);
					array_push($semanasParticipacion, $value['nra_semana']);
					$rubricaID = $value['rba_id'];
					$semanaID=$value['nra_semana'];

					//comentarios de participacion por semana
					//es eficiente for each en este caso?
					$comentariosPorSemana = array();
					foreach ($dbNotaComentario as $value2) {
						# code...
						if((int)$value2['nra_id']==(int)$value['nra_id'])
						{
							array_push($comentariosPorSemana,$value2['cmr_desc']);
							array_push($comentariosPorSemana, $value2['cmr_fecha_emision']);
							array_push($comentariosPorSemana, $value2['cmr_fecha_modif']);
						}

					}

					//entraria una lista de ternas cada una con comentario-fecha emision-fecha modificacion
					array_push($comentariosEnSemanaParticipacion, $comentariosPorSemana);

				}
				if((int)$value['rba_id']==2){//seguimiento
					array_push($sumanotasSeguimiento, $value['nra_promparcial']);
					array_push($semanasSeguimiento, $value['nra_semana']);
					$rubricaID = $value['rba_id'];
					$semanaID=$value['nra_semana'];

					//comentarios de seguimiento por semana
					//es eficiente for each en este caso?
					$comentariosPorSemana = array();
					foreach ($dbNotaComentario as $value2) {
						# code...
						if((int)$value2['nra_id']==(int)$value['nra_id'])
						{
							array_push($comentariosPorSemana,$value2['cmr_desc']);
							array_push($comentariosPorSemana,$value2['usu_id']);	
							array_push($comentariosPorSemana, $value2['cmr_fecha_emision']);
							array_push($comentariosPorSemana, $value2['cmr_fecha_modif']);
						}

					}
					
					//entraria una lista de ternas cada una con comentario-fecha emision-fecha modificacion
					array_push($comentariosEnSemanaSeguimiento, $comentariosPorSemana);
				}

			}

			$rubricaID_aux=$rubricaID;
			

			$puntajes = array();

			foreach($dbNotaRubro as $value){
				if($value['nra_id']==$rubricaID){
					if($value['nrb_semana']==$semanaID)
					array_push($puntajes, $value['nrb_puntaje']);
				}
			}
			

			//datos que se mandan
			if((int)$rubricaID_aux==1){//participacion
				
				array_push($listaPuntajesParticipacion, $puntajes);
			}

			if((int)$rubricaID_aux==2){//seguimiento
				
				array_push($listaPuntajesSeguimiento,$puntajes);
			}
			# code...
		}


		//Ingresar a la vista principal
		return view('intranet.ta_alumno', ['promedios' => $promedios, 'estados' => $estados, 'sumanotasParticipacion'=> $sumanotasParticipacion, 'sumanotasSeguimiento'=>$sumanotasSeguimiento,'semanasParticipacion'=>$semanasParticipacion, 'semanasSeguimiento'=>$semanasSeguimiento, 'listaPuntajesParticipacion'=>$listaPuntajesParticipacion, 'listaPuntajesSeguimiento'=>$listaPuntajesSeguimiento,'comentariosEnSemanaParticipacion'=>$comentariosEnSemanaParticipacion,'comentariosEnSemanaSeguimiento'=>$comentariosEnSemanaSeguimiento]
			);
	}

	public function create() {
		return abort(404);
	}
}
