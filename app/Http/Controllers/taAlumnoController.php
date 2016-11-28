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

			$rbaidLista = array();

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
			//agregado para 5 rubros
			$sumanotas3 = array();
			$sumanotas4 = array();
			$sumanotas5 = array();

			$semanasParticipacion = array();
			$semanasSeguimiento = array();
			//agregado para 5 rubros
			$semanas3 = array();
			$semanas4 = array();
			$semanas5 = array();

			//datos que se mandan
			$listaPuntajesParticipacion= array();
			$listaPuntajesSeguimiento =array();
			//agregado para 5 rubros
			$listaPuntajes3 = array();
			$listaPuntajes4 = array();
			$listaPuntajes5 = array();

			
			//comentarios y fechas de emision y modificacion
			$comentariosPorSemana = array();


			//variables de comentarios que se pasan
			$comentariosEnSemanaParticipacion = array();
			$comentariosEnSemanaSeguimiento = array();
			//agregado para 5 rubros
			$comentariosEnSemana3 = array();
			$comentariosEnSemana4 = array();
			$comentariosEnSemana5 = array();

			$rubricaID=1;
			$semanaID=1;


			//listas con nrb_id

			$nrb_id_part = array();
			$nrb_id_seg = array();


			//Listo
			//deberia optimizar para que no se recorra dos veces lo mismo
			//ver como sacar todas las rbaid
			foreach ($dbNotaRubrica as $value) {//deberia ser where
				if ((int)$value['prm_id']==$promID) {
					$aux = 0;
					foreach ($rbaidLista as $val) {
						if((int)$val == $value['rba_id']){
							$aux = 1;
						}
					}
					if($aux==0){
						array_push($rbaidLista, $value['rba_id']);
					}
				}
			}

			//sacar los nombres de las rubricas

			$nombresPesosRubrica = array();
			$nombresRubroP = array();
			$nombresRubroS = array();
			//agregado para 5 rubros
			$nombresRubro3 = array();
			$nombresRubro4 = array();
			$nombresRubro5 = array();


			//Listo
			foreach ($dbRubrica as $value) {
				$aux = 0;
				foreach ($rbaidLista as $val) {
					if((int)$val==(int)$value['rba_id']){
						$aux = 1;
					}
				}

				if($aux==1){
					array_push($nombresPesosRubrica, $value['rba_nombre']);
					array_push($nombresPesosRubrica, $value['rba_peso']);
				}
			}


			foreach ($dbNotaRubrica as $value) {//deberia ser where

				if ((int)$value['prm_id']==$promID) {

					# code...
					if((int)$value['rba_id']==$rbaidLista[0]){//PARTICIPACION

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
								//array_push($comentariosPorSemana,$value2['usu_id']);
								//busco el nombre
								foreach ($dbAlumnos as $valueNombre) {
									if( strcmp($value2['cmr_autor_usu_id'] , $valueNombre['alu_id'])==0){
										array_push($comentariosPorSemana,$valueNombre['alu_nombre']);
									}
								}
								array_push($comentariosPorSemana, $value2['cmr_fecha_emision']);
								array_push($comentariosPorSemana, $value2['cmr_fecha_modif']);
							}

						}

						//entraria una lista de ternas cada una con comentario-fecha emision-fecha modificacion
						array_push($comentariosEnSemanaParticipacion, $comentariosPorSemana);

					}

					elseif((count($rbaidLista)>1)&&((int)$value['rba_id']==$rbaidLista[1])){//SEGUIMIENTO
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

								array_push($comentariosPorSemana,$value2['cmr_desc']);
								//array_push($comentariosPorSemana,$value2['usu_id']);
								//busco el nombre
								foreach ($dbAlumnos as $valueNombre) {
									if( strcmp($value2['cmr_autor_usu_id'] , $valueNombre['alu_id'])==0){
										array_push($comentariosPorSemana,$valueNombre['alu_nombre']);
									}
								}	
								array_push($comentariosPorSemana, $value2['cmr_fecha_emision']);
								array_push($comentariosPorSemana, $value2['cmr_fecha_modif']);

								
							}

						}
						
						//entraria una lista de ternas cada una con comentario-fecha emision-fecha modificacion
						array_push($comentariosEnSemanaSeguimiento, $comentariosPorSemana);
					}

					elseif ((count($rbaidLista)>2)&&((int)$value['rba_id']==$rbaidLista[2])) {
						array_push($sumanotas3, $value['nra_promparcial']);
						array_push($semanas3, $value['nra_semana']);
						$rubricaID = $value['rba_id'];
						$semanaID=$value['nra_semana'];

						//comentarios de 3ra rubrica
						$comentariosPorSemana = array();
						foreach ($dbNotaComentario as $value2) {
							
							if((int)$value2['nra_id']==(int)$value['nra_id'])
							{

								array_push($comentariosPorSemana,$value2['cmr_desc']);
								//array_push($comentariosPorSemana,$value2['usu_id']);
								//busco el nombre
								foreach ($dbAlumnos as $valueNombre) {
									if( strcmp($value2['cmr_autor_usu_id'] , $valueNombre['alu_id'])==0){
										array_push($comentariosPorSemana,$valueNombre['alu_nombre']);
									}
								}	
								array_push($comentariosPorSemana, $value2['cmr_fecha_emision']);
								array_push($comentariosPorSemana, $value2['cmr_fecha_modif']);

								
							}

							array_push($comentariosEnSemana3, $comentariosPorSemana);
						}
					}

					elseif ((count($rbaidLista)>3)&&((int)$value['rba_id']==$rbaidLista[3])) {
						array_push($sumanotas4, $value['nra_promparcial']);
						array_push($semanas4, $value['nra_semana']);
						$rubricaID = $value['rba_id'];
						$semanaID=$value['nra_semana'];

						//comentarios de 3ra rubrica
						$comentariosPorSemana = array();
						foreach ($dbNotaComentario as $value2) {
							
							if((int)$value2['nra_id']==(int)$value['nra_id'])
							{

								array_push($comentariosPorSemana,$value2['cmr_desc']);
								//array_push($comentariosPorSemana,$value2['usu_id']);
								//busco el nombre
								foreach ($dbAlumnos as $valueNombre) {
									if( strcmp($value2['cmr_autor_usu_id'] , $valueNombre['alu_id'])==0){
										array_push($comentariosPorSemana,$valueNombre['alu_nombre']);
									}
								}	
								array_push($comentariosPorSemana, $value2['cmr_fecha_emision']);
								array_push($comentariosPorSemana, $value2['cmr_fecha_modif']);

								
							}

							array_push($comentariosEnSemana4, $comentariosPorSemana);
						}
					}

					elseif ((count($rbaidLista)>4)&&((int)$value['rba_id']==$rbaidLista[4])) {
						array_push($sumanotas5, $value['nra_promparcial']);
						array_push($semanas5, $value['nra_semana']);
						$rubricaID = $value['rba_id'];
						$semanaID=$value['nra_semana'];

						//comentarios de 3ra rubrica
						$comentariosPorSemana = array();
						foreach ($dbNotaComentario as $value2) {
							
							if((int)$value2['nra_id']==(int)$value['nra_id'])
							{

								array_push($comentariosPorSemana,$value2['cmr_desc']);
								//array_push($comentariosPorSemana,$value2['usu_id']);
								//busco el nombre
								foreach ($dbAlumnos as $valueNombre) {
									if( strcmp($value2['cmr_autor_usu_id'] , $valueNombre['alu_id'])==0){
										array_push($comentariosPorSemana,$valueNombre['alu_nombre']);
									}
								}	
								array_push($comentariosPorSemana, $value2['cmr_fecha_emision']);
								array_push($comentariosPorSemana, $value2['cmr_fecha_modif']);

							}

							array_push($comentariosEnSemana5, $comentariosPorSemana);
						}
					}


				}


				$rubricaID_aux=$rubricaID;
				

				$puntajes = array();

				foreach($dbNotaRubro as $value){
					//sacar rba_id
					$rbaid_aux=1;
					foreach ($dbNotaRubrica as $valuer) {
						if($value['nra_id']==$valuer['nra_id']){
							$rbaid_aux=$valuer['rba_id'];
						}
					}


					if($rbaid_aux==$rubricaID){
						if($value['nrb_semana']==$semanaID)
						array_push($puntajes, $value['nrb_puntaje']);
					}
				}
				

				//LISTO
				//datos que se mandan
				if((int)$rubricaID_aux==$rbaidLista[0]){//participacion
					
					array_push($listaPuntajesParticipacion, $puntajes);
				}

				if((count($rbaidLista)>1)&&((int)$rubricaID_aux==$rbaidLista[1])){//seguimiento
					
					array_push($listaPuntajesSeguimiento,$puntajes);
				}

				if((count($rbaidLista)>2)&&((int)$rubricaID_aux==$rbaidLista[2])){//seguimiento
					
					array_push($listaPuntajes3,$puntajes);
				}

				if((count($rbaidLista)>3)&&((int)$rubricaID_aux==$rbaidLista[3])){//seguimiento
					
					array_push($listaPuntajes4,$puntajes);
				}

				if((count($rbaidLista)>4)&&((int)$rubricaID_aux==$rbaidLista[4])){//seguimiento
					
					array_push($listaPuntajes5,$puntajes);
				}
				# code...
			}


			//saco los nombres de las cabeceras de los rubros
			foreach ($dbRubro as $value) {
				if($rbaidLista[0] == $value['rba_id']){
					array_push($nombresRubroP, $value['rbo_nombre']);
				}
				elseif ((count($rbaidLista)>1)&&($rbaidLista[1] ==$value['rba_id'])) {
					array_push($nombresRubroS, $value['rbo_nombre']);
				}
				elseif ((count($rbaidLista)>2)&&($rbaidLista[2] ==$value['rba_id'])) {
					array_push($nombresRubro3, $value['rbo_nombre']);
				}
				elseif ((count($rbaidLista)>3)&&($rbaidLista[3] ==$value['rba_id'])) {
					array_push($nombresRubro4, $value['rbo_nombre']);
				}
				elseif ((count($rbaidLista)>4)&&($rbaidLista[4] ==$value['rba_id'])) {
					array_push($nombresRubro5, $value['rbo_nombre']);
				}
			}

			//print_r($listaPuntajesParticipacion);

		
		//FALTA
		//Ingresar a la vista principal
		return view('intranet.ta_alumno', ['promedios' => $promedios, 'estados' => $estados, 'sumanotasParticipacion'=> $sumanotasParticipacion, 'sumanotasSeguimiento'=>$sumanotasSeguimiento,
			'sumanotas3' => $sumanotas3, 'sumanotas4' =>$sumanotas4, 'sumanotas5' => $sumanotas5,'semanasParticipacion'=>$semanasParticipacion, 'semanasSeguimiento'=>$semanasSeguimiento, 
					'semanas3' => $semanas3, 'semanas4' => $semanas4, 'semanas5' => $semanas5,'listaPuntajesParticipacion'=>$listaPuntajesParticipacion, 'listaPuntajesSeguimiento'=>$listaPuntajesSeguimiento,
						'listaPuntajes3' => $listaPuntajes3, 'listaPuntajes4' => $listaPuntajes4, 'listaPuntajes5' => $listaPuntajes5,'comentariosEnSemanaParticipacion'=>$comentariosEnSemanaParticipacion,'comentariosEnSemanaSeguimiento'=>$comentariosEnSemanaSeguimiento,
								'comentariosEnSemana3' => $comentariosEnSemana3, 'comentariosEnSemana4' => $comentariosEnSemana4, 'comentariosEnSemana5' => $comentariosEnSemana5,
									'nombresPesosRubrica' => $nombresPesosRubrica, 'nombresRubroS' => $nombresRubroS, 'nombresRubroP' => $nombresRubroP, 'nombresRubro3' => $nombresRubro3, 'nombresRubro4' => $nombresRubro4, 'nombresRubro5' => $nombresRubro5]);
		}
		return view('errors.403'); //no tiene permisos para ver la pagina que solicito

	}

	

	public function create() {
		return abort(404);
	}


}
