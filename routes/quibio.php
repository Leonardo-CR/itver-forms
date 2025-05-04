<?php
//En este archivo estan las rutas de la encuesta quimica/bioquimica
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\GraficasController;
use App\Http\Controllers\egresado\QuiBioController;
use App\Http\Controllers\egresado\egresadosController;
use App\Http\Controllers\egresado\PerfilEgresadoController;

//Rutas Egresado quimica y bioquimica

Route::post('/quibio/store', [QuiBioController::class, 'store'])->name('quibio.store');//Esta ruta registra las respuestas

//Rutas datos personales
Route::get('/quibio/encuesta', [QuiBioController::class, 'encuesta'])->name('quibio.encuesta');
//1
Route::get('/quibio/datos-personales', [PerfilEgresadoController::class, 'index2'])->name('quibio.datos_personales');
Route::post('/quibio/datos-personales/guardarDatosGenerales', [PerfilEgresadoController::class, 'guardarDatosGenerales'])->name('quibio.datos_personales.guardarDatosGenerales');
//2
Route::get('/quibio/situacion-laboral', [QuiBioController::class, 'situacion_laboral'])->name('quibio.situacion_laboral');
//3
Route::get('/quibio/plan-de-estudios', [QuiBioController::class, 'plan_estudios'])->name('quibio.plan_estudios');
//4
Route::get('/quibio/institucion', [QuiBioController::class, 'institucion'])->name('quibio.institucion');
//5
Route::get('/quibio/desempeno-laboral', [QuiBioController::class, 'desempeno_laboral'])->name('quibio.desempeno_laboral');
Route::get('admin/quibio/{encuesta}/graficas',[GraficasController::class, 'reporte_quibio'])->name('admin.quibio.graficas');

require __DIR__.'/auth.php';