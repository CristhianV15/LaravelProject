<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //PARA EL CRUD 

class HomeController extends Controller
{
    //Metodo
    public function __invoke(){ //Solo para una sola ruta 
        //return view('welcome');
        return view('home');
    }
}
