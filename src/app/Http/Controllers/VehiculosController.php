<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();

        return view('listarVehiculos', [
            'vehiculos' => $vehiculos
        ]);
    }
}
