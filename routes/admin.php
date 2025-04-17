<?php
//En este archivo estan las para el modo administrador 

use App\Http\Controllers\admin\AvisoController;
use App\Http\Controllers\egresado\AvisosController;
use App\Http\Controllers\egresado\EgresadoController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::resource('admin/avisos', AvisoController::class)->names('admin.avisos')->middleware('auth');