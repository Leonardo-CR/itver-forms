<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Encuesta;
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
}
