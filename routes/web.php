<?php
use App\Http\Controllers\QuiBioController;
use App\Http\Controllers\egresado\egresadosController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\admin\AvisoController;

use App\Exports\AvisosExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AvisosImport;
use Illuminate\Http\Request;

Route::get('admin/avisos/exportar', function () {
    return Excel::download(new AvisosExport, 'avisos.xlsx');
})->name('admin.avisos.exportar');

Route::post('admin/avisos/importar', function (Request $request) {
    $request->validate([
        'archivo' => 'required|file|mimes:xlsx',
    ]);

    Excel::import(new AvisosImport, $request->file('archivo'));

    return redirect()->back()->with('success', 'Avisos importados correctamente.');
})->name('admin.avisos.importar');



Route::get('/', function () {
    return view('welcome');
})->name('home');

//Rutas Egresado 

Route::get('/bienvenida', [EgresadosController::class, 'bienvenida'])->name('egresado.bienvenida');

Route::get('/instrucciones', [EgresadosController::class, 'instrucciones'])->name('egresado.instrucciones');



//Rutas Egresado  Fin

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
require __DIR__.'/general.php';
require __DIR__.'/quibio.php';
require __DIR__.'/admin.php';

