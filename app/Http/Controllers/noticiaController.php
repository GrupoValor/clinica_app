<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TANOTICIA;
use Illuminate\Support\Facades\DB;
class noticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos =DB::select('SELECT * FROM TA_NOTICIA WHERE TA_NOTICIA.not_visible = 1');
        $data = array();
        foreach ($eventos as $evento){
            array_push($data,json_decode(json_encode($evento), true));
        }
        //var_dump($data);
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
        if($request['not_id'] == 'NO_ID') {
            $image = $request['not_imagen'];
            $to_directory = null;
            if ($image != 'null') {
                $path = public_path();
                $to_directory = '/assets/images/noticias/';// . $image->getClientOriginalName();
                $image->move($path.$to_directory, $image->getClientOriginalName());
                $to_directory = $to_directory . $image->getClientOriginalName();
            }
            //move_uploaded_file($_FILES['file']['tmp_name'], $to_directory);
            $evento = TANOTICIA::create(
                ['not_titulo' => $request['not_titulo'],
                    'not_autor' => $request['not_autor'],
                    'not_fecha' => $request['not_fecha'],
                    'not_descr' => $request['not_descr'],
                    'not_imagen' => $to_directory,
                    'not_linkNoticia' => $request['not_link'],
                    'not_enweb' => $request['not_enweb'],
                    'not_enpanel' => $request['not_enpanel'],
                    'not_visible' => 1,
                    'not_dateModify' => date('Y/m/d H:i:s'),
                ]);
            $evento->save();
            $casos =DB::select('SELECT MAX(not_id) as id FROM TA_NOTICIA');
            $data = array();
            array_push($data,json_decode(json_encode($casos[0]), true));
            $jpid = $data[0]['id'];
            echo $jpid;
        }else{
            $image = $request['not_imagen'];
            $to_directory = null;
            if($image != 'null') {
                $path = public_path();
                $to_directory = '/assets/images/eventos/';// . $image->getClientOriginalName();
                $image->move($path.$to_directory, $image->getClientOriginalName());
                $to_directory = $to_directory.$image->getClientOriginalName();
                DB::update('UPDATE TA_NOTICIA set
            not_titulo = :titulo ,
            not_autor = :autor ,
            not_fecha = :fecha ,
            not_descr = :descrip ,
            not_imagen = :imag ,
            not_linkNoticia = :link,
            not_enweb = :web,
            not_enpanel = :panel,
            not_dateModify = :modi
            where not_id = :id_not',
                    ['titulo' => $request['not_titulo'],
                        'autor' => $request['not_autor'],
                        'fecha' => $request['not_fecha'],
                        'descrip' => $request['not_descr'],
                        'imag' => $to_directory,
                        'link' => $request['not_link'],
                        'web' => $request['not_enweb'],
                        'panel' => $request['not_enpanel'],
                        'modi' => date('Y/m/d H:i:s'),
                        'id_not' => $request['not_id']]);
            }else{
                DB::update('UPDATE TA_NOTICIA set
            not_titulo = :titulo ,
            not_autor = :autor ,
            not_fecha = :fecha ,
            not_descr = :descrip ,
            not_linkNoticia = :link,
            not_enweb = :web,
            not_enpanel = :panel,
            not_dateModify = :modi
            where not_id = :id_not',
                    ['titulo' => $request['not_titulo'],
                        'autor' => $request['not_autor'],
                        'fecha' => $request['not_fecha'],
                        'descrip' => $request['not_descr'],
                        'link' => $request['not_link'],
                        'web' => $request['not_enweb'],
                        'panel' => $request['not_enpanel'],
                        'modi' => date('Y/m/d H:i:s'),
                        'id_not' => $request['not_id']]);

            }


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
        DB::update('UPDATE TA_NOTICIA set
            not_visible = :flag,
            not_dateModify= :modi
            where not_id = :id',
            ['flag' => 0,
                'id' => $id,
                'modi' => date('Y/m/d H:i:s')
            ]);
        echo "Registro eliminado correctamente" ;
        /*
        DB::delete('DELETE FROM TA_EVENTO 
            where id = :id_eve',
            ['id_eve' => $id]);
        echo "Registro eliminado correctamente" ;
        */
    }
}