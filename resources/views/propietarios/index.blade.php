@extends('layouts.plantilla')

@section('title', 'Propietarios')

@section('content')
    <h1>Bienvenido a la página principal de Propietarios</h1>
    <a href="{{ route('propietarios.create') }}">Crear propietario</a>
    <ul>
        @foreach ($propietarios as $propietario)
            <li>
                <a href="{{ route('propietarios.show', $propietario->id) }}">{{ $propietario->nombre }}</a>
            </li>
        @endforeach
    </ul>

    {{ $propietarios->links() }}
    
@endsection