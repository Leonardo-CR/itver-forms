<?php
use App\Http\Controllers\QuiBioController;
use App\Http\Controllers\egresado\egresadoController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\admin\AvisoController;
Route::get('/', function () {
    return view('welcome');
})->name('home');

//Rutas Egresado 

Route::get('/bienvenida', [EgresadoController::class, 'bienvenida'])->name('egresado.bienvenida');

Route::get('/instrucciones', [EgresadoController::class, 'instrucciones'])->name('egresado.instrucciones');



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

