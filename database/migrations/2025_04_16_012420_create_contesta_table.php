<?php
//Aqui de maneja cuando termina el uusuario de contestar la encuesta
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
        

        Schema::create('contesta', function (Blueprint $table) {
            $table->id('cv_contesta');

            //Foraneas
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('cv_encuesta');
            $table->foreign('cv_encuesta')->references('cv_encuesta')->on('encuesta');

            $table->boolean('completed');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contesta');
    }
};
