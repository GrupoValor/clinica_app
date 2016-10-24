<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\TaCaso;
use Illuminate\Support\Facades\DB;

class casosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      


        $casos =DB::select('SELECT A.cas_id, A.cas_fecate, 
                    CONCAT(E.usu_nombre," ",E.usu_appate) as "cli_nombre",
                    A.cas_objact,
                    CONCAT(C.usu_nombre," ",C.usu_appate) as "res_nombre",
                    D.estcas_detalle
                    FROM TA_CASO A, TA_CLIENTE B, TA_USUARIO C, TA_ESTADOCASO D,TA_USUARIO E 
                    WHERE 
                    A.cli_id = B.cli_id AND A.usu_id = C.usu_id AND
                    A.estcas_id = D.estcas_id AND B.usu_id = E.usu_id ');



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
        
/*
    $caso = TaCaso::create([
                                       'usu_id' => '1',
                                       'cst_id' => '1',
                                       'cln_id' => '1',
                                       'cli_id' => '2',
                                       'tipcas_id' =>'1',
                                       'cas_estado' => 'Administra',
                                       'cas_fecate' => '2016-10-21',
                                       'cas_observ'=> $request['observacion'],
                                        'cas_object'=> $request['objetivo']]);
        

        $caso->save();
*/
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
