@extends('layouts.plantilla')

@section('title', 'Finca '. $finca->nombre)

@section('content')
    <h1>Bienvenido a la finca {{ $finca->nombre }}</h1>
    <a href="{{route('fincas.index')}}">Volver a fincas</a>
    <br>
    <a href="{{route('fincas.edit', $finca)}}">Editar información de finca</a>
    <p><strong>Vereda: </strong>{{$finca->vereda}}</p>
    <p><strong>Municipio: </strong>{{$finca->municipio}}</p>
    <p><strong>Extension: </strong>{{$finca->extension}}</p>

@endsection