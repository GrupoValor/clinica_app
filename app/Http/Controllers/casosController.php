<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\TACASO;
use Illuminate\Support\Facades\DB;

class casosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function miscasos(Request $request){

        $data = $request->session()->get('user');
        
       

        $casos =DB::select('SELECT TA_CASO.cas_id ,cas_fecate,cli_nombre,cas_objact,alu_nombre as res_nombre,estcas_detalle
            FROM TA_CASO
            JOIN TA_CLIENTE
            ON TA_CASO.cli_id=TA_CLIENTE.cli_id
            JOIN TA_ALUMNO
            ON TA_CASO.usu_id=TA_ALUMNO.usu_id
            JOIN TA_ESTADOCASO
            ON TA_CASO.estcas_id=TA_ESTADOCASO.estcas_id
            JOIN TA_USUARIO_CASO
            on TA_CASO.cas_id = TA_USUARIO_CASO.cas_id
            where
            TA_USUARIO_CASO.usu_id = "'.$data['userid'].'"');



        $data = array();

        foreach ($casos as $caso) {
            array_push($data,json_decode(json_encode($caso), true));
            //echo var_dump($data);
        }
       
        
        echo json_encode($data);

    }

    public function getpendientes(Request $request){
        $data = $request->session()->get('user');

        $casos =DB::select('select TA_TAREA.cas_id,tar_nombre,tar_descri,cas_objact from TA_CASO inner join TA_TAREA on TA_CASO.cas_id = TA_TAREA.cas_id inner join TA_USUARIO_CASO on TA_CASO.cas_id = TA_USUARIO_CASO.cas_id where tar_estado = "pendiente"  and TA_USUARIO_CASO.usu_id = "'.$data['userid'].'" or  tar_estado = "backlog" and TA_USUARIO_CASO.usu_id = "'.$data['userid'].'"');



        $data = array();

        foreach ($casos as $caso) {
            array_push($data,json_decode(json_encode($caso), true));
            //echo var_dump($data);
        }
       
        
        echo json_encode($data);
    }


      public function getalertas(Request $request){
        $data = $request->session()->get('user');

        $casos =DB::select('select count(*) as nincide, TA_ALERTA.cas_id, TA_CASO.cas_objact from TA_ALERTA join TA_ALERTA_ATENCION on TA_ALERTA.ale_id = TA_ALERTA_ATENCION.ale_id  join TA_CASO on TA_CASO.cas_id = TA_ALERTA.cas_id join TA_USUARIO_CASO on TA_USUARIO_CASO.cas_id = TA_ALERTA.cas_id where ale_estado = "espera" and TA_USUARIO_CASO.usu_id ="'.$data['userid'].'" group by TA_ALERTA.cas_id ,  TA_CASO.cas_objact');



        $data = array();

        foreach ($casos as $caso) {
            array_push($data,json_decode(json_encode($caso), true));
            //echo var_dump($data);
        }
       
        
        echo json_encode($data);
    }



    public function index()
    {
      



        $casos =DB::select('SELECT cas_id ,cas_fecate,cli_nombre,cas_objact,alu_nombre as res_nombre,estcas_detalle
            FROM TA_CASO
            JOIN TA_CLIENTE
            ON TA_CASO.cli_id=TA_CLIENTE.cli_id
            JOIN TA_ALUMNO
            ON TA_CASO.usu_id=TA_ALUMNO.usu_id
            JOIN TA_ESTADOCASO
            ON TA_CASO.estcas_id=TA_ESTADOCASO.estcas_id;');



        $data = array();

        foreach ($casos as $caso) {
            array_push($data,json_decode(json_encode($caso), true));
            //echo var_dump($data);
        }
       
        
        echo json_encode($data);
        //
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
 
   
    
       $caso = TACASO::create([
                                           'usu_id' => $request['usu_id'],
                                           'cli_id' => $request['cli_id'],
                                           'cas_docent' => $request['doc_id'],
                                           'estcas_id' => $request['estcas_id'],
                                           'cas_fecate' => $request['cas_fecate'],
                                           'cas_objact'=> $request['cas_objact'],
                                            'cas_observ'=> $request['cas_observ']]);
            

        $caso->save();

        $casos =DB::select('SELECT MAX(cas_id) as id FROM TA_CASO');
        
        $data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $casoid = $data[0]['id'];





        DB::insert("insert into TA_USUARIO_CASO values(".$casoid.",".$request['usu_id'].")");


        $casos =DB::select('SELECT usu_id as id FROM TA_EVALUADOR where eva_id='.$request['doc_id']);
        
        $data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $evaid = $data[0]['id'];



        DB::insert("insert into TA_USUARIO_CASO values(".$casoid.",".$evaid.")");
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


       $caso =DB::select('SELECT A.cas_id, A.cas_fecate, 
                            CONCAT(E.usu_nombre," ",E.usu_appate) as "cli_nombre",
                            B.cli_direcc ,
                            CONCAT(C.usu_nombre," ",C.usu_appate) as "res_nombre",
                            A.cas_objact,A.cas_observ,A.cas_result,
                            D.estcas_detalle 
                            FROM TA_CASO A, TA_CLIENTE B, TA_USUARIO C, TA_ESTADOCASO D,TA_USUARIO E 
                            WHERE 
                            A.cli_id = B.cli_id AND A.usu_id = C.usu_id AND
                            A.estcas_id = D.estcas_id AND B.usu_id = E.usu_id AND A.cas_id ='.$id);



        $data = array();
        array_push($data,json_decode(json_encode($caso), true));

       
        
        echo json_encode($data);
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
        
        $new_estado = $request['new_estado'];

        DB::update('UPDATE TA_CASO set estcas_id = :status  where cas_id = :id',['status' => $new_estado,'id' => $id]);

        echo "update caso" . $id;
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
