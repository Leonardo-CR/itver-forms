<?php

namespace App\Http\Controllers\admin;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TipoEncuesta;

class EncuestaController extends Controller
{
    public function index()
    {
        $encuestas = Encuesta::with('tipo_encuesta')->paginate();
        return view('admin.encuestas.index', compact('encuestas'));
    }

    public function create()
    {
        $tipos_encuestas = TipoEncuesta::all();
        return view('admin.encuestas.create', compact('tipos_encuestas'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'cv_encuesta' => 'unique:encuesta,cv_encuesta|required|string|max:20',
            'periodo' => 'required|string|max:12',
            'fecha_inicio' => 'required|date', 
            'fecha_cierre' => 'required|date|after_or_equal:fecha_inicio', 
            'hora_inicio' => 'required', 
            'hora_cierre' => 'required',
            'cv_tipo_encuesta' => 'required|integer',
        ]);
    
        // Crear DateTimes completos
        $inicio = \Carbon\Carbon::parse($data['fecha_inicio'] . ' ' . $data['hora_inicio']);
        $cierre = \Carbon\Carbon::parse($data['fecha_cierre'] . ' ' . $data['hora_cierre']);
        $now = now();
    
        $data['is_active'] = $now->between($inicio, $cierre);
    
        // 👉 Primero validamos que no se solape
        $existeSolapamiento = Encuesta::where('cv_tipo_encuesta', $data['cv_tipo_encuesta'])
            ->where(function ($query) use ($inicio, $cierre) {
                $query->where(function ($q) use ($inicio, $cierre) {
                    $q->where('fecha_inicio', '<=', $cierre)
                       ->where('fecha_cierre', '>=', $inicio);
                });
            })
            ->exists();
    
        if ($existeSolapamiento) {
            return back()->withErrors([
                'fecha_inicio' => 'Ya existe una encuesta del mismo tipo que se cruza en fechas con esta.',
            ])->withInput();
        }
    
        // 👉 Si estará activa, desactivamos otras
        if ($data['is_active']) {
            Encuesta::where('cv_tipo_encuesta', $data['cv_tipo_encuesta'])
                ->where('is_active', true)
                ->update(['is_active' => false]);
        }
    
        Encuesta::create($data);
    
        return redirect()->route('admin.encuestas.index');
    }
    
    

    public function show(string $id)
    {
    }

    public function edit(Encuesta $encuesta)
    {
        $tipos_encuestas = TipoEncuesta::all();
        return view('admin.encuestas.edit', compact('encuesta', 'tipos_encuestas'));
    }

    public function update(Request $request, Encuesta $encuesta)
{
    $data = $request->validate([
        'periodo' => 'required|string|max:12',
        'fecha_inicio' => 'required|date', 
        'fecha_cierre' => 'required|date|after_or_equal:fecha_inicio', 
        'hora_inicio' => 'required', 
        'hora_cierre' => 'required',
        'cv_tipo_encuesta' => 'required|integer',
    ]);

    // Crear DateTimes completos
    $inicio = \Carbon\Carbon::parse($data['fecha_inicio'] . ' ' . $data['hora_inicio']);
    $cierre = \Carbon\Carbon::parse($data['fecha_cierre'] . ' ' . $data['hora_cierre']);
    $now = now();

    $data['is_active'] = $now->between($inicio, $cierre);

    // Si estará activa, desactivamos cualquier otra activa del mismo tipo (excepto esta misma)
    if ($data['is_active']) {
        Encuesta::where('cv_tipo_encuesta', $data['cv_tipo_encuesta'])
            ->where('is_active', true)
            ->where('cv_encuesta', '!=', $encuesta->cv_encuesta)
            ->update(['is_active' => false]);
    }

    $existeSolapamiento = Encuesta::where('cv_tipo_encuesta', $data['cv_tipo_encuesta'])
        ->where('cv_encuesta', '!=', $encuesta->cv_encuesta)
        ->where(function ($query) use ($inicio, $cierre) {
            $query->where(function ($q) use ($inicio, $cierre) {
                $q->where('fecha_inicio', '<=', $cierre)
                ->where('fecha_cierre', '>=', $inicio);
            });
        })
        ->exists();

    if ($existeSolapamiento) {
        return back()->withErrors([
            'fecha_inicio' => 'Ya existe una encuesta del mismo tipo que se cruza en fechas con esta.',
        ])->withInput();
    }


    $encuesta->update($data);

    return redirect()->route('admin.encuestas.edit', $encuesta);
}


    public function destroy(Encuesta $encuesta)
    {
        $encuesta->delete();
        return redirect()->route('admin.encuestas.index');
    }
}
