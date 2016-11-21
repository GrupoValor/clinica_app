<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\TAEVALUADOR;
use App\Models\TAUSUARIO;

use Illuminate\Support\Facades\DB;

class docenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
        //$docentes = TAEVALUADOR::all();
		$docentes =DB::select('SELECT * FROM TA_EVALUADOR INNER JOIN TA_USUARIO on TA_EVALUADOR.usu_id = TA_USUARIO.usu_id WHERE eva_tipeva = "d" and TA_USUARIO.usu_activo = "1"');
        $data = array();

        foreach ($docentes as $docente) {
            array_push($data,json_decode(json_encode($docente), true));
            //echo var_dump($data);
        }
       
        echo json_encode($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        //creo el usuario
        $usuario = TAUSUARIO::create([
                                      'cln_id' => '1',
                                      'rol_id' => '4',
                                      'usu_usenam' => $request['eva_codpuc'],
                                      'usu_passwd' => $request['eva_codpuc'],
									  'usu_activo' => '1'

        ]);


        $usuario->save();
        

        
        $casos =DB::select('SELECT MAX(usu_id) as id FROM TA_USUARIO');



        $data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $userid = $data[0]['id'];
        
        //creo el docente
        
        $docente = TAEVALUADOR::create([
                                    'usu_id' => $userid,
                                    'eva_codpuc' => $request['eva_codpuc'],
                                    'eva_tipeva' => $request['eva_tipeva'],
                                    'eva_nombre' => $request['eva_nombre'],
                                    'eva_correo' => $request['eva_correo']
                                    ]);
        $docente->save();
        
		$casos =DB::select('SELECT MAX(eva_id) as id FROM TA_EVALUADOR');
		
		
		$data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $docid = $data[0]['id'];
		echo $docid;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::update('UPDATE TA_EVALUADOR set 
            eva_nombre = :nombre ,
            eva_codpuc = :codpuc ,
            eva_correo = :correo
        
        
            where eva_id = :id and eva_tipeva = "d"',
            ['nombre' => $request['eva_nombre'],
            'codpuc' => $request['eva_codpuc'],
            'correo' => $request['eva_correo'],
            'id' => $id]);
			
			echo "Registro actualizado correctamente" ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //buscamos el usu_id, dado el eva_id
		$caso =DB::select('SELECT TA_EVALUADOR.usu_id FROM TA_USUARIO INNER JOIN TA_EVALUADOR ON TA_USUARIO.usu_id = TA_EVALUADOR.usu_id WHERE TA_EVALUADOR.eva_id = :ID',
		['ID' => $id]);
		
		
		$data = array();
        array_push($data,json_decode(json_encode($caso), true));
        $userid = $data[0][0]['usu_id'];
		
		//echo $userid;
		//echo $userid['usu_id'];
        
		DB::UPDATE('Update  TA_USUARIO set
			usu_activo = 0
			where usu_id = :id',
			['id' => $userid]);
		
				
				
		echo "Se elimino el alumno seleccionado ";
    }
}
