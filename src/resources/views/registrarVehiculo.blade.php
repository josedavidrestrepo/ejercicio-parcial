@extends('app')

@section('title', 'Registrar Vehículos')

@section('content')
    <h1 class="text-center m-5">Registrar Vehículo</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{session('mensaje')}}
        </div>
    @endif
    <form method="post" action="{{route('almacenarVehiculos')}}">
        @csrf
        <h3>Persona</h3>
        <div class="form-group">
            <label for="cedula">Cédula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese la cédula"
                   value="{{old('cedula')}}">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre"
                   value="{{old('nombre')}}">
        </div>
        <h3>Vehículo</h3>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca"
                   value="{{old('marca')}}">
        </div>
        <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" class="form-control" id="placa" name="placa" placeholder="Ingrese la placa"
                   value="{{old('placa')}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
