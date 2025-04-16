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
        Schema::disableForeignKeyConstraints();

        Schema::create('seccion', function (Blueprint $table) {
            $table->id('cv_seccion');
            
            $table->string('nombre');
            $table->string('descripcion');

            $table->unsignedBigInteger('cv_encuesta');
            $table->foreign('cv_encuesta')->references('cv_encuesta')->on('encuesta');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seccion');
    }
};
