@extends('app')

@section('title', 'Estadísticas Vehículos')

@section('content')
    @isset($vehiculos)
        <h1 class="text-center m-5">Estadísticas</h1>
        @foreach($vehiculos as $vehiculo)
            <p>
                <strong>Marca: </strong>{{$vehiculo['marca']}}
                <strong>Total: </strong>{{$vehiculo['total']}}
            </p>
        @endforeach
    @endisset
@endsection
