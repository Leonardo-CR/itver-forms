<?php
//En este archivo estan las para el modo administrador 

use App\Http\Controllers\admin\AvisoController;
use Illuminate\Support\Facades\Route;

use App\Imports\AvisosImport;

use Illuminate\Http\Request;


Route::resource('admin/avisos', AvisoController::class)->names('admin.avisos')->middleware('auth');



