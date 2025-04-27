<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipoEncuesta>
 */
class TipoEncuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cv_tipo_encuesta' => fake()->unique()->numberBetween(0, 99),
            'nombre' => fake()->name(),
            'descripcion' => fake()->text(80),
        ];
    }
}
