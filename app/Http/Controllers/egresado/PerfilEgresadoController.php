<?php

namespace App\Http\Controllers\egresado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\DatosGeneralesEgresado;

class PerfilEgresadoController extends Controller
{
    public function index()
    {
        $perfil = DatosGeneralesEgresado::where('user_id', auth()->id())->first();
        return view('egresado.perfil.index', compact('perfil'));
    }

    public function datospersonales()
    {
        $carreras = Carrera::all();
        $datos = DatosGeneralesEgresado::where('user_id', auth()->id())->first();

        return view('encuesta.general.1_datos_generales', compact('carreras', 'datos'));
    }

    public function guardarDatosGenerales(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ap_paterno' => 'required|string|max:255',
            'ap_materno' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|in:Masculino,Femenino',
            'curp' => 'required|string|max:18',
            'estado' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'cp' => 'required|string|max:10',
            'calle' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'cv_carrera' => 'required|exists:carreras,cv_carrera',
        ]);

        DatosGeneralesEgresado::updateOrCreate(
            ['user_id' => auth()->id()],
            $request->only([
                'nombre', 'ap_paterno', 'ap_materno', 'fecha_nacimiento',
                'sexo', 'curp', 'estado', 'municipio', 'ciudad',
                'colonia', 'cp', 'calle', 'numero', 'cv_carrera'
            ])
        );

        return redirect()->route('egresado.instrucciones')->with('success', 'Datos guardados correctamente.');
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
