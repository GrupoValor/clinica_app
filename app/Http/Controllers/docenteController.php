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
		$docentes =DB::select('SELECT * FROM TA_EVALUADOR WHERE eva_tipeva = "d"');
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
                                      'rol_id' => '1',

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
        echo "Registrado";
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
        //
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
