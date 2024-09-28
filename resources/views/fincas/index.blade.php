@extends('layouts.plantilla')

@section('title', 'Fincas')

@section('content')
    <h1>Bienvenido a la página principal de fincas</h1>
    <a href="{{ route('fincas.create') }}">Crear finca</a>
    <ul>
        @foreach ($fincas as $finca)
            <li>
                <a href="{{ route('fincas.show', $finca->id) }}">{{ $finca->nombre }}</a>
            </li>
        @endforeach
    </ul>

    {{ $fincas->links() }}

@endsection