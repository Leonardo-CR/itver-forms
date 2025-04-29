<?php

namespace Database\Factories;

use App\Models\Seccion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pregunta>
 */
class PreguntaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => fake()->text(100),  
            'tipo' => fake()->randomElement(['cuantitativa', 'cualitativa']),
            'no' => fake()->numberBetween(1, 10),
            'cv_seccion' => Seccion::inRandomOrder()->first()->cv_seccion,
        ];
    }
}
