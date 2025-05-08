<?php

namespace App\Http\Controllers\egresado;

use App\Models\Carrera;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use App\Models\EncuestaRespuestas;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\RespuestaCualitativa;
use App\Models\RespuestaCuantitativa;
use App\Models\DatosGeneralesEgresado;
use Database\Factories\RespuestaCualitativaFactory;

use function Pest\Laravel\get;

class EgresadosController extends Controller
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
        $userId = auth()->id();

        // Encuesta GENERAL activa
        $encuestaActiva = DB::table('encuesta')
            ->where('cv_tipo_encuesta', 1)
            ->where('is_active', true)
            ->first();
    
        $seccionesRespondidas = [];
    
        if ($encuestaActiva) {
            $seccionesRespondidas = EncuestaRespuestas::where('user_id', $userId)
                ->where('cv_encuesta', $encuestaActiva->cv_encuesta)
                ->pluck('cv_seccion')
                ->toArray();
        }
        
        return view('encuesta.general.encuesta', compact('seccionesRespondidas'));
    }
    //Metodos para controlar la encuesta general
    //Primera parte datos personales
    public static function getRespuestas($seccion)
    {
        $preguntas = Pregunta::where('cv_seccion', $seccion)->get();
        $respuestas = [];
        foreach ($preguntas as $pregunta) {
            if ($pregunta->tipo === 'cuantitativa') {
                $resp = RespuestaCuantitativa::where('cv_pregunta', $pregunta->cv_pregunta)->orderBy('cv_encuesta', 'DESC')->first();
                $respuestas['s'.$seccion.'_p'.$pregunta->no] = $resp ? $resp->valor : null;
            } elseif ($pregunta->tipo === 'cualitativa') {
                $resp = RespuestaCualitativa::where('cv_pregunta', $pregunta->cv_pregunta)->orderBy('cv_encuesta', 'DESC')->first();
                $respuestas['s'.$seccion.'_p'.$pregunta->no] = $resp ? $resp->valor : null;
            }
        }
        return $respuestas;
    }
    
    public function pertinencia()
    {
        $respuestas = self::getRespuestas(2);
        return view('encuesta.general.2_pertinencia', compact('respuestas'));
    }
    public function ubicacion()
    {
        $respuestas = self::getRespuestas(3);
        return view('encuesta.general.3_ubicacion', compact('respuestas'));
    }
    public function desempeno()
    {
        $respuestas = self::getRespuestas(4);
        return view('encuesta.general.4_desempeno', compact('respuestas'));
    }
    public function expectativas()
    {
        $res1 = self::getRespuestas(5);
        $res2 = self::getRespuestas(6);
        $res3 = self::getRespuestas(7);
        $respuestas = array_merge($res1, $res2, $res3);
        return view('encuesta.general.5_expectativas', compact('respuestas'));
    }
    public function participacion()
    {
        return view('encuesta.general.6_participacion');
    }
    public function comentarios_sugerencias()
    {
        return view('encuesta.general.7_comentarios_sugerencias');
    }
    public function datospersonales()
    {
        $carreras = Carrera::all();
        return view('encuesta.general.1_datos_generales', compact('carreras'));
    }


}