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
            <input type="text" name="name" value="{{old('name')}}" id="">            
        </label>

       <!--Para validar los campos se usa el atributo de name -->  
        @error('name') 
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>    
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5" >{{old('descripcion')}}</textarea>
        </label>
        <br>    
        @error('descripcion') 
        <br>
        <span>*{{$message}}</span>
        <br>
        @enderror
        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria" value={{old('categoria')}}>
        </label>
        @error('categoria') 
        <br>
        <span>*{{$message}}</span>
        <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection