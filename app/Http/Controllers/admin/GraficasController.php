<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Encuesta;
use App\Models\RespuestaCualitativa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficasController extends Controller
{
    public function reporte_generales(Encuesta $encuesta)
    {
        // Datos para gráfica de tipo Pie
        $preguntaPie = '7'; // ID lógico de la pregunta: ¿Trabaja/Estudia...?
        $datosPie = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->where('cv_encuesta', $encuesta->cv_encuesta)
            ->where('cv_pregunta', $preguntaPie)
            ->groupBy('valor')
            ->get();

        // Datos para gráfica de tipo Line
        $preguntaLine = '1'; // ID lógico de la pregunta: Calidad de los docentes
        $datosLine = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->where('cv_encuesta', $encuesta->cv_encuesta)
            ->where('cv_pregunta', $preguntaLine)
            ->groupBy('valor')
            ->get();

        // Datos para la grafica de tipo Radar
        $preguntaRadar = '50'; // ID lógico de la pregunta: Calidad de los docentes
        $datosRadar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->where('cv_encuesta', $encuesta->cv_encuesta)
            ->where('cv_pregunta', $preguntaRadar)
            ->groupBy('valor')
            ->get();
        $maxRadar = $datosRadar->max('total'); //Escala de la grafica

        //Datos para la grafica de tipo Polar
        $preguntaPolar = '49'; // ID lógico de la pregunta: Calidad de los docentes
        $datosPolar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->where('cv_encuesta', $encuesta->cv_encuesta)
            ->where('cv_pregunta', $preguntaPolar)
            ->groupBy('valor')
            ->get();
        $maxPolar = $datosPolar->max('total'); //Escala de la grafica

        // Datos para la gráfica de tipo Bar Chart
        
        $preguntaBar = '3'; // ID lógico de la pregunta: Calidad de los docentes
        $datosBar = DB::table('respuesta_cualitativa')
             ->select('valor', DB::raw('count(*) as total'))
             ->where('cv_encuesta', $encuesta->cv_encuesta)
             ->where('cv_pregunta', $preguntaBar)
             ->groupBy('valor')
             ->get();
        $maxBar = $datosBar->max('total'); //Escala de la grafica
        
        //return $datosRadar;

        return view('admin.graficas.graficas_general', compact('encuesta', 'datosPie', 'datosLine','datosRadar', 'maxRadar', 'datosPolar','maxPolar', 'datosBar', 'maxBar'));
    }
    public function reporte_quibio(Encuesta $encuesta)
    {
        // Datos para gráfica de tipo Pie
        $preguntaPie = '72'; // ID lógico de la pregunta: ¿Trabaja/Estudia...?
        $datosPie = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->where('cv_encuesta', $encuesta->cv_encuesta)
            ->where('cv_pregunta', $preguntaPie)
            ->whereIn('valor', ['Si', 'No'])
            ->groupBy('valor')
            ->get();
            //return $datosPie;

        // Datos para gráfica de tipo Line
        $preguntaLine = '82'; // ID lógico de la pregunta: Calidad de los docentes
        $datosLine = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->where('cv_encuesta', $encuesta->cv_encuesta)
            ->where('cv_pregunta', $preguntaLine)
            ->groupBy('valor')
            ->get();

        // Datos para la grafica de tipo Radar
        $preguntaRadar = '83'; // ID lógico de la pregunta: Calidad de los docentes
        $datosRadar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->where('cv_encuesta', $encuesta->cv_encuesta)
            ->where('cv_pregunta', $preguntaRadar)
            ->groupBy('valor')
            ->get();
        $maxRadar = $datosRadar->max('total'); //Escala de la grafica

        //Datos para la grafica de tipo Polar
        $preguntaPolar = '78'; // ID lógico de la pregunta: Calidad de los docentes
        $datosPolar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->where('cv_encuesta', $encuesta->cv_encuesta)
            ->where('cv_pregunta', $preguntaPolar)
            ->groupBy('valor')
            ->get();
        $maxPolar = $datosPolar->max('total'); //Escala de la grafica

        // Datos para la gráfica de tipo Bar Chart
        
        $preguntaBar = '80'; // ID lógico de la pregunta: Calidad de los docentes
        $datosBar = DB::table('respuesta_cualitativa')
             ->select('valor', DB::raw('count(*) as total'))
             ->where('cv_encuesta', $encuesta->cv_encuesta)
             ->where('cv_pregunta', $preguntaBar)
             ->groupBy('valor')
             ->get();
        $maxBar = $datosBar->max('total'); //Escala de la grafica
        
        //return $datosRadar;

        return view('admin.graficas.graficas_general', compact('encuesta', 'datosPie', 'datosLine','datosRadar', 'maxRadar', 'datosPolar','maxPolar', 'datosBar', 'maxBar'));
    }

    public function reporte_generales_n(Request $request)
    {
        // Obtener la cadena enviada (ej: "1, 3, 5")
        $encuestasRaw = $request->input('encuestas', '');

        // Convertir a array de enteros y limpiar espacios
        $encuestas = array_filter(array_map('intval', explode(',', $encuestasRaw)));

        if (empty($encuestas)) {
            return redirect()->back()->with('error', 'Debe ingresar al menos un ID de encuesta válido.');
        }

        // Filtrar sólo encuestas con cv_tipo_encuesta = 1
        $encuestasTipo1 = DB::table('encuesta')
            ->whereIn('cv_encuesta', $encuestas)  // o el nombre correcto de PK en tabla encuestas
            ->where('cv_tipo_encuesta', 1)
            ->pluck('cv_encuesta')
            ->toArray();

        if (empty($encuestasTipo1)) {
            return redirect()->back()->with('error', 'No hay encuestas con tipo 1 entre los IDs ingresados.');
        }

        // Preguntas por tipo de gráfica
        $preguntaPie = '7';
        $preguntaLine = '1';
        $preguntaRadar = '50';
        $preguntaPolar = '49';
        $preguntaBar = '3';

        $datosPie = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaPie)
            ->groupBy('valor')
            ->get();

        $datosLine = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaLine)
            ->groupBy('valor')
            ->get();

        $datosRadar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaRadar)
            ->groupBy('valor')
            ->get();
        $maxRadar = $datosRadar->max('total');

        $datosPolar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaPolar)
            ->groupBy('valor')
            ->get();
        $maxPolar = $datosPolar->max('total');

        $datosBar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaBar)
            ->groupBy('valor')
            ->get();
        $maxBar = $datosBar->max('total');

        $encuestaLabel = 'Encuestas (tipo 1): ' . implode(', ', $encuestasTipo1);

        return view('admin.graficas.graficas_general', compact(
            'encuestaLabel', 'datosPie', 'datosLine', 'datosRadar', 'maxRadar',
            'datosPolar', 'maxPolar', 'datosBar', 'maxBar'
        ));
    }

    public function reporte_quibio_n(Request $request)
    {
        // Obtener la cadena enviada (ej: "1, 3, 5")
        $encuestasRaw = $request->input('encuestas', '');

        // Convertir a array de enteros y limpiar espacios
        $encuestas = array_filter(array_map('intval', explode(',', $encuestasRaw)));

        if (empty($encuestas)) {
            return redirect()->back()->with('error', 'Debe ingresar al menos un ID de encuesta válido.');
        }

        // Filtrar sólo encuestas con cv_tipo_encuesta = 1
        $encuestasTipo1 = DB::table('encuesta')
            ->whereIn('cv_encuesta', $encuestas)  // o el nombre correcto de PK en tabla encuestas
            ->where('cv_tipo_encuesta', 2) // Cambiar a 2 para Quibio
            ->pluck('cv_encuesta')
            ->toArray();

        if (empty($encuestasTipo1)) {
            return redirect()->back()->with('error', 'No hay encuestas con tipo 1 entre los IDs ingresados.');
        }

        // Preguntas por tipo de gráfica
        $preguntaPie = '72';
        $preguntaLine = '82';
        $preguntaRadar = '83';
        $preguntaPolar = '78';
        $preguntaBar = '80';

        $datosPie = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaPie)
            ->groupBy('valor')
            ->get();

        $datosLine = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaLine)
            ->groupBy('valor')
            ->get();

        $datosRadar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaRadar)
            ->groupBy('valor')
            ->get();
        $maxRadar = $datosRadar->max('total');

        $datosPolar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaPolar)
            ->groupBy('valor')
            ->get();
        $maxPolar = $datosPolar->max('total');

        $datosBar = DB::table('respuesta_cualitativa')
            ->select('valor', DB::raw('count(*) as total'))
            ->whereIn('cv_encuesta', $encuestasTipo1)
            ->where('cv_pregunta', $preguntaBar)
            ->groupBy('valor')
            ->get();
        $maxBar = $datosBar->max('total');

        $encuestaLabel = 'Encuestas (tipo 1): ' . implode(', ', $encuestasTipo1);

        return view('admin.graficas.graficas_general', compact(
            'encuestaLabel', 'datosPie', 'datosLine', 'datosRadar', 'maxRadar',
            'datosPolar', 'maxPolar', 'datosBar', 'maxBar'
        ));
    }
}
