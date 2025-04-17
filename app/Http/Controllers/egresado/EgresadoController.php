<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    public function instrucciones()
    {
        return view('egresado.instrucciones');
    }
    public function bienvenida()
    {
        return view('egresado.bienvenida');
    }
    public function encuesta()
    {
        return view('encuesta.general.encuesta');
    }
    //Metodos para controlar la encuesta general
    //Primera parte datos personales
    public function datospersonales()
    {
        return view('encuesta.general.1_datos_generales');
    }
    public function pertinencia()
    {
        return view('encuesta.general.2_pertinencia');
    }
    public function ubicacion()
    {
        return view('encuesta.general.3_ubicacion');
    }
    public function desempeno()
    {
        return view('encuesta.general.4_desempeno');
    }
    public function expectativas()
    {
        return view('encuesta.general.5_expectativas');
    }
    public function participacion()
    {
        return view('encuesta.general.6_participacion');
    }
    public function comentarios_sugerencias()
    {
        return view('encuesta.general.7_comentarios_sugerencias');
    }
}
