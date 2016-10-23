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
