<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\TACONTACTO;

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
        echo "estoy en el create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $contact = TACONTACTO::create(['cln_id' => $request['cln_id'],
                                       'usu_id' => $request['usu_id'],
                                       'con_imagen' => 'contacto.jpg',
                                       'con_tipcon' => $request['con_tipcon'],
                                       'con_nombre' => ($request['con_nombre'].$request['con_apell']),
                                       'con_correo' => $request['con_correo'],
                                       'con_nrotel' => $request['con_nrotel'],
                                       'con_descri' => $request['con_descri']]);
        

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
