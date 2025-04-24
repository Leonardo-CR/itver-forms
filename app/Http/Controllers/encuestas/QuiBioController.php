<?php

namespace App\Http\Controllers\encuestas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class QuiBioController extends Controller
{
    public function store(Request $request)
{
    $no_control = '22020879'; // o como lo manejes tú

    foreach ($request->input('respuesta') as $clave => $valor) {
        // Extraer sección y número de pregunta
        if (preg_match('/s(\d+)_p(\d+)/', $clave, $match)) {
            $cv_seccion = intval($match[1]);
            $no = intval($match[2]);

            // Buscar la pregunta correspondiente
            $pregunta = DB::table('pregunta')
                ->where('cv_seccion', $cv_seccion)
                ->where('no', $no)
                ->first();

            if (!$pregunta) continue;

            // Guardar respuesta según el tipo
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

    return back()->with('success', '¡Gracias por enviar tu encuesta!');
}

}
