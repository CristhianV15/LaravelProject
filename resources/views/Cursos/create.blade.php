@extends('layouts.plantilla')

@section('tittle' , 'Crear cursos')

@section('content')
<h1>Pagina para crear cursos </h1>

    <form action="">
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="">            
        </label>
        <br>    
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>    

        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria">
        </label>
    </form>
@endsection