<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

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
    if (!isset($password))
    	$password = "";

    $result = DB::select("select rol_id,alu_nombre,alu_correo,alu_volunt,alu_codpuc,usu_passwd,alu_nrodoc from TA_USUARIO inner join TA_ALUMNO on TA_USUARIO.usu_id = TA_ALUMNO.usu_id where TA_ALUMNO.alu_codpuc = '".$user."' and TA_USUARIO.usu_passwd = '" .$password."'");
    if (!isset($result[0]))
    	return 0;
	else{
    	$data = array();
		array_push($data,json_decode(json_encode($result[0]), true));
		$user = $data[0];
     
     	$request->session()->put('user',$user);
		return 1;
     }



 
    	
    }
    
}
