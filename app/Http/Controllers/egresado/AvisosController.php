<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvisosController extends Controller
{
    public function avisos()
    {
        return view('egresado.avisos');
    }
}
