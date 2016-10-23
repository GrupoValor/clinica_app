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
      


        $casos =DB::select('SELECT A.cas_id,A.cas_fecate, E.usu_appate as "cliapp",B.cli_direcc,C.usu_nombre as "regnom",C.usu_appate as "regape",D.estcas_detalle, E.usu_nombre as "clinom" FROM TA_CASO A, TA_CLIENTE B, TA_USUARIO C, TA_ESTADOCASO D,TA_USUARIO E WHERE  A.cli_id = B.cli_id AND A.usu_id = C.usu_id AND A.estcas_id = D.estcas_id AND B.usu_id = E.usu_id');



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
  $caso = TaCaso::create([
                                       'usu_id' => '1',
                                       'cst_id' => '1',
                                       'cln_id' => '1',
                                       'cli_id' => '2',
                                       'tipcas_id' =>'1',
                                       'cas_estado' => '1',
                                       'cas_fecate' => '2016-10-21']);
        

        $caso->save();
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
