<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Curso::class; //Asignar al modelo 
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(), //Se llena con una oracion 
            'descripcion' => $this->faker->paragraph(), //Se llena con una parrafo
            'categoria' => $this ->faker->randomElement(['Desarrollo Front End','Desarrollo Back End','Base de datos','QA'])
        ];
    }
}
