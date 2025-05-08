<?php

namespace App\Http\Controllers\egresado;

use App\Models\Pregunta;
use Illuminate\Http\Request;
use App\Models\EncuestaRespuestas;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\RespuestaCualitativa;
use App\Models\RespuestaCuantitativa;



class QuiBioController extends Controller
{
    public function encuesta()
    {
        $userId = auth()->id();

        // Encuesta QUIBIO activa
        $encuestaActiva = DB::table('encuesta')
            ->where('cv_tipo_encuesta', 2) // 2 corresponde a QUIBIO
            ->where('is_active', true)
            ->first();

        $seccionesRespondidas = [];

        if ($encuestaActiva) {
            $seccionesRespondidas = EncuestaRespuestas::where('user_id', $userId)
                ->where('cv_encuesta', $encuestaActiva->cv_encuesta)
                ->pluck('cv_seccion')
                ->toArray();
        }
        return view('encuesta.quibio.encuesta', compact('seccionesRespondidas'));
    }

    public static function getRespuestas($seccion)
    {
        $preguntas = Pregunta::where('cv_seccion', $seccion)->get();
        $respuestas = [];
        foreach ($preguntas as $pregunta) {
            if ($pregunta->tipo === 'cuantitativa') {                
                $resp = RespuestaCuantitativa::where('cv_pregunta', $pregunta->cv_pregunta)->where('user_id', auth()->id())->orderBy('cv_encuesta', 'DESC')->get();
                if(count($resp) == 1){
                    $resp = $resp[0]->valor;
                    $respuestas['s'.$seccion.'_p'.$pregunta->no] = $resp ? $resp : null;
                }else{
                    foreach($resp as $r) {
                        $respuestas['s'.$seccion.'_p'.$pregunta->no][] = $r->valor;
                    }
                }
            } elseif ($pregunta->tipo === 'cualitativa') {
                $resp = RespuestaCualitativa::where('cv_pregunta', $pregunta->cv_pregunta)->where('user_id', auth()->id())->orderBy('cv_encuesta', 'DESC')->get();
                if(count($resp) == 1){
                    $resp = $resp[0]->valor;
                    $respuestas['s'.$seccion.'_p'.$pregunta->no] = $resp ? $resp : null;
                }else{
                    foreach($resp as $r) {
                        $respuestas['s'.$seccion.'_p'.$pregunta->no][] = $r->valor;
                    }
                }
            }
        }
        return $respuestas;
    }

    public function datos_personales()
    {   
        $respuestas = self::getRespuestas(8);
        return view('encuesta.quibio.1_datos_personales', compact('respuestas'));
    }
    public function situacion_laboral()
    {
        $respuestas = self::getRespuestas(9);
        return view('encuesta.quibio.2_situacion_laboral', compact('respuestas'));
    }
    public function plan_estudios()
    {
        $respuestas = self::getRespuestas(10);
        return view('encuesta.quibio.3_plan_estudios', compact('respuestas'));
    }
    public function institucion()
    {
        $respuestas = self::getRespuestas(11);
        return view('encuesta.quibio.4_institucion', compact('respuestas'));
    }
    public function desempeno_laboral()
    {
        $respuestas = self::getRespuestas(12);
        return view('encuesta.quibio.5_desempeno_laboral', compact('respuestas'));
    }
    public function store(Request $request)
    {
        $user_id = auth()->id(); // o como lo manejes tú

        $encuestaActiva = DB::table('encuesta')
            ->where('cv_tipo_encuesta', 2) // el id 2 corresponde a QUIBIO
            ->where('is_active', true)
            ->first();

        if (!$encuestaActiva) {
            return redirect()->back()->withErrors(['encuesta' => 'No hay una encuesta QUIBIO activa.']);
        }

        foreach ($request->input('respuesta') as $clave => $valor) {
            if (preg_match('/s(\d+)_p(\d+)/', $clave, $match)) {
                $cv_seccion = intval($match[1]);
                $no = intval($match[2]);

                $pregunta = DB::table('pregunta')
                    ->where('cv_seccion', $cv_seccion)
                    ->where('no', $no)
                    ->first();

                if (!$pregunta) continue;

                if (is_array($valor)) {
                    foreach ($valor as $respuesta_multiple) {
                        if (empty($respuesta_multiple)) continue;

                        if ($pregunta->tipo === 'cuantitativa') {
                            DB::table('respuesta_cuantitativa')->insert([
                                'valor' => intval($respuesta_multiple),
                                'user_id' => $user_id,
                                'cv_pregunta' => $pregunta->cv_pregunta,
                                'cv_encuesta' => $encuestaActiva->cv_encuesta
                            ]);
                        } elseif ($pregunta->tipo === 'cualitativa') {
                            DB::table('respuesta_cualitativa')->insert([
                                'valor' => $respuesta_multiple,
                                'user_id' => $user_id,
                                'cv_pregunta' => $pregunta->cv_pregunta,
                                'cv_encuesta' => $encuestaActiva->cv_encuesta
                            ]);
                        }
                    }
                } else {
                    if (empty($valor)) continue;

                    if ($pregunta->tipo === 'cuantitativa') {
                        DB::table('respuesta_cuantitativa')->insert([
                            'valor' => intval($valor),
                            'user_id' => $user_id,
                            'cv_pregunta' => $pregunta->cv_pregunta,
                            'cv_encuesta' => $encuestaActiva->cv_encuesta
                        ]);
                    } elseif ($pregunta->tipo === 'cualitativa') {
                        DB::table('respuesta_cualitativa')->insert([
                            'valor' => $valor,
                            'user_id' => $user_id,
                            'cv_pregunta' => $pregunta->cv_pregunta,
                            'cv_encuesta' => $encuestaActiva->cv_encuesta
                        ]);
                    }
                }
            }
        }
        // Lógica agregada: registrar secciones como respondidas
        $seccionesRespondidas = collect($request->input('respuesta'))
            ->keys()
            ->map(function ($clave) {
                if (preg_match('/s(\d+)_p(\d+)/', $clave, $match)) {
                    return intval($match[1]);
                }
                return null;
            })
            ->filter()
            ->unique();

        foreach ($seccionesRespondidas as $cv_seccion) {
            EncuestaRespuestas::firstOrCreate([
                'user_id' => $user_id,
                'cv_encuesta' => $encuestaActiva->cv_encuesta,
                'cv_seccion' => $cv_seccion,
            ]);
        }

        return redirect()->route('quibio.encuesta');
    }
}
