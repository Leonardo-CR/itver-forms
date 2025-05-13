<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RespuestaCualitativa;
use App\Models\RespuestaCuantitativa;

class getRespuestas extends Controller
{
    public static function getRespuestas($seccion)
    {
        $datos = [];
        $preguntas = Pregunta::whereBetween('cv_seccion', [1, 6])->get();
        foreach ($preguntas as $pregunta) {
            if ($pregunta->tipo === 'cuantitativa') {                
                $resp = RespuestaCuantitativa::where('cv_encuesta', $pregunta->cv_pregunta)->get();
                $datos[$pregunta->cv_pregunta] = $resp;
            } elseif ($pregunta->tipo === 'cualitativa') {
                $resp = RespuestaCualitativa::where('cv_pregunta', $pregunta->cv_pregunta)->get();
                $datos[$pregunta->cv_pregunta] = $resp;
            }
        }
        dd($datos);
        return $respuestas;
    }
}
