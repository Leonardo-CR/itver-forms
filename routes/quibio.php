<?php
//En este archivo estan las rutas de la encuesta quimica/bioquimica
use App\Http\Controllers\egresado\egresadoController;
use App\Http\Controllers\egresado\QuiBioController;


use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

//Rutas Egresado quimica y bioquimica

//Rutas datos personales
Route::get('/quibio/encuesta', [QuiBioController::class, 'encuesta'])->name('quibio.encuesta');
//1
Route::get('/quibio/datos-personales', [QuiBioController::class, 'datos_personales'])->name('quibio.datos_personales');
 
//2
Route::get('/quibio/situacion-laboral', [QuiBioController::class, 'situacion_laboral'])->name('quibio.situacion_laboral');
//3
Route::get('/quibio/plan-de-estudios', [QuiBioController::class, 'plan_estudios'])->name('quibio.plan_estudios');
//4
Route::get('/quibio/institucion', [QuiBioController::class, 'institucion'])->name('quibio.institucion');
//5
Route::get('/quibio/desempeno-laboral', [QuiBioController::class, 'desempeno_laboral'])->name('quibio.desempeno_laboral');



require __DIR__.'/auth.php';