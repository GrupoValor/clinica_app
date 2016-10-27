<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TAUSUARIO

use App\Models\TAJEFEPRAC

class jpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jefes = TAJEFEPRAC::all();
		$data = array();
		
		foreach ($jefes as $jefe){
			array_push($data,$jefe['attributes']);
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
		
		//
		
		//creo el usuario
		$usuario = TAUSUARIO::create(['usu_id' => $cur_auto_id,
									  'cln_id' => '1',
									  'rol_id' => '1'
		]);
		
		//saco el ultimo id de la tabla jefeprac
		$queryAUX = mysql_query("SELECT MAX(jef_id) FROM TAJEFEPRAC");
		$resultsAUX = mysql_fetch_array($query);
		$cur_jefe_id = $results['MAX(jef_id)'] + 1;
		
		
		//creo el jefe de practica
		
		$jefe = TAJEFEPRAC::create([
									'jef_id' => $cur_jefe_id,
									'usu_id' => $cur_auto_id,
									'jef_nombre' => $request['jef_nombre'],
									'jef_apelpa' => $request['jef_apelpa'],
									'jef_apelma' => $request['jef_apelma'],
									'jef_dni' => $request['jef_dni'],
									'jef_codpuc' => $request['jef_codpuc'],
									'jef_telno1' => $request['jef_telno1'],
									'jef_telno2' => $request['jef_telno2'],
									'jef_correo' => $request['jef_correo']
									]);
		$jefe->save();
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
        DB::update('UPDATE TA_JEFEPRAC set 
            jef_nombre = :nombre ,
            jef_apelpa = :apelpa ,
            jef_apelma = :apelma ,
            jef_codpuc = :codpuc ,
            jef_dni    = :dni ,
            jef_correo = :correo,
			jef_telno1 = :telno1,
			jef_telno2 = :telno2


            where jef_id = :id',
            ['nombre' => $request['jef_nombre'],
            'apelpa' => $request['jef_apelpa'],
            'apelma' => $request['jef_apelma'],
            'codpuc' => $request['jef_codpuc'],
            'dni' => $request['jef_dni'],
            'correo' => $request['jef_correo'],
			'telno1' => $request['jef_telno1'],
			'telno2' => $request['jef_telno2'],
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
