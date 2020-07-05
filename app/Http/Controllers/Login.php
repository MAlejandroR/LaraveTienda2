<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    public function acceso(Request $datos){
        if ($datos->submit=="registrarse")
            return redirect("register");
    }
}
