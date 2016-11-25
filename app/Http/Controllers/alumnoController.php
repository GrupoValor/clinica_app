<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TAUSUARIO;

use App\Models\TAALUMNO;

use Illuminate\Support\Facades\DB;

use App\Classes\Encrypter;

class alumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$alumnos = TAALUMNO::all();
		$alumnos =DB::select('SELECT * FROM TA_ALUMNO INNER JOIN TA_USUARIO on TA_ALUMNO.usu_id = TA_USUARIO.usu_id WHERE TA_USUARIO.usu_activo = "1"');
		$data = array();
		
		foreach ($alumnos as $alumno){
			array_push($data,json_decode(json_encode($alumno), true));
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //sacar el siguiente ID
		//$query = mysql_query("SELECT MAX(usu_id) FROM TAUSUARIO");
		//$results = mysql_fetch_array($query);
		//$actual_id = $results['MAX(usu_id)'];
		//$cur_auto_id = $results['MAX(usu_id)'] + 1;
		

		
		//creo el usuario
        $usuario = TAUSUARIO::create([
                                      'cln_id' => '1',
                                      'rol_id' => '2',
                                      'usu_usenam' => $request['alu_codpuc'],
                                      'usu_passwd' => Encrypter::encrypt($request['alu_codpuc']),
									  'usu_activo' => '1'

        ]);

        $usuario->save();
		
		
		$casos =DB::select('SELECT MAX(usu_id) as id FROM TA_USUARIO');
		
		$data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $userid = $data[0]['id'];
		
		//creo el jefe de practica
		
		$alumno = TAALUMNO::create([
									
									'usu_id' => $userid,
									'alu_nombre' => $request['alu_nombre'],
									'alu_nrodoc' => $request['alu_nrodoc'],
									'alu_codpuc' => $request['alu_codpuc'],
									'alu_correo' => $request['alu_correo'],
									'alu_volunt' => 0
									]);
		$alumno->save();
		
		$casos =DB::select('SELECT MAX(alu_id) as id FROM TA_ALUMNO');
		
		
		$data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $aluid = $data[0]['id'];
		echo $aluid;
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
        DB::update('UPDATE TA_ALUMNO set 
            alu_nombre = :nombre ,
			alu_nrodoc = :nrodoc ,
            alu_codpuc = :codpuc ,
            alu_correo = :correo
        
        
            where alu_id = :id',
            ['nombre' => $request['alu_nombre'],
            'nrodoc' => $request['alu_nrodoc'],
            'codpuc' => $request['alu_codpuc'],
            'correo' => $request['alu_correo'],
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
		//buscamos el usu_id, dado el alu_id
		$caso =DB::select('SELECT TA_ALUMNO.usu_id FROM TA_USUARIO INNER JOIN TA_ALUMNO ON TA_USUARIO.usu_id = TA_ALUMNO.usu_id WHERE TA_ALUMNO.alu_id = :ID',
		['ID' => $id]);
		
		
		$data = array();
        array_push($data,json_decode(json_encode($caso), true));
        $userid = $data[0][0]['usu_id'];
		
		//echo $userid;
		//echo $userid['usu_id'];
        
		DB::UPDATE('Update  TA_USUARIO set
			usu_activo = 0
			where usu_id = :ID',
			['ID' => $userid]);
		
				
				
		echo "Se elimino el alumno seleccionado ";
    }
}
