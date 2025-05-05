<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use App\Models\EncuestaRespuestas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GeneralController extends Controller
{
    public function store(Request $request)
    {
        $user_id = auth()->id();

        // 1. Buscar la encuesta activa del tipo GENERAL (cv_tipo_encuesta = 1)
        $encuestaActiva = DB::table('encuesta')
            ->where('cv_tipo_encuesta', 1)
            ->where('is_active', true)
            ->first();

        if (!$encuestaActiva) {
            return redirect()->back()->withErrors(['encuesta' => 'No hay una encuesta GENERAL activa.']);
        }

        foreach ($request->input('respuesta') as $clave => $valor) {
            if (preg_match('/s(\d+)_p(\d+)/', $clave, $match)) {
                $cv_seccion = intval($match[1]);
                $no = intval($match[2]);

                // Buscar pregunta
                $pregunta = DB::table('pregunta')
                    ->where('cv_seccion', $cv_seccion)
                    ->where('no', $no)
                    ->first();

                if (!$pregunta) {
                    continue;
                }

                if (is_array($valor)) {
                    foreach ($valor as $respuesta_multiple) {
                        if (empty($respuesta_multiple)) {
                            continue;
                        }

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
                    if (empty($valor)) {
                        continue;
                    }

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

        // Registrar las secciones como contestadas
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




        return redirect()->route('egresado.encuesta');
    }
}