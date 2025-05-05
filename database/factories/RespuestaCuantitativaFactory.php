<?php

namespace Database\Factories;

use App\Models\Egresado;
use App\Models\Pregunta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RespuestaCuantitativa>
 */
class RespuestaCuantitativaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'valor' => fake()->randomElement(['1', '2', '3', '4']),
            'no_control' => Egresado::inRandomOrder()->first()->no_control,
            'cv_pregunta' => Pregunta::inRandomOrder()->first()->cv_pregunta,
        ];
    }
}
