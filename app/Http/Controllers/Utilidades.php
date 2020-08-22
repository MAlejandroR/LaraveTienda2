<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Str;


class Utilidades extends Controller
{
    //
    public function rellena_imagenes(){
        $nombres_productos = Producto::all();
        foreach ($nombres_productos as $producto) {

            $cod = $producto["cod"];
            $nombre = $producto["nombre_corto"];
            echo "<h3>$nombre</h3>";
            $imagen = Str::words(Str::lower($nombre),3,"");

            $imagen=Str::replaceArray(" ",["_","_"],$imagen.".jpeg");
            Producto::where('cod',$cod)
               ->update(['imagen' => $imagen]);
        }


    }
}
