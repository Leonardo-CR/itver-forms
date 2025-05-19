<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use App\Models\Aviso;
use Illuminate\Http\Request;

class AvisosController extends Controller
{
    public function avisos()
    {   
        $avisos = Aviso::where('publicado', true)
            ->orderBy('created_at', 'desc')
            ->paginate(8);
            
        return view('egresado.avisos', compact('avisos'));
    }
    
}
