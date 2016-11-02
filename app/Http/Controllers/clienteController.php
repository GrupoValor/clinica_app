<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\TACLIENTE;

use App\Models\TAUSUARIO;

use Illuminate\Support\Facades\DB;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$clientes = TACLIENTE::all();
		
		$clientes =DB::select('SELECT * FROM TA_CLIENTE');

        $data = array();

        foreach ($clientes as $cliente) {
            //array_push($data,$cliente['attributes']);
			array_push($data,json_decode(json_encode($cliente), true));
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
        //creo el usuario
		$usuario = TAUSUARIO::create([
									  'cln_id' => '1',
									  'rol_id' => '1'
		]);
		$usuario->save();
		
		$casos =DB::select('SELECT MAX(usu_id) as id FROM TA_USUARIO');
		$data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $userid = $data[0]['id'];
		
		//creo el Cliente
		
		$cliente = TACLIENTE::create([								
									'usu_id' => $userid,
									'cli_nombre' => $request['cli_nombre'],
                                    'cli_genero' => $request['cli_genero'],
                                    'cli_fecnac' => $request['cli_fecnac'],
                                    'cli_numhij' => $request['cli_numhij'],
									'cli_nivedu' => $request['cli_nivedu'],
									'cli_nrodoc' => $request['cli_nrodoc'],
									'cli_ocupac' => $request['cli_ocupac'],
									'cli_direcc' => $request['cli_direcc'],
									'cli_telno1' => $request['cli_telno1'],
									'cli_telno2' => $request['cli_telno2'],
									'cli_correo' => $request['cli_correo'],
                                    ]);
		$cliente->save();
		
		$casos =DB::select('SELECT MAX(cli_id) as id FROM TA_CLIENTE');
		
		
		$data = array();
        array_push($data,json_decode(json_encode($casos[0]), true));
        $cliid = $data[0]['id'];
		echo $cliid;
		
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
