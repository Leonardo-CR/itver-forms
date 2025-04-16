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
        

        Schema::create('administrador_carrera', function (Blueprint $table) {
            $table->id('cv_administrador_carrera');

            $table->unsignedBigInteger('cv_carrera');
            $table->foreign('cv_carrera')->references('cv_carrera')->on('carrera');

            $table->unsignedBigInteger('cv_administrador');
            $table->foreign('cv_administrador')->references('cv_administrador')->on('administrador');

        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrador_carrera');
    }
};
