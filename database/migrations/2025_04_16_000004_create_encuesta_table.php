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
        Schema::create('encuesta', function (Blueprint $table) {
            $table->id('cv_encuesta');
            $table->char('periodo', 12); //Ejemplo ENE-JUN-2025
            $table->boolean('is_active');
            $table->date('fecha_inicio');
            $table->date('fecha_cierre');
            $table->time('hora_inicio');
            $table->time('hora_cierre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuesta');
    }
};
