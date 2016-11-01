<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TAUSUARIO;

use App\Models\TAEVALUADOR;

use Illuminate\Support\Facades\DB;

class jpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$jefes = TAEVALUADOR::all();
		//$jefes =TAEVALUADOR::select('SELECT * FROM TA_EVALUADOR WHERE eva_tipeva = j');
		$jefes =DB::select('SELECT * FROM TA_EVALUADOR WHERE eva_tipeva = "j"');



        $data = array();

        foreach ($jefes as $jefe) {
            array_push($data,json_decode(json_encode($jefe), true));
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
		
		//
		
		//creo el usuario
		$usuario = TAUSUARIO::create([
									  'cln_id' => '1',
									  'rol_id' => '1'
		]);
		$usuario->save();
		
		$casos =DB::select('SELECT MAX(usu_id) as id FROM TA_USUARIO');
		
		
		$data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $userid = $data[0]['id'];
		
		
		//saco el ultimo id de la tabla jefeprac
		//$queryAUX = mysql_query("SELECT MAX(jef_id) FROM TAJEFEPRAC");
		//$resultsAUX = mysql_fetch_array($query);
		//$cur_jefe_id = $results['MAX(jef_id)'] + 1;
		
		
		//creo el jefe de practica
		
		$jefe = TAEVALUADOR::create([								
									'usu_id' => $userid,
									'eva_codpuc' => $request['eva_codpuc'],
                                    'eva_tipeva' => $request['eva_tipeva'],
                                    'eva_nombre' => $request['eva_nombre'],
                                    'eva_correo' => $request['eva_correo']
                                    ]);
		$jefe->save();
		
		$casos =DB::select('SELECT MAX(eva_id) as id FROM TA_EVALUADOR');
		
		
		$data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $jpid = $data[0]['id'];
		echo $jpid;
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
        //DB::update('UPDATE TA_JEFEPRAC set 
        //    jef_nombre = :nombre ,
        //    jef_apelpa = :apelpa ,
        //    jef_apelma = :apelma ,
        //    jef_codpuc = :codpuc ,
        //    jef_dni    = :dni ,
        //    jef_correo = :correo,
		//	jef_telno1 = :telno1,
		//	jef_telno2 = :telno2
        //
        //
        //    where jef_id = :id',
        //    ['nombre' => $request['jef_nombre'],
        //    'apelpa' => $request['jef_apelpa'],
        //    'apelma' => $request['jef_apelma'],
        //    'codpuc' => $request['jef_codpuc'],
        //    'dni' => $request['jef_dni'],
        //    'correo' => $request['jef_correo'],
		//	'telno1' => $request['jef_telno1'],
		//	'telno2' => $request['jef_telno2'],
        //    'id' => $id]);
		//	
		//	echo "Registro actualizado correctamente" ;
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
