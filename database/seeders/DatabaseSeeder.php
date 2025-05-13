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
        $this->call(RoleSeeder::class);

        Carrera::insert([
            ['codigo' => 'QUIMI', 'nombre' => 'Ing.Química'],
            ['codigo' => 'BIOQI', 'nombre' => 'Ing.Bioquímica'],
            ['codigo' => 'ELECT', 'nombre' => 'Ing.Electronica'],
            ['codigo' => 'MECAT', 'nombre' => 'Ing.Mecatronica'],
            ['codigo' => 'INDUS', 'nombre' => 'Ing.Industrial'],
            ['codigo' => 'GESEM', 'nombre' => 'Ing.Gestion Empresarial'],
            ['codigo' => 'ELECA', 'nombre' => 'Ing.Electrica'],
            ['codigo' => 'ADMIN', 'nombre' => 'Lic.Administración'],
            ['codigo' => 'ENREN', 'nombre' => 'Ing.Energias Renovables']
        ]);

        $dba = User::create([
            'name' => 'Leo DBA',
            'email' => 'adminDBA@itverforms.com',            
            'password' => Hash::make('Leonardo2004'),
            'cv_carrera' => 1,
            'tipo' => 'DBA'
        ]);        
        $dba->assignRole('DBA');
        $dba->save(); // Para generar el c
        $dba->carreras()->attach([1, 2, 3]);

        $dba = User::create([
            'name' => 'aaroin DBA',
            'email' => 'aaron@itverforms.com',            
            'password' => Hash::make('Leonardo2004'),
            'cv_carrera' => 1,
            'tipo' => 'DBA'
        ]);        
        $dba->assignRole('DBA');
        $dba->save(); // Para generar el c
        $dba->carreras()->attach([6]);

        $dba = User::create([
            'name' => 'valeriachi',
            'email' => 'valeriachoi@itverforms.com',            
            'password' => Hash::make('Leonardo2004'),
            'cv_carrera' => 1,
            'tipo' => 'Jefe de Departamento'
        ]);        
        $dba->assignRole('jefe_de_departamento');
        $dba->save(); // Para generar el c
        $dba->carreras()->attach([6,2,1,7]);
        
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