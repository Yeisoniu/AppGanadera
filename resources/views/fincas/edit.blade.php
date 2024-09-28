@extends('layouts.plantilla')

@section('title', 'Fincas edit')

@section('content')
    <h1>En esta página podrás editar una finca</h1>

    <form action="{{ route('fincas.update', $finca) }}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Nombre:
            <br>
            <textarea name="nombre" rows="1">{{ $finca->nombre }}</textarea>
        </label>

        <br>
        <label>
            Vereda:
            <br>
            <textarea name="vereda" rows="1">{{ $finca->vereda}}</textarea>
        </label>

        <br>
        <label>
            Municipio:
            <br>
            <textarea name="municipio" rows="1">{{ $finca->municipio}}</textarea>
        </label>

        <br>
        <label>
            Extension:
            <br>
            <input type="number" name="extension" step="0.01" value={{ $finca->extension }}>
        </label>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection