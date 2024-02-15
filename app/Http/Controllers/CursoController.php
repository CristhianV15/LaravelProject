<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        //Recuperar datos de bd para mostrar 
        $cursos = Curso::paginate();
        //return $cursos; para probar envio a vista
        return view('Cursos.index', compact('cursos')); 
    }

    public function create(){
        return view('Cursos.create'); 
    }

    public function show($id){
        //Saca la informacion de la url -> almacenada en la variable y se concatena con el mensaje 
        //Forma para enviar la variable con el mismo nombre a la vista , enviar al costado de la vista
        //compact ('curso');

        //Buscar el curso con el id
        $curso = Curso::find($id);
        //return $cursos;
        return view('Cursos.show', ['curso'=>$curso]); //enviar variable
    }
}
