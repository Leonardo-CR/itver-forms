<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckIfUserIsActive;
use App\Http\Controllers\admin\GraficasController;
use App\Http\Controllers\egresado\QuiBioController;
use App\Http\Controllers\egresado\PerfilEgresadoController;

//Rutas Egresado quimica y bioquimica
Route::post('/quibio/store', [QuiBioController::class, 'store'])->name('quibio.store')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio', CheckIfUserIsActive::class]);//Esta ruta registra las respuestas

//Rutas datos personales
Route::get('/quibio/encuesta', [QuiBioController::class, 'encuesta'])->name('quibio.encuesta')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio', CheckIfUserIsActive::class]);
Route::get('/quibio/datos-personales', [PerfilEgresadoController::class, 'index2'])->name('quibio.datos_personales')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio', CheckIfUserIsActive::class]);
Route::post('/quibio/datos-personales/guardarDatosGenerales', [PerfilEgresadoController::class, 'guardarDatosGenerales'])->name('quibio.datos_personales.guardarDatosGenerales')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio', CheckIfUserIsActive::class]);
Route::get('/quibio/situacion-laboral', [QuiBioController::class, 'situacion_laboral'])->name('quibio.situacion_laboral')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio', CheckIfUserIsActive::class]);
Route::get('/quibio/plan-de-estudios', [QuiBioController::class, 'plan_estudios'])->name('quibio.plan_estudios')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio', CheckIfUserIsActive::class]);
Route::get('/quibio/institucion', [QuiBioController::class, 'institucion'])->name('quibio.institucion')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio', CheckIfUserIsActive::class]);
Route::get('/quibio/desempeno-laboral', [QuiBioController::class, 'desempeno_laboral'])->name('quibio.desempeno_laboral')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio', CheckIfUserIsActive::class]);

Route::get('admin/quibio/{encuesta}/graficas',[GraficasController::class, 'reporte_quibio'])->name('admin.quibio.graficas')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

require __DIR__.'/auth.php';