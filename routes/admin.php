<?php
//En este archivo estan las para el modo administrador 

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AvisoController;
use App\Http\Controllers\admin\EgresadoController;
use App\Http\Controllers\admin\EncuestaController;
use App\Http\Controllers\admin\SeccionController;
use App\Imports\AvisosImport;
use Illuminate\Http\Request;

Route::resource('admin/avisos', AvisoController::class)->names('admin.avisos');
Route::resource('admin/egresados', EgresadoController::class)->names('admin.egresados')->middleware(['auth', 'role:dba|jefe_de_departamento']);
Route::resource('admin/admins', AdminController::class)->names('admin.admins')->middleware(['auth', 'role:dba']);
Route::resource('admin/encuestas', EncuestaController::class)->names('admin.encuestas')->middleware(['auth', 'role:dba|jefe_de_departamento']);