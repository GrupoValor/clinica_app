<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TAUSUARIO

use App\Models\TAPROFESOR

class profesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = TAPROFESOR::all();
		$data = array();
		
		foreach ($profesores as $profesor){
			array_push($data,$profesor['attributes']);
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
		
		//saco el ultimo id de la tabla profesor
		$queryAUX = mysql_query("SELECT MAX(pro_id) FROM TAPROFESOR");
		$resultsAUX = mysql_fetch_array($query);
		$cur_pro_id = $results['MAX(pro_id)'] + 1;
		
		
		//creo el jefe de practica
		
		$profesor = TAPROFESOR::create([
									'pro_id' => $cur_pro_id, 
									'usu_id' => $cur_auto_id,
									'pro_nombre' => $request['pro_nombre'],
									'pro_apelpa' => $request['pro_apelpa'],
									'pro_apelma' => $request['pro_apelma'],
									'pro_dni' => $request['pro_dni'],
									'pro_codpuc' => $request['pro_codpuc'],
									'pro_telno1' => $request['pro_telno1'],
									'pro_telno2' => $request['pro_telno2'],
									'pro_correo' => $request['pro_correo']
									]);
		$profesor->save();
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
            pro_nombre = :nombre ,
            pro_apelpa = :apelpa ,
            pro_apelma = :apelma ,
            pro_codpuc = :codpuc ,
            pro_dni    = :dni ,
            pro_correo = :correo,
			pro_telno1 = :telno1,
			pro_telno2 = :telno2


            where pro_id = :id',
            ['nombre' => $request['pro_nombre'],
            'apelpa' => $request['pro_apelpa'],
            'apelma' => $request['pro_apelma'],
            'codpuc' => $request['pro_codpuc'],
            'dni' => $request['pro_dni'],
            'correo' => $request['pro_correo'],
			'telno1' => $request['pro_telno1'],
			'telno2' => $request['pro_telno2'],
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
