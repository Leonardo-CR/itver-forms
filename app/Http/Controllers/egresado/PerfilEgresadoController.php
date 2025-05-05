<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\DatosGeneralesEgresado;

use function Ramsey\Uuid\v1;

class PerfilEgresadoController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();
        $datos = DatosGeneralesEgresado::where('user_id', auth()->id())->first();

        return view('encuesta.general.1_datos_generales', compact('carreras', 'datos'));
    }

    public function index2()
    {
        $carreras = Carrera::all();
        $datos = DatosGeneralesEgresado::where('user_id', auth()->id())->first();
        
        return view('encuesta.quibio.1_datos_personales', compact('carreras', 'datos'));
    }

    public function guardarDatosGenerales(Request $request)
    {
        $val = $request->validate([
            'nombre' => 'nullable|string|max:255',
            'ap_paterno' => 'nullable|string|max:255',
            'ap_materno' => 'nullable|string|max:255',
            'fecha_nac' => 'nullable|date',
            'sexo' => 'nullable|in:Masculino,Femenino',
            'curp' => 'nullable|string',
            'estado' => 'nullable|string|max:255',
            'municipio' => 'nullable|string|max:255',
            'ciudad' => 'nullable|string|max:255',
            'colonia' => 'nullable|string|max:255',
            'cp' => 'nullable|string|max:10',
            'calle' => 'nullable|string|max:255',
            'no' => 'nullable|string|max:255',
            'cv_carrera' => 'nullable|string|max:255',
            'especialidad' => 'nullable|string|max:255',
            'mes_egreso' => 'nullable|string|max:255',
            'anio_ingreso' => 'nullable|integer|min:1900|max:'.(date('Y')+1),
            'anio_egreso' => 'nullable|integer|min:1900|max:'.(date('Y')+1),
            'lada_celular' => 'nullable|string|max:10',
            'tel_celular' => 'nullable|string|max:10',
            'estado_civil' => 'nullable|string|max:255',
            'lada_casa_paterna' => 'nullable|string|max:10',
            'tel_casa_paterna' => 'nullable|string|max:10',
            'correo' => 'nullable|email|max:255',
            'red_social' => 'nullable|string|max:255',
            'no_control' => 'nullable|string|max:255',
            'titulado' => 'nullable|integer',
            'dominio_ingles' => 'nullable|integer|min:0|max:100',
            'manejo_paquetes' => 'nullable|string',
            'obstaculo' => 'nullable|string|max:255',
            'explicate' => 'nullable|string|max:255',
            'relacion' => 'nullable|integer',
        ]);
        $val['user_id'] = auth()->id();
        DatosGeneralesEgresado::updateOrCreate(
            ['user_id' => auth()->id()],
            $val
        );

        return redirect()->route('egresado.encuesta')->with('success', 'Datos guardados correctamente.');
    }

    public function show($id)
    {
        $perfil = DatosGeneralesEgresado::findOrFail($id);
        return view('egresado.perfil.show', compact('perfil'));
    }

    public function destroy($id)
    {
        $perfil = DatosGeneralesEgresado::findOrFail($id);
        $perfil->delete();

        return redirect()->route('egresado.perfil.index')->with('success', 'Perfil eliminado correctamente.');
    }
}
