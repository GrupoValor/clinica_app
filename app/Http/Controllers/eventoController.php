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
        if($request['eve_id'] == 'NO_ID') {
            $image = $request['file'];
            $to_directory = null;
            if ($image != 'null') {
                $path = public_path();
                $to_directory = $path . '/assets/images/eventos/';// . $image->getClientOriginalName();
                $image->move($to_directory, $image->getClientOriginalName());
                $to_directory = $to_directory . $image->getClientOriginalName();
            }
            //move_uploaded_file($_FILES['file']['tmp_name'], $to_directory);

            $evento = TAEVENTO::create(
                ['title' => $request['eve_titulo'],
                    'start' => $request['eve_fechaIn'],
                    'end' => $request['eve_fechaFin'],
                    'description' => $request['eve_descr'],
                    'image' => $to_directory,
                    'active' => $request['eve_activo'],
                    'link' => $request['eve_link'],
                    'visible' => 1,
                    'dateModify' => date('Y/m/d H:i:s'),
                ]);
            $evento->save();
            echo "Nuevo evento registrado";
        }else{
            //var_dump($request['file']);
            $image = $request['file'];
            $to_directory = null;
            //var_dump($image);
            if($image != 'null') {
                $path = public_path();
                $to_directory = $path . '/assets/images/eventos/';// . $image->getClientOriginalName();
                $image->move($to_directory, $image->getClientOriginalName());
                $to_directory = $to_directory.$image->getClientOriginalName();
            }

            //dd($request->all());
            DB::update('UPDATE TA_EVENTO set
            title = :titulo ,
            start = :fecha_ini ,
            end = :fecha_fin ,
            description = :descrip ,
            image = :imag ,
            active = :act,
            link = :ruta,
            dateModify = :modi
            where id = :id_eve',
                ['titulo' => $request['eve_titulo'],
                    'fecha_ini' => $request['eve_fechaIn'],
                    'fecha_fin' => $request['eve_fechaFin'],
                    'descrip' => $request['eve_descr'],
                    'imag' => $to_directory,
                    'act' => $request['eve_activo'],
                    'ruta' => $request['eve_link'],
                    'modi' => date('Y/m/d H:i:s'),
                    'id_eve' => $request['eve_id']]);

            echo "Registro actualizado correctamente" ;
        }
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
        /*$image = $request['file'];
        $to_directory = null;
        var_dump($image);
        if($image != null) {
            var_dump($image);
            $path = public_path();
            $to_directory = $path . '/assets/images/eventos/';// . $image->getClientOriginalName();
            $image->move($to_directory, $image->getClientOriginalName());
            $to_directory = $to_directory.$image->getClientOriginalName();
        }

        //dd($request->all());
        DB::update('UPDATE TA_EVENTO set
            title = :titulo ,
            start = :fecha_ini ,
            end = :fecha_fin ,
            description = :descrip ,
            image = :imag ,
            active = :act,
            link = :ruta,
            dateModify = :modi
            where id = :id_eve',
            ['titulo' => $request['eve_titulo'],
                'fecha_ini' => $request['eve_fechaIn'],
                'fecha_fin' => $request['eve_fechaFin'],
                'descrip' => $request['eve_descr'],
                'imag' => $to_directory,
                'act' => $request['eve_activo'],
                'ruta' => $request['eve_link'],
                'modi' => date('Y/m/d H:i:s'),
                'id_eve' => $id]);
*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::update('UPDATE TA_EVENTO set
            visible = :flag
            where id = :id_eve',
            ['flag' => 0, 'id_eve' => $id]);
        echo "Registro eliminado correctamente" ;
        /*
        DB::delete('DELETE FROM TA_EVENTO 
            where id = :id_eve',
            ['id_eve' => $id]);
        echo "Registro eliminado correctamente" ;
        */
    }
}
