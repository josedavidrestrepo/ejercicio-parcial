@extends('app')

@section('title', 'Inicio')

@section('content')
    @if(isset($valido) && $valido)
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="nav-link" href="{{ route('registrarVehiculos') }}">
                    {{'Registrar vehículos'}}
                </a>
                <a class="nav-link" href="{{ route('listarVehiculos') }}">
                    {{'Listar vehículos'}}
                </a>
                <a class="nav-link" href="{{ route('estadisticasVehiculos') }}">
                    {{'Estadísticas vehículos'}}
                </a>
            </div>
        </nav>
    @else
        <h1 class="text-center text-danger">Zona Prohibida</h1>
    @endif
@endsection
