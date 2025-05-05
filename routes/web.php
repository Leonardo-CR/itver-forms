<?php
use Livewire\Volt\Volt;
use Illuminate\Http\Request;
use App\Exports\AvisosExport;
use App\Imports\AvisosImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuiBioController;
use App\Http\Controllers\admin\AvisoController;
use App\Http\Controllers\admin\SeccionController;
use App\Http\Controllers\egresado\egresadosController;

Route::get('admin/avisos/exportar', function () {
    return Excel::download(new AvisosExport, 'avisos.xlsx');
})->name('admin.avisos.exportar')->middleware(['auth', 'role:dba|jefe_de_departamento']);

Route::post('admin/avisos/importar', function (Request $request) {
    $request->validate([
        'archivo' => 'required|file|mimes:xlsx',
    ]);

    Excel::import(new AvisosImport, $request->file('archivo'));

    return redirect()->back()->with('success', 'Avisos importados correctamente.');
})->name('admin.avisos.importar')->middleware(['auth', 'role:dba|jefe_de_departamento']);



Route::get('/', function () {
    return view('welcome');
})->name('home');

//Rutas Egresado 

Route::get('/bienvenida', [EgresadosController::class, 'bienvenida'])->name('egresado.bienvenida')->middleware('auth');

Route::get('/instrucciones', [EgresadosController::class, 'instrucciones'])->name('egresado.instrucciones')->middleware('auth');



//Rutas Egresado  Fin

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::redirect('/dashboard', '/bienvenida')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

//Rutas para ver las grafiacas
Route::get('admin/secciones/{encuesta}', [SeccionController::class, 'index'])->name('admin.secciones.index')->middleware(['auth', 'role:dba|jefe_de_departamento']);
Route::get('admin/secciones/graficas/{seccion}', [SeccionController::class, 'graficas'])->name('admin.secciones.graficas')->middleware(['auth', 'role:dba|jefe_de_departamento']);

require __DIR__.'/auth.php';
require __DIR__.'/general.php';
require __DIR__.'/quibio.php';
require __DIR__.'/admin.php';

