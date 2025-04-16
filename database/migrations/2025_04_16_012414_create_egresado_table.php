<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        

        Schema::create('egresado', function (Blueprint $table) {
            $table->char('no_control',11)->primary(); //Ejemplo 22020879 ó L22020879
            $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->string('correo')->unique();
            $table->string('password');

            $table->unsignedBigInteger('cv_carrera');
            $table->foreign('cv_carrera')->references('cv_carrera')->on('carrera');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresado');
    }
};
