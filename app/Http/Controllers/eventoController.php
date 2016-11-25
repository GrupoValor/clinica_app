<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TAEVENTO;

use Illuminate\Support\Facades\DB;

class eventoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = TAEVENTO::all();
        $data = array();

        foreach ($eventos as $evento){
            array_push($data,json_decode(json_encode($evento), true));
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
        //var_dump($_POST);
        /*$to_directory = './assets/images/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $to_directory);
*/
        $encoded_image = null;
        if(!emptyArray($_FILES))
            $encoded_image= base64_encode($_FILES['file']['tmp_name']);


        $evento = TAEVENTO::create([
          'title' => $_POST['eve_titulo'],
          'start' => $_POST['eve_fechaIn'],
          'end' => $_POST['eve_fechaFin'],
          'description' => $_POST['eve_descr'],
          'image' => $encoded_image,//$to_directory,
          'active' => $_POST['eve_activo'],
          'link' => $_POST['eve_link']
        ]);
        $evento->save();

       /* $id_evento =DB::select('SELECT MAX(id) as id FROM ta_evento');
        $data = array();
        array_push($data,json_decode(json_encode($id_evento[0]), true));
        $eve_id = $data[0]['id'];
        var_dump($image);
        DB::update("UPDATE ta_evento SET image='$image' WHERE id='$eve_id'");*/

        echo "Nuevo evento registrado";
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
        $encoded_image = null;
        if(!emptyArray($_FILES))
            $encoded_image= base64_encode($_FILES['file']['tmp_name']);

        DB::update('UPDATE TA_EVENTO set
            title = :titulo ,
            start = :fecha_ini ,
            end = :fecha_fin ,
            description = :descrip ,
            image = :imag ,
            active = :act,
            link = :ruta
            where id = :id_eve',
            ['titulo' => $request['eve_titulo'],
                'fecha_ini' => $request['eve_fechaIn'],
                'fecha_fin' => $request['eve_fechaFin'],
                'descrip' => $request['eve_descr'],
                'imag' => $encoded_image,
                'act' => $request['eve_activo'],
                'ruta' => $request['eve_link'],
                'id_eve' => $id]);

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
        DB::delete('DELETE FROM TA_EVENTO 
            where id = :id_eve',
            ['id_eve' => $id]);
        echo "Registro eliminado correctamente" ;
    }
}
