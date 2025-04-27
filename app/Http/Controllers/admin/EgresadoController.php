<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\Egresado;
use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    public function index()
    {
        $egresados = Egresado::with('carrera')->paginate();
        return view('admin.egresados.index', compact('egresados'));
    }

    public function create()
    {
        $carreras = Carrera::all();
        return view('admin.egresados.create', compact('carreras'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'no_control' => 'unique:egresado,no_control|required|string|max:20',
            'nombre' => 'required|string|max:100',
            'app' => 'required|string|max:100',
            'apm' => 'required|string|max:100',
            'correo' => 'required|email|max:100',
            'password' => 'required|string|min:8|max:50',
            'cv_carrera' => 'required|integer',
        ]);
        $data['password'] = bcrypt($data['password']);

        Egresado::create($data);
    
        return redirect()->route('admin.egresados.index');
    }

    public function show(Egresado $egresado)
    {
    }

    public function edit(Egresado $egresado)
    {
        $carreras = Carrera::all();
        return view('admin.egresados.edit', compact('egresado', 'carreras'));
    }

    public function update(Request $request, Egresado $egresado)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'app' => 'required|string|max:100',
            'apm' => 'required|string|max:100',
            'correo' => 'required|email|max:100',
            'cv_carrera' => 'required|integer',
        ]);

        $egresado->update($data);
    
        return redirect()->route('admin.egresados.edit', $egresado);
    }

    public function destroy(Egresado $egresado)
    {
        $egresado->delete();
        return redirect()->route('admin.egresados.index');
    }
}
