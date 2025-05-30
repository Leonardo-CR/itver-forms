<?php
use Livewire\Volt\Volt;
use Illuminate\Http\Request;
use App\Exports\AvisosExport;
use App\Imports\AvisosImport;
use App\Exports\EgresadoExport;
use App\Exports\EncuestaExport;
use App\Imports\EgresadoImport;
use App\Imports\EncuestaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuiBioController;
use App\Exports\RespuestaCualitativaExport;
use App\Http\Middleware\CheckIfUserIsActive;
use App\Http\Controllers\admin\AvisoController;
use App\Http\Controllers\admin\SeccionController;
use App\Http\Controllers\admin\EncuestaController;
use App\Http\Controllers\egresado\EgresadosController;



Route::get('/', function () {
    return view('welcome');
})->name('home');

    ////////////////////////////////////////////////////////////////// Importaciones y expotaciones 
////////Avisos
Route::get('admin/avisos/exportar', function () {
    return Excel::download(new AvisosExport, 'avisos.xlsx');
})->name('admin.avisos.exportar')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

Route::post('admin/avisos/importar', function (Request $request) {
    $request->validate([
        'archivo' => 'required|file|mimes:xlsx',
    ]);

    Excel::import(new AvisosImport, $request->file('archivo'));

    return redirect()->back()->with('success', 'Avisos importados correctamente.');
})->name('admin.avisos.importar')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

/////////// Egresados
Route::get('admin/egresados/exportar', function () {
    return Excel::download(new EgresadoExport, 'egresados.xlsx');
})->name('admin.egresados.exportar')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

Route::post('admin/egresados/importar', function (Request $request) {
    $request->validate([
        'archivo' => 'required|file|mimes:xlsx',
    ]);

    Excel::import(new EgresadoImport, $request->file('archivo'));

    return redirect()->back()->with('success', 'Egresados importados correctamente.');
})->name('admin.egresados.importar')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

/////////// Encuestas


Route::get('admin/encuestas/exportar', function () {
    return Excel::download(new EncuestaExport, 'encuestas.xlsx');
})->name('admin.encuestas.exportar')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

Route::post('admin/encuestas/importar', function (Request $request) {
    $request->validate([
        'archivo' => 'required|file|mimes:xlsx',
    ]);

    Excel::import(new EncuestaImport, $request->file('archivo'));

    return redirect()->back()->with('success', 'Encuestas importadas correctamente.');
})->name('admin.encuestas.importar')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

// Respuesta Cualitativa Export
Route::get('admin/encuestas/{encuesta}/respuestas-cualitativas/exportar', function ($encuesta) {
    return Excel::download(new RespuestaCualitativaExport($encuesta), 'respuestas_cualitativas_'.$encuesta.'.xlsx');
})->name('admin.encuestas.respuestas_cualitativas.exportar')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

Route::post('/admin/respuestas-cualitativas/import', [EncuestaController::class, 'import'])
    ->name('admin.respuestas_cualitativas.import');

    //////////////////////////////////////////////////////////////////////////////Rutas Egresado 

Route::get('/bienvenida', [EgresadosController::class, 'bienvenida'])->name('egresado.bienvenida')->middleware('auth', CheckIfUserIsActive::class);

Route::get('/instrucciones', [EgresadosController::class, 'instrucciones'])->name('egresado.instrucciones')->middleware('auth', CheckIfUserIsActive::class);



//Rutas Egresado  Fin

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', CheckIfUserIsActive::class])
    ->name('dashboard');

Route::redirect('/dashboard', '/bienvenida')->middleware('auth');

Route::middleware(['auth', CheckIfUserIsActive::class])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

//Rutas para ver las grafiacas
Route::get('admin/secciones/{encuesta}', [SeccionController::class, 'index'])->name('admin.secciones.index')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);
Route::get('admin/secciones/graficas/{seccion}', [SeccionController::class, 'graficas'])->name('admin.secciones.graficas')->middleware(['auth', 'role:DBA|jefe_de_departamento', CheckIfUserIsActive::class]);

require __DIR__.'/auth.php';
require __DIR__.'/general.php';
require __DIR__.'/quibio.php';
require __DIR__.'/admin.php';
require __DIR__.'/export_import.php';