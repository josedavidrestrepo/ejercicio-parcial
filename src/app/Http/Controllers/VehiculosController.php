<?php

namespace App\Http\Controllers;

use App\Usuario;
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

    public function create()
    {
        return view('registrarVehiculo');
    }

    public function store(Request $request)
    {
        $marcas = array("Toyota", "Chevrolet", "Mazda");

        $validData = $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'marca' => 'required',
            'placa' => 'required',
        ]);

        if (!in_array($validData['marca'], $marcas)) {
            return redirect(route('registrarVehiculos'))
                ->withErrors(['La marca no es válida']);
        }

        $persona = new Usuario;
        $persona->cedula = $validData['cedula'];
        $persona->nombre = $validData['nombre'];

        $vehiculo = new Vehiculo;
        $vehiculo->marca = $validData['marca'];
        $vehiculo->placa = $validData['placa'];
        $vehiculo->cedula_persona = $validData['cedula'];

        $persona->save();
        $vehiculo->save();

        return redirect(route('registrarVehiculos'))
            ->with('mensaje', 'Persona y vehículo registrados correctamente');
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
