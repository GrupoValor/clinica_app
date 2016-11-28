<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class logController extends Controller
{
	

	public function get(Request $request){
		
		$data = $request->session()->get('user');

		if($data["rol"]=="1"){
			$result = DB::select("Select id,log_date,log_text from TA_LOG");
			$data = array();

			
			array_push($data,json_decode(json_encode($result), true));
				
			echo json_encode($data);

			
		}
		else
		{
			echo "<img src = 'http://i.imgur.com/zugsAYb.gif' />";
		}
	}

}

