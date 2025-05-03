<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('perfiles_egresado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->date('fecha_nacimiento');
            $table->enum('sexo', ['Masculino', 'Femenino']);
            $table->string('curp', 18);
            $table->string('estado');
            $table->string('municipio');
            $table->string('ciudad');
            $table->string('colonia');
            $table->string('cp', 10);
            $table->string('calle');
            $table->string('numero');
            $table->string('cv_carrera'); // Relacionado con tabla 'carreras'
            $table->string('especialidad')->nullable();
            $table->string('mes_egreso');
            $table->year('anio_egreso');
            $table->string('tel_celular', 15)->nullable();
            $table->timestamps();

            $table->foreign('cv_carrera')->references('cv_carrera')->on('carreras')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perfiles_egresados');
    }
};