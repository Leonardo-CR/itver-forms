<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Egresado>
 */
class EgresadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'no_control' => fake()->unique()->numerify('###########'),
            'nombre' => fake()->name(),
            'app' => fake()->lastName(),
            'apm' => fake()->lastName(),
            'correo' => fake()->unique()->safeEmail(),
            'password' => bcrypt(fake()->password()),
            'cv_carrera' => Carrera::inRandomOrder()->first()->cv_carrera,
        ];
    }
}