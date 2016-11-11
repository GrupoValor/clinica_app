<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\TACONTACTO;

use Illuminate\Support\Facades\DB;

class directorioController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contacts = TACONTACTO::all();
        $data = array();

        foreach ($contacts as $contact) {
            array_push($data,$contact['attributes']);
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
      

        $contact = TACONTACTO::create(['cln_id' => '1',
                                       'con_tipcon' => $request['con_tipcon'],
                                       'con_nombre' => $request['con_nombre'],
                                       'con_nrotel' => $request['con_nrotel'],
                                       'con_direcc' => $request['con_direcc'],
                                       'con_dirweb' => $request['con_dirweb'],
                                       'con_correo' => $request['con_correo']
                                       
                                       ]);
        

        $contact->save();
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


        DB::update('UPDATE TA_CONTACTO set 
            con_tipcon = :tipcon ,
            con_nombre = :nombre ,
            con_nrotel = :nrotel ,
            con_direcc = :direcc ,
            con_dirweb = :dirweb ,
            con_correo = :correo 


            where con_id = :id',
            ['tipcon' => $request['con_tipcon'],
            'nombre' => $request['con_nombre'],
            'nrotel' => $request['con_nrotel'],
            'direcc' => $request['con_direcc'],
            'dirweb' => $request['con_dirweb'],
            'correo' => $request['con_correo'],
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
        DB::delete('DELETE FROM TA_CONTACTO 
            where con_id = :id',
            ['id' => $id]);
        echo "Registro eliminado correctamente" ;
    }
}
