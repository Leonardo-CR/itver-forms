<?php

namespace Database\Factories;

use App\Models\Encuesta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seccion>
 */
class SeccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nombre' => fake()->word(),
                'descripcion' => fake()->text(100),  
                'cv_encuesta' => Encuesta::inRandomOrder()->first()->cv_encuesta,
        ];
    }
}
