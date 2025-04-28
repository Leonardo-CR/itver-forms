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
        $dba = Role::create(['name' => 'admin', 'guard_name' => 'web',]);
        $jefe_de_departamento = Role::create(['name' => 'jefe_de_departamento', 'guard_name' => 'web',]);

        //Roles de usuario
        $egresado_quibio = Role::create(['name' => 'egresado_quibio', 'guard_name' => 'web',]);
        $egresado_general = Role::create(['name' => 'egresado_general', 'guard_name' => 'web',]);

        //Permisos administrador "AVISOS"
        Permission::create(['name' => 'admin.avisos.index', 'description' => 'Ver listado avisos']);
        Permission::create(['name' => 'admin.avisos.create', 'description' => 'Crear avisos']);
        Permission::create(['name' => 'admin.avisos.delete', 'description' => 'Eliminar avisos']);
        Permission::create(['name' => 'admin.avisos.edit', 'description' => 'Editar avisos']);

        //Permisos administrador "CARRERAS"
        Permission::create(['name' => 'admin.carreras.index', 'description' => 'Ver listado carreras']);
        Permission::create(['name' => 'admin.carreras.create', 'description' => 'Crear carreras']);
        Permission::create(['name' => 'admin.carreras.delete', 'description' => 'Eliminar carreras']);
        Permission::create(['name' => 'admin.carreras.edit', 'description' => 'Editar carreras']);

        //Permisos administrador "EGRESADOS"
         Permission::create(['name' => 'admin.egresados.index', 'description' => 'Ver listado egresados']);
         Permission::create(['name' => 'admin.egresados.create', 'description' => 'Crear egresados']);
         Permission::create(['name' => 'admin.egresados.delete', 'description' => 'Eliminar egresados']);
         Permission::create(['name' => 'admin.egresados.edit', 'description' => 'Editar egresados']);

        //Permisos administrador "JEFES DE DEPARTAMENTO"
         Permission::create(['name' => 'admin.admins.index', 'description' => 'Ver listado administradores']);
         Permission::create(['name' => 'admin.admins.create', 'description' => 'Crear administradores']);
         Permission::create(['name' => 'admin.admins.delete', 'description' => 'Eliminar administradores']);
         Permission::create(['name' => 'admin.admins.edit', 'description' => 'Editar administradores']);

         //Permisos administrador "Encuestas"
         Permission::create(['name' => 'admin.encuestas.index', 'description' => 'Ver listado encuestas']);
         Permission::create(['name' => 'admin.encuestas.create', 'description' => 'Crear encuestas']);
         Permission::create(['name' => 'admin.encuestas.delete', 'description' => 'Eliminar encuestas']);
         Permission::create(['name' => 'admin.encuestas.edit', 'description' => 'Editar encuestas']);


        //Permisos egresado "quibio"
        Permission::create(['name' => 'quibio.encuesta', 'description' => 'Ver encuesta quimica/bioquimica']);
        Permission::create(['name' => 'quibio.datos_personales', 'description' => 'Ver seccion datos personales']);
        Permission::create(['name' => 'quibio.situacion_laboral', 'description' => 'Ver seccion situacion laboral']);
        Permission::create(['name' => 'quibio.plan_estudios', 'description' => 'Ver seccion plan de estudios']);
        Permission::create(['name' => 'quibio.institucion', 'description' => 'Ver seccion institucion']);
        Permission::create(['name' => 'quibio.desempeno_laboral', 'description' => 'Ver seccion desempeno laboral']);

        //Permisos egresado "general"
        Permission::create(['name' => 'general.encuesta', 'description' => 'Ver encuesta general']);
        Permission::create(['name' => 'general.datos_personales', 'description' => 'Ver seccion datos personales']);
        Permission::create(['name' => 'general.pertinencia', 'description' => 'Ver seccion pertinencia']);
        Permission::create(['name' => 'general.ubicacion', 'description' => 'Ver seccion ubicacion laboral']);
        Permission::create(['name' => 'general.desempeno', 'description' => 'Ver seccion desempeno laboral']);
        Permission::create(['name' => 'general.expectativas', 'description' => 'Ver seccion expectativas de desarrollo']);
        Permission::create(['name' => 'general.participacion', 'description' => 'Ver seccion participacion social']);
        Permission::create(['name' => 'general.comentarios', 'description' => 'Ver seccion comentarios y sugerencias']);

        //Asignar permisos a roles

        // Permisos para el rol admin
        $dba->syncPermissions([ //syncPermissions es para asignar permisos a un rol eliminando los permisos que ya tiene asignados
            'admin.avisos.index',
            'admin.avisos.create',
            'admin.avisos.delete',
            'admin.avisos.edit',
            'admin.carreras.index',
            'admin.carreras.create',
            'admin.carreras.delete',
            'admin.carreras.edit',
            'admin.egresados.index',
            'admin.egresados.create',
            'admin.egresados.delete',
            'admin.egresados.edit',
            'admin.admins.index',
            'admin.admins.create',
            'admin.admins.delete',
            'admin.admins.edit',
            'admin.encuestas.index',
            'admin.encuestas.create',
            'admin.encuestas.delete',
            'admin.encuestas.edit',
        ]);

        // Permisos para el rol jefe de departamento
        $jefe_de_departamento->syncPermissions([
            'admin.avisos.index',
            'admin.avisos.create',
            'admin.avisos.edit',
            'admin.avisos.delete',
        ]);

        // Permisos para el egresado quibio
        $egresado_quibio->syncPermissions([
            'quibio.encuesta',
            'quibio.datos_personales',
            'quibio.situacion_laboral',
            'quibio.plan_estudios',
            'quibio.institucion',
            'quibio.desempeno_laboral',
        ]);

        // Permisos para el egresado general
        $egresado_general->syncPermissions([
            'general.encuesta',
            'general.datos_personales',
            'general.pertinencia',
            'general.ubicacion',
            'general.desempeno',
            'general.expectativas',
            'general.participacion',
            'general.comentarios',
        ]);



    }
}
