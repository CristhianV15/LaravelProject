@extends('layouts.plantilla')

@section('tittle','Index')
@section('content')
<h1> Bienvenido a la pagina de cursos </h1> 
<a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul> 
        @foreach ($cursos as $curso)
            <li> {{$curso->name}} </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection