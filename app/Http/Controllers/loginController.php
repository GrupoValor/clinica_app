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

    $result = DB::select("select rol_id,alu_nombre,alu_correo,alu_volunt,alu_codpuc,usu_passwd,alu_nrodoc from ta_usuario inner join ta_alumno on ta_usuario.usu_id = ta_alumno.usu_id where ta_alumno.alu_codpuc =  '".$user."' and ta_usuario.usu_passwd = '" .$password."'");
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
