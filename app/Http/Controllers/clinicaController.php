<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\TACLINICA;

use Illuminate\Support\Facades\DB;

class clinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$clinicas = TACLINICA::all();

        $clinicas =DB::select('SELECT * FROM TA_CLINICA WHERE TA_CLINICA.cln_activo = "1"');
        $data = array();

        foreach ($clinicas as $clinica){
            array_push($data,json_decode(json_encode($clinica), true));
        }
        /*
        foreach ($clinicas as $clinica) {
            array_push($data,$clinica['attributes']);
        }*/

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
        $clinica = TACLINICA::create(['cln_nombre' => $request['cln_nombre'],
            'cln_telefono' => $request['cln_telefono'],
            'cln_email' => $request['cln_email'],
            'cln_urlfbk' => $request['cln_urlfbk'],
            'cln_urltwi' => $request['cln_urltwi'],
            'cln_urlgoo' => $request['cln_urlgoo'],
            'cln_descri' => $request['cln_descri'],
            'cln_direcc' => $request['cln_direcc'],
            'cln_mision' => $request['cln_mision'],
            'cln_vision' => $request['cln_vision'],
            'cln_prof' => $request['cln_prof'],
            'cln_activo' => '1'
        ]);
        $clinica->save();
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
        //$new_estado = $request['new_estado'];

        DB::update('UPDATE TA_CLINICA set 
            cln_nombre = :nombre ,
            cln_telefono = :telefono ,
            cln_email = :email ,
            cln_urlfbk = :urlfbk ,
            cln_urltwi = :urltwi ,
            cln_urlgoo = :urlgoo,
            cln_descri = :descri,
            cln_direcc = :direcc,
            cln_mision = :mision,
            cln_vision = :vision,
            cln_prof = :prof,
            cln_activo = :activo where cln_id = :id',
            ['nombre' => $request['cln_nombre'],
                'telefono' => $request['cln_telefono'],
                'email' => $request['cln_email'],
                'urlfbk' => $request['cln_urlfbk'],
                'urltwi' => $request['cln_urltwi'],
                'urlgoo' => $request['cln_urlgoo'],
                'descri' => $request['cln_descri'],
                'direcc' => $request['cln_direcc'],
                'mision' => $request['cln_mision'],
                'vision' => $request['cln_vision'],
                'prof' => $request['cln_prof'],
                'activo' => $request['cln_activo'],
                'id' => $id]);
        // print_r($request );
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

    }
}
