<?php


use App\Http\Controllers\Controller;


class Login extends Controller
{


    public function acceso(Request $datos){
        if ($datos->submit=="registrarse")
            $this->redirectTo("registro");
    }
}
