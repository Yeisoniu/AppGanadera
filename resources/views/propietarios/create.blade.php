@extends('layouts.plantilla')

@section('title', 'Propietarios create')

@section('content')
    <h1>En esta página podrás crear un propietario</h1>

    <form action="{{ route('propietarios.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>

        <br>
        <label>
            Apellido:
            <br>
            <input type="text" name="apellido">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection