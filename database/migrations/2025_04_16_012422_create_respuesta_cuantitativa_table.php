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
       

        Schema::create('respuesta_cuantitativa', function (Blueprint $table) {
            $table->id('cv_respuesta_cuantitativa');

            $table->tinyInteger('valor');

            //Foraneas
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('cv_pregunta');
            $table->foreign('cv_pregunta')->references('cv_pregunta')->on('pregunta');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuesta_cuantitativa');
    }
};
