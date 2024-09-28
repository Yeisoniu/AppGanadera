@extends('layouts.plantilla')
@section('title','Propietarios edit')
@section('content')
    <h1>En esta pagina puedes editar un propietario</h1>
    <form action="{{ route('propietarios.update',$propietario)}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <br >
            <textarea name="nombre" rows="1">{{$propietario->nombre}}</textarea>
        </label>

        <br>
        <label>
            apellido:
            <br>
            <textarea name="apellido" rows="1">{{$propietario->apellido}}</textarea>
        </label>
       <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection