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
        $curso = new Curso();
        $curso -> name = "Laravel";
        $curso -> descripcion = "Framework de PHP";
        $curso -> categoria = "Desarrollo back end";
        $curso->save();

        $curso2 = new Curso();
        $curso2 -> name = "Java";
        $curso2 -> descripcion = "Mejor lenguaje";
        $curso2 -> categoria = "Desarrollo back end";
        $curso2 ->save();

        $curso3 = new Curso();
        $curso3 -> name = "C#";
        $curso3 -> descripcion = "Lenguaje bueno";
        $curso3 -> categoria = "Desarrollo back endd";
        $curso3->save();    }
}
