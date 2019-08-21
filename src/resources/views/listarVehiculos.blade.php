@extends('app')

@section('title', 'Listar Vehículos')

@section('content')
    @isset($vehiculos)
        <h1 class="text-center m-5">Vehículos</h1>
        @foreach($vehiculos as $vehiculo)
            <div class="card">
                <div class="card-body">
                    <p>
                        <strong>Placa:</strong>
                        <span @if($vehiculo->marca == "Toyota") class="text-danger font-weight-bold" @endif>
                            {{$vehiculo->placa}}
                        </span>
                    </p>
                    <p>
                        <strong>Marca:</strong>
                        {{$vehiculo->marca}}
                        @if($vehiculo->marca == "Mazda")
                            <span class="text-success">Los de Mazda son los mejores</span>
                        @endif
                    </p>
                </div>
            </div>
        @endforeach
    @endisset
@endsection
