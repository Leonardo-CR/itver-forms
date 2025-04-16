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
        

        Schema::create('registro_creacion', function (Blueprint $table) {
            $table->id('cv_registro_creacion');
            $table->date('fecha');
            $table->time('hora');

            //Llaves Foraneas 
            $table->unsignedBigInteger('cv_administrador');
            $table->foreign('cv_administrador')->references('cv_administrador')->on('administrador');

            $table->unsignedBigInteger('cv_encuesta');
            $table->foreign('cv_encuesta')->references('cv_encuesta')->on('encuesta');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_creacion');
    }
};
