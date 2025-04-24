<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $no_control = '22020879'; // o como lo manejes tú
    
            // Recorremos todas las respuestas del formulario
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
                continue; // Si no existe la pregunta, pasa a la siguiente
            }

            // Si es un arreglo, significa que hay múltiples respuestas (checkboxes)
            if (is_array($valor)) {
                foreach ($valor as $respuesta_multiple) {
                    if ($pregunta->tipo === 'cuantitativa') {
                        DB::table('respuesta_cuantitativa')->insert([
                            'valor' => intval($respuesta_multiple),
                            'no_control' => $no_control,
                            'cv_pregunta' => $pregunta->cv_pregunta
                        ]);
                    } elseif ($pregunta->tipo === 'cualitativa') {
                        DB::table('respuesta_cualitativa')->insert([
                            'valor' => $respuesta_multiple,
                            'no_control' => $no_control,
                            'cv_pregunta' => $pregunta->cv_pregunta
                        ]);
                    }
                }
            } else {
                // Si no es arreglo, es una sola respuesta (radio, select, input, textarea)
                if ($pregunta->tipo === 'cuantitativa') {
                    DB::table('respuesta_cuantitativa')->insert([
                        'valor' => intval($valor),
                        'no_control' => $no_control,
                        'cv_pregunta' => $pregunta->cv_pregunta
                    ]);
                } elseif ($pregunta->tipo === 'cualitativa') {
                    DB::table('respuesta_cualitativa')->insert([
                        'valor' => $valor,
                        'no_control' => $no_control,
                        'cv_pregunta' => $pregunta->cv_pregunta
                    ]);
                }
            }
        }
    }

    return redirect()->back()->with('success', 'Encuesta enviada correctamente.');
}

}
