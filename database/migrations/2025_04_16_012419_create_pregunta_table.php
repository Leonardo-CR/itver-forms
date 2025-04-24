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
        

        Schema::create('pregunta', function (Blueprint $table) {
            $table->id('cv_pregunta');
            $table->tinyText('descripcion');
            $table->enum('tipo', ['cuantitativa', 'cualitativa']);
            $table->unsignedBigInteger('no');

            $table->unsignedBigInteger('cv_seccion');
            $table->foreign('cv_seccion')->references('cv_seccion')->on('seccion');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregunta');
    }
};
