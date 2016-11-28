<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Models\Encrypter;

class loginController extends Controller
{
	

	public function session(Request $request){
		
		if(!$request->session()->has('user'))
			return 0;
		else
			return 1;


	}

	public function user(Request $request){

		$data = $request->session()->get('user');
		
		echo json_encode($data);

	}

	public function logout(Request $request){
		$request->session()->forget('user');

	}

    public function login(Request $request)
    {


    $user = $request['user'];
    $password = $request['pass'];

    $log_type ="Inicio session ";
    $log ="Usuario : ";
    $log .= $user ;
   
    if (!isset($password))
    	$password = "";



    $result = DB::select("select usu_id , rol_id ,usu_passwd from TA_USUARIO where TA_USUARIO.usu_activo = '1' and TA_USUARIO.usu_usenam = '".$user."' ");

    
    $data = array();
    if (!isset($result[0])){
	    $log .= " Conexion : No existe el usuario" ;
    	DB::INSERT('insert into TA_LOG(log_tipo,log_text) values( "'.$log_type.'","'.$log.'")');
    	return 0;
		
	}
	else{
		array_push($data,json_decode(json_encode($result[0]), true));
		$data = $data[0];
		
	}

    if ($password != Encrypter::decrypt($data['usu_passwd'])){
    	$log .= " Conexion : Password incorrecto" ;
    	DB::INSERT('insert into TA_LOG(log_tipo,log_text) values( "'.$log_type.'","'.$log.'")');
    	return 0;
    }



    if (!isset($result[0])){
    	$log .= " Conexion : Usuario  incorrecto" ;
    	DB::INSERT('insert into TA_LOG(log_tipo,log_text) values( "'.$log_type.'","'.$log.'")');
    	return 0;
    }
	else{

		$log .= " Conexion : Exitosa " ; 

		$data = array();
		array_push($data,json_decode(json_encode($result[0]), true));
		$data = $data[0];
		
		$find = false;
		$usu_id = $data['usu_id'];
		$usu_rol = $data['rol_id'];
		$cln_id = $data['cln_id'];

		$log .= "-> Rol : ". $usu_rol;  
		$userdata = array();
		$userdata['rol'] = $usu_rol;
		$userdata['userid'] = $usu_id;
		$userdata['clinica'] = $cln_id;

		if ($usu_rol== "1" || $usu_rol== "2" || $usu_rol== "3"){
			$result = DB::select("select * from TA_ALUMNO where TA_ALUMNO.usu_id = '" .$usu_id."'");

			if (isset($result[0]))
			{
				$data = array();
				array_push($data,json_decode(json_encode($result[0]), true));
				$result = $data[0];
				$find = true;
				$userdata['voluntario'] = $result['alu_volunt'];
				$userdata['correo'] = $result['alu_correo'];
				$userdata['nombre'] = $result['alu_nombre'];
				$userdata['codigo'] = $result['alu_codpuc'];
				$userdata['documento'] = $result['alu_nrodoc'];
			}
			else
			{
				$log .= ",Data : No tiene registro en Tabla ALUMNO " ; 
			}

		}
		if (!$find && $usu_rol== "1" || $usu_rol== "4" || $usu_rol== "5"){
			
			$result = DB::select("select * from TA_EVALUADOR where TA_EVALUADOR.usu_id = '" .$usu_id."'");

			if (isset($result[0])){

				$data = array();
				array_push($data,json_decode(json_encode($result[0]), true));
				$result = $data[0];
				$find = true;
				$userdata['tipo'] = $result['eva_tipeva'];
				$userdata['correo'] = $result['eva_correo'];
				$userdata['nombre'] = $result['eva_nombre'];
				$userdata['codigo'] = $result['eva_codpuc'];
			}
			else
			{
				$log .= ",Data : No tiene registro en Tabla EVALUADOR " ; 
			}
		}

		if ($usu_rol== "6"){
			$find = true;
		}
		if ($usu_rol== "7"){
			$result = DB::select("select * from TA_CLIENTE where TA_CLIENTE.usu_id = '" .$usu_id."'");
			
			if (isset($result[0])){
				$data = array();
				array_push($data,json_decode(json_encode($result[0]), true));
				$result = $data[0];

				$find = true;
				$userdata['direccion'] = $result['cli_direcc'];
				$userdata['correo'] = $result['cli_correo'];
				$userdata['nombre'] = $result['cli_nombre'];
				$userdata['documento'] = $result['cli_nrodoc'];

			}
			else
			{

				$log .= ", Data : No tiene registro en Tabla CLIENTE " ; 

			}
		}


		DB::INSERT('insert into TA_LOG(log_tipo,log_text) values( "'.$log_type.'","'.$log.'")');
		if (!$find){
			return 0;
		}
     	$request->session()->put('user',$userdata);

     	

     	//echo var_dump($userdata);
		return 1;
     }



 
    	
    }
    
}
