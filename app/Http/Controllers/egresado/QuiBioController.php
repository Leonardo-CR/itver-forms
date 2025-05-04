<?php

namespace App\Http\Controllers\egresado;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


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
    public function store(Request $request)
{
    $user_id = auth()->id(); // o como lo manejes tú

    // 1. Buscar la encuesta activa del tipo QUIBIO
    $encuestaActiva = DB::table('encuesta')
        ->where('cv_tipo_encuesta', 2) // el id 2 corresponde a QUIBIO
        ->where('is_active', true)
        ->first();

    //return dd($encuestaActiva);  
    //return dd(DB::table('encuesta')->get());
    ;

    if (!$encuestaActiva) {
        return redirect()->back()->withErrors(['encuesta' => 'No hay una encuesta QUIBIO activa.']);
    }

    foreach ($request->input('respuesta') as $clave => $valor) {
        // Extrae el número de sección y número de pregunta desde la clave
        if (preg_match('/s(\d+)_p(\d+)/', $clave, $match)) {
            $cv_seccion = intval($match[1]);
            $no = intval($match[2]);

            // Busca la pregunta en la base de datos
            $pregunta = DB::table('pregunta')
                ->where('cv_seccion', $cv_seccion)
                ->where('no', $no)
                ->first();

            if (!$pregunta) {
                continue;
            }

            // Verificamos si la respuesta está vacía
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

    return redirect()->back()->with('success', 'Encuesta enviada correctamente.');
}



}
