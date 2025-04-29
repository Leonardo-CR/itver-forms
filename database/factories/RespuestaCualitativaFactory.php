<?php

namespace Database\Factories;

use App\Models\Egresado;
use App\Models\Pregunta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RespuestaCualitativa>
 */
class RespuestaCualitativaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'valor' => fake()->randomElement(['si', 'no', 'tal vez', 'no sé']),
            'no_control' => Egresado::inRandomOrder()->first()->no_control,
            'cv_pregunta' => Pregunta::inRandomOrder()->first()->cv_pregunta,
        ];
    }
}
