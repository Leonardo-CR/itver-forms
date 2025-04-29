<?php

namespace App\Http\Controllers\admin;

use App\Models\Seccion;
use App\Models\Encuesta;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RespuestaCualitativa;
use App\Models\RespuestaCuantitativa;

class SeccionController extends Controller
{
    public function index(Encuesta $encuesta)
    {
        $secciones = Seccion::where('cv_encuesta', $encuesta->cv_encuesta)->get();
        return view('admin.secciones.index', compact('secciones'));
    }
 
    public function graficas(Seccion $seccion)
    {
        if($seccion->cv_seccion==9){
            $preguntas = Pregunta::whereBetween('no', [1, 6])->where('cv_seccion', 2)->get();
        }else if($seccion->cv_seccion==7){
            $preguntas = Pregunta::whereIn('no', [5, 6, 1, 16, 18, 19, 8, 23, 39, 40, 41, 42])->where('cv_seccion', 7)->get();
        }


        foreach ($preguntas as $pregunta) {            
            if ($pregunta->tipo === 'cuantitativa') {
                $respuestas = RespuestaCuantitativa::where('cv_pregunta', $pregunta->cv_pregunta)->get();
            } else {
                $respuestas = RespuestaCualitativa::where('cv_pregunta', $pregunta->cv_pregunta)->get();
            }
            $pregunta->respuestas = $respuestas ?? collect();
        }

        return view('admin.secciones.graficas', compact('seccion', 'preguntas'));
    }
}