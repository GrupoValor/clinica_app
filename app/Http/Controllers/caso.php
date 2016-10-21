<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function store(Request $request) {
        $contact = TACASO::create([ 'cas_id' => $request['cas_id'],
                                    'usu_id' => $request['usu_id'],
                                    'cst_id' => $request['cst_id'],
                                    'cln_id' => $request['cln_id'],
                                    'cli_id' => $request['cli_id'],
                                    'tipcas_id' => $request['tipcas_id'],
                                    'cas_estado' => $request['cas_estado'],
                                    'cas_fecate' => $request['cas_fecate']
        ]);
        $contact->save();
        echo "Ingresado";
    }

    public function update(Request $request, $id) {
        //TODO
    }

}