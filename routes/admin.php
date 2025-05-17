<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AvisoController;
use App\Http\Controllers\admin\EgresadoController;
use App\Http\Controllers\admin\EncuestaController;

Route::resource('admin/avisos', AvisoController::class)->names('admin.avisos')->middleware(['auth', 'role:DBA|jefe_de_departamento']);
Route::resource('admin/egresados', EgresadoController::class)->names('admin.egresados')->middleware(['auth', 'role:DBA|jefe_de_departamento']);
Route::resource('admin/admins', AdminController::class)->names('admin.admins')->middleware(['auth', 'role:DBA']);
Route::resource('admin/encuestas', EncuestaController::class)->names('admin.encuestas')->middleware(['auth', 'role:DBA|jefe_de_departamento']);