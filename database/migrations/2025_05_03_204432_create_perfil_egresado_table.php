<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('perfiles_egresado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('ap_paterno')->nullable();
            $table->string('ap_materno')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->enum('sexo', ['Masculino', 'Femenino'])->nullable();
            $table->string('curp', 18)->nullable();
            $table->string('estado')->nullable();
            $table->string('municipio')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('colonia')->nullable();
            $table->string('cp', 10)->nullable();
            $table->string('calle')->nullable();
            $table->string('no')->nullable();
            $table->unsignedBigInteger('cv_carrera'); // Relacionado con tabla 'carreras'
            $table->string('especialidad')->nullable();
            $table->string('mes_egreso')->nullable();
            $table->year('anio_ingreso')->nullable();
            $table->year('anio_egreso')->nullable();
            $table->string('lada_celular')->nullable();
            $table->string('tel_celular', 10)->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('lada_casa_paterna')->nullable();
            $table->string('tel_casa_paterna', 10)->nullable();
            $table->string('correo')->nullable();
            $table->string('red_social')->nullable();
            $table->string('no_control')->nullable();
            $table->boolean('titulado')->nullable();
            $table->integer('dominio_ingles')->nullable();
            $table->text('manejo_paquetes')->nullable();
            $table->string('obstaculo')->nullable();
            $table->text('explicate')->nullable();
            $table->boolean('relacion')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cv_carrera')->references('cv_carrera')->on('carrera');;
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perfiles_egresados');
    }
};