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
        

        Schema::create('administrador', function (Blueprint $table) {
            $table->id('cv_administrador');
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('password');
            $table->enum('tipo', ["DBA" , "Jefe de Departamento"]);
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrador');
    }
};
