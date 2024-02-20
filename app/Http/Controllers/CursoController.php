<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        //Recuperar datos de bd para mostrar 
        $cursos = Curso::orderBy('id','desc')->paginate();
        //return $cursos; para probar envio a vista
        return view('Cursos.index', compact('cursos')); 
    }

    public function create(){
        return view('Cursos.create'); 
    }

    public function show(Curso $curso){
        //Saca la informacion de la url -> almacenada en la variable y se concatena con el mensaje 
        //Forma para enviar la variable con el mismo nombre a la vista , enviar al costado de la vista
        //compact ('curso');

        //Buscar el curso con el id
     //   $curso = Curso::find($curso);
        //return $cursos;
        return view('Cursos.show', ['curso'=>$curso]); //enviar variable
    }

    public function edit(Curso $curso){
        //$curso = Curso::find($id); //una forma de recuperar datos con el id
        
        return view('Cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        //return $request->all();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso->id);

    }
    public function store(Request $request ){
        //Nueva instancia del curso 
        $curso = new Curso();
        //asignar valores de request a la instancia de curso 
        $curso ->name = $request->name;
        $curso -> descripcion = $request->descripcion;
        $curso -> categoria = $request ->categoria;

        //return $curso; //probar datos recibidos en nueva instancia 
        //Guardar el nuevo curso en bd
        $curso-> save();
        // return $request->all(); //para mostrar todos los datos almacenados en request en vista

        //redireccionar
        return redirect()->route('cursos.show', $curso->id);
    }
}
