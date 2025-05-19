<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AvisoController;
use App\Http\Controllers\admin\EgresadoController;
use App\Http\Controllers\admin\EncuestaController;
use App\Http\Middleware\CheckIfUserIsActive;

Route::resource('admin/avisos', AvisoController::class)->names('admin.avisos')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);
Route::resource('admin/egresados', EgresadoController::class)->names('admin.egresados')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);
Route::resource('admin/admins', AdminController::class)->names('admin.admins')->middleware(['auth', 'role:DBA', CheckIfUserIsActive::class]);
Route::resource('admin/encuestas', EncuestaController::class)->names('admin.encuestas')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);