@extends('layouts.plantilla')

@section('title', 'Fincas create')

@section('content')
    <h1>En esta página podrás crear una finca</h1>

    <form action="{{ route('fincas.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>

        <br>
        <label>
            Vereda:
            <br>
            <input type="text" name="vereda">
        </label>

        <br>
        <label>
            Municipio:
            <br>
            <input type="text" name="municipio">
        </label>

        <br>
        <label>
            Extension:
            <br>
            <input type="number" name="extension">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection