<?php

namespace Database\Factories;

use App\Models\TipoEncuesta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Encuesta>
 */
class EncuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cv_encuesta' => fake()->unique()->numberBetween(0, 99),
            'periodo' => fake()->word(),
            'is_active' => fake()->boolean(),
            'fecha_inicio' => fake()->dateTime(),
            'fecha_cierre' => fake()->dateTime(),
            'hora_inicio' => fake()->time(),
            'hora_cierre' => fake()->time(),
            'cv_tipo_encuesta' => TipoEncuesta::factory(),
        ];
    }
}