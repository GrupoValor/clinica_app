<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Models\TaNotaProm;
use App\Models\TaNotaRubrica;
use App\Models\TaNotaRubro;
use App\Models\TaNotaComentario;
use App\Models\TAALUMNO;
use App\Models\TaRubrica;
use App\Models\TaRubro;

//necesito buscar por alumno (alu_id), ciclo (cic_id) y curso (cur_id)

class taAlumnoController extends Controller {

	public function index(Request $request) {

		//Extraer datos de la tabla ta_nota_promedio

		//buscar la fila de promedio igual al del alumno

		//REVISAR
		$data = $request->session()->get('user');
		//print_r($data);
		//buscaria el usu_id y el rol_id

		$useridi = (int)$data['userid'];
		//$useridi = 2;

		$rolidi = (int)$data['rol'];
		//$rolidi = 2;



		//todo lo demas es solo si ro_id == 2

		if($rolidi ==2) {

			$dbNotaAlum = TaNotaProm::all();
			$dbAlumnos = TAALUMNO::all();
			$dbRubrica = TaRubrica::all();
			$dbRubro = TaRubro::all();


			//$aluidi = int;
			$aluidi =-1;

			//busco el alu_id en la tabla de alumnos, optimizar con where

			foreach ($dbAlumnos as $value) {
				if((int)$value['usu_id']==$useridi){
					$aluidi = $value['alu_id'];
				}

			}


			//datos que se mandan
			$promedios = array();
			$estados = array();
			

			//id de rubricas, solo son 2

			//$rbaid1 = int;
			$rbaid1 = -2;
			$rbaid2 = -2;

			//$promID = TaNotaProm::where('prm_id',1)->get();

			//saco prom_id


			//$promID=int;
			$promID = -1;

			foreach ($dbNotaAlum as $value) {
				if((int)$value['alu_id']==$aluidi){
					$promID=(int)$value['prm_id'];
					//en verdad solo es un valor por cada uno
					array_push($promedios, $value['prm_notafinal']);
					array_push($estados, $value['prm_estado']);
				}
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


			//listas con nrb_id

			$nrb_id_part = array();
			$nrb_id_seg = array();


			//deberia optimizar para que no se recorra dos veces lo mismo
			foreach ($dbNotaRubrica as $value) {//deberia ser where
				if ((int)$value['prm_id']==$promID) {
					if($rbaid1 == -2){
						$rbaid1 = (int)$value['rba_id'];
					}elseif ($rbaid1 != (int)$value['rba_id']) {
						$rbaid2 = (int)$value['rba_id'];
					}
				}
			}


			//sacar los nombres de las rubricas

			$nombresPesosRubrica = array();
			$nombresRubroP = array();
			$nombresRubroS = array();


			foreach ($dbRubrica as $value) {
				if(($rbaid1 == (int)$value['rba_id'])||($rbaid2 == (int)$value['rba_id'])){
					array_push($nombresPesosRubrica, $value['rba_nombre']);
					array_push($nombresPesosRubrica, $value['rba_peso']);
				}
			}


			foreach ($dbNotaRubrica as $value) {//deberia ser where

				if ((int)$value['prm_id']==$promID) {

					# code...
					if((int)$value['rba_id']==$rbaid1){//PARTICIPACION

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
								//aqui guardo todos los nrb_id de participacion 
								array_push($nrb_id_part,$value['nrb_id']);

								array_push($comentariosPorSemana,$value2['cmr_desc']);
								array_push($comentariosPorSemana, $value2['cmr_fecha_emision']);
								array_push($comentariosPorSemana, $value2['cmr_fecha_modif']);
							}

						}

						//entraria una lista de ternas cada una con comentario-fecha emision-fecha modificacion
						array_push($comentariosEnSemanaParticipacion, $comentariosPorSemana);

					}
					if((int)$value['rba_id']==$rbaid2){//SEGUIMIENTO
						array_push($sumanotasSeguimiento, $value['nra_promparcial']);
						array_push($semanasSeguimiento, $value['nra_semana']);
						$rubricaID = $value['rba_id'];
						$semanaID=$value['nra_semana'];

						//comentarios de seguimiento por semana
						//es eficiente for each en este caso?
						$comentariosPorSemana = array();
						foreach ($dbNotaComentario as $value2) {
							
							if((int)$value2['nra_id']==(int)$value['nra_id'])
							{
								//aqui guardo todos los nrb_id de seguimieto
								array_push($nrb_id_seg,$value['nrb_id']);

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


			//saco los nombres de las cabeceras de los rubros
			foreach ($dbRubro as $value) {
				if($rbaid1 == $value['rba_id']){
					array_push($nombresRubroP, $value['rbo_nombre']);
				}
				elseif ($rbaid2 ==$value['rba_id']) {
					array_push($nombresRubroS, $value['rbo_nombre']);
				}
			}

		


		//Ingresar a la vista principal
		return view('intranet.ta_alumno', ['promedios' => $promedios, 'estados' => $estados, 'sumanotasParticipacion'=> $sumanotasParticipacion, 'sumanotasSeguimiento'=>$sumanotasSeguimiento,'semanasParticipacion'=>$semanasParticipacion, 'semanasSeguimiento'=>$semanasSeguimiento, 'listaPuntajesParticipacion'=>$listaPuntajesParticipacion, 'listaPuntajesSeguimiento'=>$listaPuntajesSeguimiento,'comentariosEnSemanaParticipacion'=>$comentariosEnSemanaParticipacion,'comentariosEnSemanaSeguimiento'=>$comentariosEnSemanaSeguimiento, 'nombresPesosRubrica' => $nombresPesosRubrica, 'nombresRubroS' => $nombresRubroS, 'nombresRubroP' => $nombresRubroP]);
		}
		return view('errors.403'); //no tiene permisos para ver la pagina que solicito

	}

	

	public function create() {
		return abort(404);
	}
}
