<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndicadoresController extends Controller
{
    public function indicadores_general(Encuesta $encuesta)
{
    // Indicador 1
    $preguntaIndicador_1 = '1';
    $totalRespuestas_1 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_1)
        ->count();

    $respuestasMuyBuena_1 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_1)
        ->where('valor', 'Muy Buena')
        ->count();

    $porcentajeMuyBuena_1 = $totalRespuestas_1 > 0
        ? round(($respuestasMuyBuena_1 / $totalRespuestas_1) * 100, 2)
        : 0;

    // Indicador 2
    $preguntaIndicador_2 = '2';
    $totalRespuestas_2 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_2)
        ->count();

    $respuestasMuyBuena_2 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_2)
        ->where('valor', 'Muy Buena')
        ->count();

    $porcentajeMuyBuena_2 = $totalRespuestas_2 > 0
        ? round(($respuestasMuyBuena_2 / $totalRespuestas_2) * 100, 2)
        : 0;

    // Indicador 3
    $preguntaIndicador_3 = '3';
    $totalRespuestas_3 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_3)
        ->count();

    $respuestasMuyBuena_3 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_3)
        ->where('valor', 'Muy Buena')
        ->count();

    $porcentajeMuyBuena_3 = $totalRespuestas_3 > 0
        ? round(($respuestasMuyBuena_3 / $totalRespuestas_3) * 100, 2)
        : 0;

    // Indicador 4
    $preguntaIndicador_4 = '4';
    $totalRespuestas_4 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_4)
        ->count();

    $respuestasMuyBuena_4 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_4)
        ->where('valor', 'Muy Buena')
        ->count();

    $porcentajeMuyBuena_4 = $totalRespuestas_4 > 0
        ? round(($respuestasMuyBuena_4 / $totalRespuestas_4) * 100, 2)
        : 0;

    // Indicador 5
    $preguntaIndicador_5 = '5';
    $totalRespuestas_5 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_5)
        ->count();

    $respuestasMuyBuena_5 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_5)
        ->where('valor', 'Muy Buena')
        ->count();

    $porcentajeMuyBuena_5 = $totalRespuestas_5 > 0
        ? round(($respuestasMuyBuena_5 / $totalRespuestas_5) * 100, 2)
        : 0;

    // Indicador 6
    $preguntaIndicador_6 = '6';
    $totalRespuestas_6 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_6)
        ->count();

    $respuestasMuyBuena_6 = DB::table('respuesta_cualitativa')
        ->where('cv_encuesta', $encuesta->cv_encuesta)
        ->where('cv_pregunta', $preguntaIndicador_6)
        ->where('valor', 'Muy Buena')
        ->count();

    $porcentajeMuyBuena_6 = $totalRespuestas_6 > 0
        ? round(($respuestasMuyBuena_6 / $totalRespuestas_6) * 100, 2)
        : 0;

        //Seccion 3 Ubicación laboral de los egresados

        // Indicador 1 (Sección 3): Porcentaje de egresados que trabajan o trabajan y estudian
$seccion3Indicador_1 = '11';

$totalRespuestas_Seccion3_1 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion3Indicador_1)
    ->count();

$respuestasTrabaja_Seccion3_1 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion3Indicador_1)
    ->whereIn('valor', ['Trabaja', 'Trabaja y estudia'])
    ->count();

$porcentajeTrabaja_Seccion3_1 = $totalRespuestas_Seccion3_1 > 0
    ? round(($respuestasTrabaja_Seccion3_1 / $totalRespuestas_Seccion3_1) * 100, 2)
    : 0;


       // Indicador 2 (Sección 3): Porcentaje de egresados que obtuvieron su empleo por bolsa de trabajo del plantel
$seccion3Indicador_2 = '12';

$totalRespuestas_Seccion3_2 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion3Indicador_2)
    ->count();

$respuestasBolsaTrabajo_Seccion3_2 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion3Indicador_2)
    ->where('valor', 'Bolsa de trabajo del plantel')
    ->count();

$porcentajeBolsaTrabajo_Seccion3_2 = $totalRespuestas_Seccion3_2 > 0
    ? round(($respuestasBolsaTrabajo_Seccion3_2 / $totalRespuestas_Seccion3_2) * 100, 2)
    : 0;


        // Indicador 3 (Sección 3): Porcentaje de egresados que actualmente están trabajando o estudiando y trabajando
$seccion3Indicador_3 = '7';

$totalRespuestas_Seccion3_3 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion3Indicador_3)
    ->count();

$respuestasTrabaja_Seccion3_3 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion3Indicador_3)
    ->whereIn('valor', ['Trabaja', 'Estudia y trabaja'])
    ->count();

$porcentajeTrabaja_Seccion3_3 = $totalRespuestas_Seccion3_3 > 0
    ? round(($respuestasTrabaja_Seccion3_3 / $totalRespuestas_Seccion3_3) * 100, 2)
    : 0;


        // Indicador 4 (Sección 3): Porcentaje de egresados que ocupan un puesto intermedio o superior
$seccion3Indicador_4 = '25'; // Aquí debes colocar el cv_pregunta correspondiente

$totalRespuestas_Seccion3_4 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion3Indicador_4)
    ->count();

$respuestasPuestosSuperiores_Seccion3_4 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion3Indicador_4)
    ->whereIn('valor', ['Supervisor', 'Jefe de área', 'Funcionario', 'Directivo', 'Empresario'])
    ->count();

$porcentajePuestosSuperiores_Seccion3_4 = $totalRespuestas_Seccion3_4 > 0
    ? round(($respuestasPuestosSuperiores_Seccion3_4 / $totalRespuestas_Seccion3_4) * 100, 2)
    : 0;

    //Seccion 4 Desempeño laboral de los egresados
    // Indicador 1

 // Indicador 1 (Sección 4): Porcentaje de egresados que respondieron "Muy eficiente" o "Eficiente"
$seccion4Indicador_1 = '49'; // Aquí debes colocar el cv_pregunta correspondiente

// Obtener el total de respuestas para la pregunta
$totalRespuestas_Seccion4_1 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_1)
    ->count();

// Obtener las respuestas que son "Muy eficiente" o "Eficiente"
$respuestasEficiencia_Seccion4_1 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_1)
    ->whereIn('valor', ['Muy eficiente', 'Eficiente'])
    ->count();

// Calcular el porcentaje de respuestas "Muy eficiente" o "Eficiente"
$porcentajeEficiencia_Seccion4_1 = $totalRespuestas_Seccion4_1 > 0
    ? round(($respuestasEficiencia_Seccion4_1 / $totalRespuestas_Seccion4_1) * 100, 2)
    : 0;

// Indicador 2 (Sección 4): Porcentaje de egresados que califican su formación académica como "Excelente" o "Bueno"
$seccion4Indicador_2 = '50'; // Aquí debes colocar el cv_pregunta correspondiente

// Obtener el total de respuestas para la pregunta
$totalRespuestas_Seccion4_2 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_2)
    ->count();

// Obtener las respuestas que son "Excelente" o "Bueno"
$respuestasFormacionAcademica_Seccion4_2 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_2)
    ->whereIn('valor', ['Excelente', 'Bueno'])
    ->count();

// Calcular el porcentaje de respuestas "Excelente" o "Bueno"
$porcentajeFormacionAcademica_Seccion4_2 = $totalRespuestas_Seccion4_2 > 0
    ? round(($respuestasFormacionAcademica_Seccion4_2 / $totalRespuestas_Seccion4_2) * 100, 2)
    : 0;
// Indicador 3 (Sección 4): Porcentaje de egresados que reportan carencias "Demasiado" o "Mucho"
$seccion4Indicador_3 = '55'; // Aquí debes colocar el cv_pregunta correspondiente

// Obtener el total de respuestas para la pregunta
$totalRespuestas_Seccion4_3 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_3)
    ->count();

// Obtener las respuestas que son "Demasiado" o "Mucho"
$respuestasCarencias_Seccion4_3 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_3)
    ->whereIn('valor', ['Muy poco', 'Poco'])
    ->count();

// Calcular el porcentaje de respuestas "Demasiado" o "Mucho"
$porcentajeCarencias_Seccion4_3 = $totalRespuestas_Seccion4_3 > 0
    ? round(($respuestasCarencias_Seccion4_3 / $totalRespuestas_Seccion4_3) * 100, 2)
    : 0;

    // Indicador 3 (Sección 4): Porcentaje de egresados que califican las residencias profesionales como "Excelente" o "Bueno"
$seccion4Indicador_4 = '51'; // Aquí debes colocar el cv_pregunta correspondiente

// Obtener el total de respuestas para la pregunta
$totalRespuestas_Seccion4_4 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_4)
    ->count();

// Obtener las respuestas que son "Excelente" o "Bueno"
$respuestasUtilidadResidencias_Seccion4_4 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_4)
    ->whereIn('valor', ['Excelente', 'Bueno'])
    ->count();

// Calcular el porcentaje de respuestas "Excelente" o "Bueno"
$porcentajeUtilidadResidencias_Seccion4_4 = $totalRespuestas_Seccion4_4 > 0
    ? round(($respuestasUtilidadResidencias_Seccion4_4 / $totalRespuestas_Seccion4_4) * 100, 2)
    : 0;

     // Indicador 5 (Sección 4): Porcentaje de egresados que califican su eficiencia para realizar las actividades laborales como "Poco eficiente" o "Deficiente"
$seccion4Indicador_5 = '52'; // Aquí debes colocar el cv_pregunta correspondiente

// Obtener el total de respuestas para la pregunta
$totalRespuestas_Seccion4_5 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_5)
    ->count();

// Obtener las respuestas que son "Poco eficiente" o "Deficiente"
$respuestasDeficiencia_Seccion4_5 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion4Indicador_5)
    ->whereIn('valor', ['Poco eficiente', 'Deficiente'])
    ->count();

// Calcular el porcentaje de respuestas "Poco eficiente" o "Deficiente"
$porcentajeDeficiencia_Seccion4_5 = $totalRespuestas_Seccion4_5 > 0
    ? round(($respuestasDeficiencia_Seccion4_5 / $totalRespuestas_Seccion4_5) * 100, 2)
    : 0;

    // Seccion 5
    // Indicador 2 (Sección 5): Porcentaje de egresados que están estudiando un posgrado (Maestría o Doctorado)
$seccion5Indicador_2 = '8'; // ID de la pregunta sobre estudios de posgrado

// Obtener el total de respuestas para la pregunta
$totalRespuestas_Seccion5_2 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion5Indicador_2)
    ->count();

// Obtener las respuestas que son "Maestría" o "Doctorado"
$respuestasPosgrado_Seccion5_2 = DB::table('respuesta_cualitativa')
    ->where('cv_encuesta', $encuesta->cv_encuesta)
    ->where('cv_pregunta', $seccion5Indicador_2)
    ->whereIn('valor', ['Maestría', 'Doctorado']) // Asegúrate de que los valores coincidan exactamente
    ->count();

// Calcular el porcentaje de egresados que estudian un posgrado
$porcentajePosgrado_Seccion5_2 = $totalRespuestas_Seccion5_2 > 0
    ? round(($respuestasPosgrado_Seccion5_2 / $totalRespuestas_Seccion5_2) * 100, 2)
    : 0;


    return view('admin.indicadores.dashboard', compact(
        'encuesta',
        'respuestasMuyBuena_1', 'totalRespuestas_1', 'porcentajeMuyBuena_1',
        'respuestasMuyBuena_2', 'totalRespuestas_2', 'porcentajeMuyBuena_2',
        'respuestasMuyBuena_3', 'totalRespuestas_3', 'porcentajeMuyBuena_3',
        'respuestasMuyBuena_4', 'totalRespuestas_4', 'porcentajeMuyBuena_4',
        'respuestasMuyBuena_5', 'totalRespuestas_5', 'porcentajeMuyBuena_5',
        'respuestasMuyBuena_6', 'totalRespuestas_6', 'porcentajeMuyBuena_6',
        'respuestasTrabaja_Seccion3_1', 'totalRespuestas_Seccion3_1', 'porcentajeTrabaja_Seccion3_1',
        'respuestasBolsaTrabajo_Seccion3_2', 'totalRespuestas_Seccion3_2', 'porcentajeBolsaTrabajo_Seccion3_2',
        'respuestasTrabaja_Seccion3_3', 'totalRespuestas_Seccion3_3', 'porcentajeTrabaja_Seccion3_3',
        'respuestasPuestosSuperiores_Seccion3_4', 'totalRespuestas_Seccion3_4', 'porcentajePuestosSuperiores_Seccion3_4',
        'respuestasEficiencia_Seccion4_1', 'totalRespuestas_Seccion4_1', 'porcentajeEficiencia_Seccion4_1',
        'respuestasFormacionAcademica_Seccion4_2', 'totalRespuestas_Seccion4_2', 'porcentajeFormacionAcademica_Seccion4_2',
        'respuestasCarencias_Seccion4_3', 'totalRespuestas_Seccion4_3', 'porcentajeCarencias_Seccion4_3',

        'respuestasUtilidadResidencias_Seccion4_4', 'totalRespuestas_Seccion4_4', 'porcentajeUtilidadResidencias_Seccion4_4',

        'respuestasDeficiencia_Seccion4_5', 'totalRespuestas_Seccion4_5', 'porcentajeDeficiencia_Seccion4_5',

        'respuestasPosgrado_Seccion5_2', 'totalRespuestas_Seccion5_2', 'porcentajePosgrado_Seccion5_2',
    ));
    
        
        
    
    
}

    

}
