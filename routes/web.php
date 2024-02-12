<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Models\Curso;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Rutas*/

Route::get('/', HomeController::class);

Route::controller(CursoController::class)-> group(function () {

    Route::get('cursos','index')->name('cursos.index'); //Apunta a [clase,'metodo']
 
    //Ruta para formulario y tener curso 
    Route:: get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
});


//para dos variables con una opcional 
/*Route::get("cursos/{curso}/{categoria?}", function($curso,$categoria = null ){    
    if($categoria != null){
        return "Bienvenida al curso : $curso , de la categoria $categoria";
    }
    else{
        return "Bienvenida al curso : $curso";
    }
});*/
