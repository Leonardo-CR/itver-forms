<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\Egresado;
use App\Models\User;
use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    public function index(Request $request)
    {
        $egresados = User::with('carrera')
            ->whereHas('roles', function ($q) {
                $q->whereIn('name', ['egresado_general', 'egresado_quibio']);
            })
            ->when($request->nombre, function ($query, $nombre) {
                $query->where('name', 'like', '%' . $nombre . '%');
            })
            ->when($request->email, function ($query, $email) {
                $query->where('email', 'like', '%' . $email . '%');
            })
            ->when($request->verificado !== null, function ($query) use ($request) {
                if ($request->verificado == '1') {
                    $query->whereNotNull('email_verified_at');
                } elseif ($request->verificado == '0') {
                    $query->whereNull('email_verified_at');
                }
            })
            ->paginate(10)
            ->appends($request->all());
    
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

        User::create($data);
    
        return redirect()->route('admin.egresados.index');
    }

    public function show(User $egresado)
    {
    }

    public function edit(User $egresado)
    {
        $carreras = Carrera::all();
        return view('admin.egresados.edit', compact('egresado', 'carreras'));
    }

    public function update(Request $request, User $egresado)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'correo' => 'required|email|max:100',
            'cv_carrera' => 'required|integer',
        ]);
        $egresado->update($data);
        return redirect()->route('admin.egresados.edit', $egresado);
    }

    public function destroy(User $egresado)
    {
        $egresado->delete();
        return redirect()->route('admin.egresados.index');
    }
}
