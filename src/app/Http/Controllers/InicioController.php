<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio($codigo)
    {
        if ($codigo == "A765")
        {
            $valido = true;
        }
        else
        {
            $valido = false;
        }

        return view('inicio', [
           'valido' => $valido
        ]);
    }
}
