<?php
//En este archivo estan las rutas de la encuesta general

use App\Http\Controllers\admin\GraficasController;
use App\Http\Controllers\admin\IndicadoresController;
use App\Http\Controllers\egresado\AvisosController;
use App\Http\Controllers\egresado\EgresadosController;
use App\Http\Controllers\egresado\GeneralController;
use App\Http\Controllers\egresado\PerfilEgresadoController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

//ruta avisos
Route::get('/avisos', [AvisosController::class, 'avisos'])
    ->name('avisos')
    ->middleware(['auth', 'role:dba|egresado_quibio|egresado_general']);

//ruta encuesta
Route::get('/general/encuesta', [EgresadosController::class, 'encuesta'])->name('egresado.encuesta')->middleware(['auth', 'role:dba|egresado_general']);
//Rutas Egresado general

//Rutas datos personales
Route::get('/general/datos-personales', [PerfilEgresadoController::class, 'index'])->name('general.datos_personales')->middleware(['auth', 'role:dba|egresado_general']);

Route::post('/general/datos-personales/guardarDatosGenerales', [PerfilEgresadoController::class, 'guardarDatosGenerales'])->name('general.datos_personales.guardarDatosGenerales');

//Route::post('/guardar-datos-generales', [PerfilEgresadoController::class, 'guardarDatosGenerales'])->name('general.guardar');

//Pertinencia
Route::get('/general/pertinencia', [EgresadosController::class, 'pertinencia'])->name('general.pertinencia')->middleware(['auth', 'role:dba|egresado_general']);

Route::get('/general/ubicacion-laboral', [EgresadosController::class, 'ubicacion'])->name('general.ubicacion')->middleware(['auth', 'role:dba|egresado_general']);

Route::get('/general/desempeno-laboral', [EgresadosController::class, 'desempeno'])->name('general.desempeno')->middleware(['auth', 'role:dba|egresado_general']);

Route::get('/general/expectativas-desarrollo', [EgresadosController::class, 'expectativas'])->name('general.expectativas')->middleware(['auth', 'role:dba|egresado_general']);

Route::get('/general/participacion-social', [EgresadosController::class, 'participacion'])->name('general.participacion')->middleware(['auth', 'role:dba|egresado_general']);

Route::get('/general/comentarios-sugerencias', [EgresadosController::class, 'comentarios_sugerencias'])->name('general.comentarios')->middleware(['auth', 'role:dba|egresado_general']);

Route::post('/general/store', [GeneralController::class, 'store'])->name('general.store');//Esta ruta registra las respuestas de la encuesta GENERAL

Route::get('admin/general/{encuesta}/graficas',[GraficasController::class, 'reporte_generales'])->name('admin.general.graficas')->middleware(['auth', 'role:dba|jefe_de_departamento']);

Route::get('admin/general/{encuesta}/indicadores',[IndicadoresController::class, 'indicadores_general'])->name('admin.general.indicadores')->middleware(['auth', 'role:dba|jefe_de_departamento']);

// Rutas para apartado de perfil egresado
//Route::post('egresado/perfil/register', [PerfilEgresadoController::class, 'guardarDatosGenerales'])->name('egresado.perfil.register'); //registra los datos generales del egresado
//Route::get('egresado/perfil', [PerfilEgresadoController::class, 'datospersonales'])->name('egresado.perfil.mostrar'); //muestra el perfil del egresado



require __DIR__.'/auth.php';