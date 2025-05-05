<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\DatosGeneralesEgresado;
use App\Models\EncuestaRespuestas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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
        
        return view('encuesta.general.encuesta',compact('seccionesRespondidas'));
    }
    //Metodos para controlar la encuesta general
    //Primera parte datos personales
    
    public function pertinencia()
    {
       
        return view('encuesta.general.2_pertinencia');
    }
    public function ubicacion()
    {
        return view('encuesta.general.3_ubicacion');
    }
    public function desempeno()
    {
        return view('encuesta.general.4_desempeno');
    }
    public function expectativas()
    {
        return view('encuesta.general.5_expectativas');
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
