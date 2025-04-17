<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuiBioController extends Controller
{
    public function encuesta()
    {
        return view('encuesta.quibio.encuesta');
    }
    public function datos_personales()
    {
        return view('encuesta.quibio.1_datos_personales');
    }
    public function situacion_laboral()
    {
        return view('encuesta.quibio.2_situacion_laboral');
    }
    public function plan_estudios()
    {
        return view('encuesta.quibio.3_plan_estudios');
    }
    public function institucion()
    {
        return view('encuesta.quibio.4_institucion');
    }
    public function desempeno_laboral()
    {
        return view('encuesta.quibio.5_desempeno_laboral');
    }
}
