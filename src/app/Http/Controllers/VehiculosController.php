<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculosController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();

        return view('listarVehiculos', [
            'vehiculos' => $vehiculos
        ]);
    }

    public function stats()
    {
        $vehiculos = Vehiculo::select('marca', DB::raw('count(*) as total'))
            ->groupBy('marca')
            ->get();

        return view('estadisticasVehiculos', [
            'vehiculos' => $vehiculos
        ]);
    }
}
