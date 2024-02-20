@extends('layouts.plantilla')

@section('tittle' , 'Crear cursos')

@section('content')
<h1>Pagina para crear cursos </h1>
  
    <form action="  {{route('cursos.store')}}" method="POST">
       <!--Token que genera campo hidden para validar formulario -->
       @csrf 
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
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection