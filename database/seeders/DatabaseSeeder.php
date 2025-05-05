<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Aviso;
use App\Models\Carrera;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Seccion;
use App\Models\Egresado;
use App\Models\Encuesta;
use App\Models\Pregunta;
use App\Models\TipoEncuesta;
use function Pest\Laravel\call;
use Illuminate\Database\Seeder;

use Database\Seeders\RoleSeeder;

use App\Models\RespuestaCualitativa;
use Illuminate\Validation\Rules\Can;
use App\Models\RespuestaCuantitativa;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {        
        // Ejecutamos el seeder de roles
        $this->call(RoleSeeder::class);

        // Crear el usuario y asignarle el rol 'dba'
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'admin@itverforms.com',
            'cv_carrera'=> 1,
            'password' => Hash::make('Leonardo2004'), // Usa una contraseña segura
        ]);

        // Asignar el rol al usuario
        $user->assignRole('dba');

        /*
        Aviso::factory(20)->create();
        Admin::factory(20)->create();
        Carrera::factory(20)->create();
        Egresado::factory(20)->create();
        TipoEncuesta::factory(3)->create();
        Encuesta::factory(2)->create();
        Seccion::factory(10)->create();
        Pregunta::factory(20)->create();
        RespuestaCuantitativa::factory(1000)->create();
        RespuestaCualitativa::factory(1000)->create();
        
        User::factory()->create([
             'name' => 'Leo Rosas',
             'email' => 'leo@leo.com',
             'cv_carrera' => Carrera::inRandomOrder()->first()->cv_carrera,
             'password' => bcrypt('12345'),
        ]);
        */
    }
}