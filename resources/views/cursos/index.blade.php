@extends('layouts.plantilla')
@section('title','Cursos')
@section('content')
<h1>Lista de Cursos:</h1>
<ul>
    <?php
    $cursos = [
        'Curso de inglés',
        'Curso de Laravel',
        'Curso de matemáticas',
    ];

    foreach ($cursos as $curso) {
        echo "<li>$curso</li>";
    }
    ?>
</ul>
@endsection
