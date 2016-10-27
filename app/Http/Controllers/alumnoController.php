<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TAUSUARIO

use App\Models\TAALUMNO

class alumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = TAALUMNO::all();
		$data = array();
		
		foreach ($alumnos as $alumno){
			array_push($data,$alumno['attributes']);
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
		$query = mysql_query("SELECT MAX(usu_id) FROM TAUSUARIO");
		$results = mysql_fetch_array($query);
		//$actual_id = $results['MAX(usu_id)'];
		$cur_auto_id = $results['MAX(usu_id)'] + 1;
		
		
		
		//creo el usuario
		$usuario = TAUSUARIO::create(['usu_id' => $cur_auto_id,
									  'cln_id' => '1',
									  'rol_id' => '1'
		]);
		
		//saco el ultimo id de la tabla alumno
		$queryAUX = mysql_query("SELECT MAX(alu_id) FROM TAALUMNO");
		$resultsAUX = mysql_fetch_array($query);
		$cur_alumno_id = $results['MAX(alu_id)'] + 1;
		
		//creo el jefe de practica
		
		$alumno = TAALUMNO::create([
									'alu_id' => $cur_alumno_id,
									'usu_id' => $cur_auto_id,
									'alu_nombre' => $request['alu_nombre'],
									'alu_apelpa' => $request['alu_apelpa'],
									'alu_apelma' => $request['alu_apelma'],
									'alu_dni' => $request['alu_dni'],
									'alu_codpuc' => $request['alu_codpuc'],
									'alu_telno1' => $request['alu_telno1'],
									'alu_telno2' => $request['alu_telno2'],
									'alu_correo' => $request['alu_correo']
									]);
		$alumno->save();
		echo "Ingresado";
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
            alu_apelpa = :apelpa ,
            alu_apelma = :apelma ,
            alu_codpuc = :codpuc ,
            alu_dni    = :dni ,
            alu_correo = :correo,
			alu_telno1 = :telno1,
			alu_telno2 = :telno2


            where alu_id = :id',
            ['nombre' => $request['alu_nombre'],
            'apelpa' => $request['alu_apelpa'],
            'apelma' => $request['alu_apelma'],
            'codpuc' => $request['alu_codpuc'],
            'dni' => $request['alu_dni'],
            'correo' => $request['alu_correo'],
			'telno1' => $request['alu_telno1'],
			'telno2' => $request['alu_telno2'],
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
        //
    }
}
