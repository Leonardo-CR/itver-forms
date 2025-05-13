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
        Schema::create('user_carrera', function (Blueprint $table) {
            $table->id('cv_user_carrera');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('cv_carrera');

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cv_carrera')->references('cv_carrera')->on('carrera')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_carrera');
    }
};