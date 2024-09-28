@extends('layouts.plantilla')

@section('title', 'Propietarios ' . $propietario->nombre)

@section('content')
    <h1>Bienvenido al propietario {{ $propietario->nombre }}</h1>
    <a href="{{ route('propietarios.index') }}">Volver a propietarios</a>
    <br>
    <a href="{{ route('propietarios.edit', $propietario) }}">Editar información de propietario</a>
    <p><strong>id: </strong>{{$propietario->id }}</p>
    <p><strong>Nombre: </strong>{{ $propietario->nombre }}</p>
    <p><strong>Apellido: </strong>{{ $propietario->apellido }}</p>
@endsection