@extends('layouts.plantilla')

@section('tittle' , 'Editar Curso')

@section('content')
<h1>Editar curso  </h1>
  
    <form action="  {{route('cursos.update',$curso)}}" method="POST">
       <!--Token que genera campo hidden para validar formulario -->
       @csrf 
       <!--DIRECTIVA para que reconozca el put-->
       @method('put')
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="" value="{{$curso->name}}">            
        </label>
        <br>    
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5" >{{$curso->descripcion}}</textarea>
        </label>
        <br>    

        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">Actualizar datos</button>
    </form>
@endsection