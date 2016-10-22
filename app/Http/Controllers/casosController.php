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
      

        $casos = DB::table('TA_CASO')
            ->join('TA_ESTADOCASO', 'TA_CASO.tipcas_id', '=', 'TA_ESTADOCASO.tipcas_id')
            ->select('TA_CASO.cas_id','TA_CASO.cas_estado','TA_CASO.cas_fecate','TA_ESTADOCASO.tipcas_detalle')
            ->get();


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
