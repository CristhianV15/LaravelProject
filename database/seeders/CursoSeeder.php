<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso:: factory(50)->create(); //Ejecutar el factory 
      /*  $curso = new Curso();
        $curso -> name = "Laravel";
        $curso -> descripcion = "Framework de PHP";
        $curso -> categoria = "Desarrollo back end";
        $curso->save();
    */
    }
}
