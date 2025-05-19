<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckIfUserIsActive;
use App\Http\Controllers\admin\EncuestaController;
use App\Http\Controllers\admin\GraficasController;
use App\Http\Controllers\egresado\AvisosController;
use App\Http\Controllers\egresado\GeneralController;
use App\Http\Controllers\admin\IndicadoresController;
use App\Http\Controllers\egresado\EgresadosController;
use App\Http\Controllers\egresado\PerfilEgresadoController;

// Ruta avisos
Route::get('/avisos', [AvisosController::class, 'avisos'])
    ->name('avisos')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_quibio|egresado_general', CheckIfUserIsActive::class]);

// Ruta ver secciones de la encuesta
Route::get('/general/encuesta', [EgresadosController::class, 'encuesta'])->name('egresado.encuesta')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);

// Rutas de la encuesta
Route::get('/general/datos-personales', [PerfilEgresadoController::class, 'index'])->name('general.datos_personales')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);
Route::post('/general/datos-personales/guardarDatosGenerales', [PerfilEgresadoController::class, 'guardarDatosGenerales'])->name('general.datos_personales.guardarDatosGenerales')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);
Route::get('/general/pertinencia', [EgresadosController::class, 'pertinencia'])->name('general.pertinencia')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);
Route::get('/general/ubicacion-laboral', [EgresadosController::class, 'ubicacion'])->name('general.ubicacion')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);
Route::get('/general/desempeno-laboral', [EgresadosController::class, 'desempeno'])->name('general.desempeno')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);
Route::get('/general/expectativas-desarrollo', [EgresadosController::class, 'expectativas'])->name('general.expectativas')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);
Route::get('/general/participacion-social', [EgresadosController::class, 'participacion'])->name('general.participacion')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);
Route::get('/general/comentarios-sugerencias', [EgresadosController::class, 'comentarios_sugerencias'])->name('general.comentarios')->middleware(['auth', 'role:DBA|jefe_de_departamento|egresado_general', CheckIfUserIsActive::class]);

// Guardar respuestas de la encuesta
Route::post('/general/store', [GeneralController::class, 'store'])->name('general.store'); //Esta ruta registra las respuestas de la encuesta GENERAL

// Rutas de admin para encuestas general
Route::get('admin/general/{encuesta}/graficas',[GraficasController::class, 'reporte_generales'])->name('admin.general.graficas')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);
Route::get('admin/general/{encuesta}/indicadores',[IndicadoresController::class, 'indicadores_general'])->name('admin.general.indicadores')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);
Route::get('admin/general/{encuesta}/respuestas',[EncuestaController::class, 'show'])->name('admin.general.respuestas')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);
Route::get('admin/general/respuestas/{encuesta}/{pregunta}/respuestasDetalle',[EncuestaController::class, 'respuestasDetalle'])->name('admin.general.respuestasDetalle')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

    



Route::get('/graficas-generales', [GraficasController::class, 'reporte_generales_n'])->name('graficas.reporte_generales_n');

Route::get('/graficas-quibios', [GraficasController::class, 'reporte_quibio_n'])->name('graficas.reporte_quibio_n');


require __DIR__.'/auth.php';