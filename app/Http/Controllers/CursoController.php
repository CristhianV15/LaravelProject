<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('Cursos.index'); 
    }

    public function create(){
        return view('Cursos.create'); 
    }

    public function show($curso){
        //Saca la informacion de la url -> almacenada en la variable y se concatena con el mensaje 
        //Forma para enviar la variable con el mismo nombre a la vista , enviar al costado de la vista
        //compact ('curso');
        return view('Cursos.show', ['curso'=>$curso]); //enviar variable
    }
}
