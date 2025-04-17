<?php
//En este archivo estan las rutas de la encuesta general

use App\Http\Controllers\egresado\AvisosController;
use App\Http\Controllers\egresado\EgresadoController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

//ruta avisos
Route::get('/avisos', [AvisosController::class, 'avisos'])->name('avisos');
//ruta encuesta
Route::get('/general/encuesta', [EgresadoController::class, 'encuesta'])->name('egresado.encuesta');
//Rutas Egresado general

//Rutas datos personales
Route::get('/general/datos-personales', [EgresadoController::class, 'datospersonales'])->name('general.datos_personales');

//Pertinencia
Route::get('/general/pertinencia', [EgresadoController::class, 'pertinencia'])->name('general.pertinencia');

Route::get('/general/ubicacion-laboral', [EgresadoController::class, 'ubicacion'])->name('general.ubicacion');

Route::get('/general/desempeno-laboral', [EgresadoController::class, 'desempeno'])->name('general.desempeno');

Route::get('/general/expectativas-desarrollo', [EgresadoController::class, 'expectativas'])->name('general.expectativas');

Route::get('/general/participacion-social', [EgresadoController::class, 'participacion'])->name('general.participacion');

Route::get('/general/comentarios-sugerencias', [EgresadoController::class, 'comentarios_sugerencias'])->name('general.comentarios');



require __DIR__.'/auth.php';