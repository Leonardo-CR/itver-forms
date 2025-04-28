<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Aviso;
use App\Models\Carrera;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Egresado;
use App\Models\Encuesta;
use App\Models\TipoEncuesta;

use function Pest\Laravel\call;

use Illuminate\Database\Seeder;
use Illuminate\Validation\Rules\Can;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {        
        

        Aviso::factory(20)->create();
        Admin::factory(20)->create();
        Carrera::factory(20)->create();
        Egresado::factory(20)->create();
        TipoEncuesta::factory(3)->create();
        Encuesta::factory(5)->create();

        User::factory()->create([
            'name' => 'Leo Rosas',
            'email' => 'leo@leo.com',
            'cv_carrera' => Carrera::inRandomOrder()->first()->cv_carrera,
            'password' => bcrypt('12345'),
        ]);
    }
}