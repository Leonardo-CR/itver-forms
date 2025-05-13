<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roles de administrador
        $dba = Role::create(['name' => 'DBA', 'guard_name' => 'web',]);
        $jefe_de_departamento = Role::create(['name' => 'jefe_de_departamento', 'guard_name' => 'web',]);

        //Roles de usuario
        $egresado_quibio = Role::create(['name' => 'egresado_quibio', 'guard_name' => 'web',]);
        $egresado_general = Role::create(['name' => 'egresado_general', 'guard_name' => 'web',]);

        //Permisos administrador "AVISOS"
        Permission::create(['name' => 'admin.avisos.index', 'description' => 'Ver listado avisos'])->syncRoles([$dba, $jefe_de_departamento]);
        Permission::create(['name' => 'admin.avisos.create', 'description' => 'Crear avisos'])->syncRoles([$dba, $jefe_de_departamento]);
        Permission::create(['name' => 'admin.avisos.delete', 'description' => 'Eliminar avisos'])->syncRoles([$dba, $jefe_de_departamento]);
        Permission::create(['name' => 'admin.avisos.edit', 'description' => 'Editar avisos'])->syncRoles([$dba, $jefe_de_departamento]);

        //Permisos administrador "CARRERAS"
        Permission::create(['name' => 'admin.carreras.index', 'description' => 'Ver listado carreras'])->syncRoles([$dba]);
        Permission::create(['name' => 'admin.carreras.create', 'description' => 'Crear carreras'])->syncRoles([$dba]);
        Permission::create(['name' => 'admin.carreras.delete', 'description' => 'Eliminar carreras'])->syncRoles([$dba]);
        Permission::create(['name' => 'admin.carreras.edit', 'description' => 'Editar carreras'])->syncRoles([$dba]);

        //Permisos administrador "EGRESADOS"
         Permission::create(['name' => 'admin.egresados.index', 'description' => 'Ver listado egresados'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.egresados.create', 'description' => 'Crear egresados'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.egresados.delete', 'description' => 'Eliminar egresados'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.egresados.edit', 'description' => 'Editar egresados'])->syncRoles([$dba]);

        //Permisos administrador "JEFES DE DEPARTAMENTO"
         Permission::create(['name' => 'admin.admins.index', 'description' => 'Ver listado administradores'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.admins.create', 'description' => 'Crear administradores'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.admins.delete', 'description' => 'Eliminar administradores'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.admins.edit', 'description' => 'Editar administradores'])->syncRoles([$dba]);

         //Permisos administrador "Encuestas"
         Permission::create(['name' => 'admin.encuestas.index', 'description' => 'Ver listado encuestas'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.encuestas.create', 'description' => 'Crear encuestas'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.encuestas.delete', 'description' => 'Eliminar encuestas'])->syncRoles([$dba]);
         Permission::create(['name' => 'admin.encuestas.edit', 'description' => 'Editar encuestas'])->syncRoles([$dba]);


        //Permisos egresado "quibio"
        Permission::create(['name' => 'quibio.encuesta', 'description' => 'Ver encuesta quimica/bioquimica'])->syncRoles([$egresado_quibio]);
        Permission::create(['name' => 'quibio.datos_personales', 'description' => 'Ver seccion datos personales'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'quibio.situacion_laboral', 'description' => 'Ver seccion situacion laboral'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'quibio.plan_estudios', 'description' => 'Ver seccion plan de estudios'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'quibio.institucion', 'description' => 'Ver seccion institucion'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'quibio.desempeno_laboral', 'description' => 'Ver seccion desempeno laboral'])->syncRoles([$egresado_quibio]);;

        //Permisos egresado "general"
        Permission::create(['name' => 'general.encuesta', 'description' => 'Ver encuesta general'])->syncRoles([$egresado_general]);;
        Permission::create(['name' => 'general.datos_personales', 'description' => 'Ver seccion datos personales'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'general.pertinencia', 'description' => 'Ver seccion pertinencia'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'general.ubicacion', 'description' => 'Ver seccion ubicacion laboral'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'general.desempeno', 'description' => 'Ver seccion desempeno laboral'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'general.expectativas', 'description' => 'Ver seccion expectativas de desarrollo'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'general.participacion', 'description' => 'Ver seccion participacion social'])->syncRoles([$egresado_quibio]);;
        Permission::create(['name' => 'general.comentarios', 'description' => 'Ver seccion comentarios y sugerencias'])->syncRoles([$egresado_quibio]);;

        //Asignar permisos a roles

        // Permisos para el rol admin
    //     $dba->syncPermissions([ //syncPermissions es para asignar permisos a un rol eliminando los permisos que ya tiene asignados
    //         'admin.avisos.index',
    //         'admin.avisos.create',
    //         'admin.avisos.delete',
    //         'admin.avisos.edit',
    //         'admin.carreras.index',
    //         'admin.carreras.create',
    //         'admin.carreras.delete',
    //         'admin.carreras.edit',
    //         'admin.egresados.index',
    //         'admin.egresados.create',
    //         'admin.egresados.delete',
    //         'admin.egresados.edit',
    //         'admin.admins.index',
    //         'admin.admins.create',
    //         'admin.admins.delete',
    //         'admin.admins.edit',
    //         'admin.encuestas.index',
    //         'admin.encuestas.create',
    //         'admin.encuestas.delete',
    //         'admin.encuestas.edit',
    //     ]);

    //     // Permisos para el rol jefe de departamento
    //     $jefe_de_departamento->syncPermissions([
    //         'admin.avisos.index',
    //         'admin.avisos.create',
    //         'admin.avisos.edit',
    //         'admin.avisos.delete',
    //     ]);

    //     // Permisos para el egresado quibio
    //     $egresado_quibio->syncPermissions([
    //         'quibio.encuesta',
    //         'quibio.datos_personales',
    //         'quibio.situacion_laboral',
    //         'quibio.plan_estudios',
    //         'quibio.institucion',
    //         'quibio.desempeno_laboral',
    //     ]);

    //     // Permisos para el egresado general
    //     $egresado_general->syncPermissions([
    //         'general.encuesta',
    //         'general.datos_personales',
    //         'general.pertinencia',
    //         'general.ubicacion',
    //         'general.desempeno',
    //         'general.expectativas',
    //         'general.participacion',
    //         'general.comentarios',
    //     ]);



    // }
    }
}
