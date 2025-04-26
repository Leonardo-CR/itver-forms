<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cv_administrador' => fake()->unique()->numberBetween(0, 99),
            'nombre' => fake()->name(),
            'correo' => fake()->email(),
            'password' => bcrypt('12345678'),
            'tipo' => fake()->randomElement(['DBA', 'Jefe de Departamento']),
        ];
    }
}
