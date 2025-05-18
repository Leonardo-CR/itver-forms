<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Carrera;
use App\Models\UserCarrera;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $admins = User::role(['DBA', 'jefe_de_departamento']) // Ajusta a los roles que usas para administradores
            ->when($request->nombre, function ($query, $nombre) {
                $query->where('name', 'like', '%' . $nombre . '%');
            })
            ->when($request->email, function ($query, $email) {
                $query->where('email', 'like', '%' . $email . '%');
            })
            ->when($request->rol, function ($query, $rol) {
                $query->whereHas('roles', function ($q) use ($rol) {
                    $q->where('name', $rol);
                });
            })
            ->paginate(10)
            ->appends($request->all());
        
        foreach ($admins as $admin) {
            $carreras = $admin->carreras;

            // Formatear a array como necesites
            $carrerasArray = $admin->carreras->map(function($carrera) {
                return [
                    'id_carrera' => $carrera->cv_carrera,
                    'nombre' => $carrera->nombre,
                    'id_relacion' => $carrera->pivot->cv_user_carrera
                ];
            })->toArray();
        }

        $roles = Role::whereIn('name', ['DBA', 'jefe_de_departamento'])->get();
    
        return view('admin.admins.index', compact('admins', 'roles'));
    }

    public function create()
    {   
        $carreras = Carrera::all();
        return view('admin.admins.create', compact('carreras'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'tipo' => 'required|in:DBA,Jefe de Departamento',
            'carreras' => 'array',
            'carreras.*' => 'integer',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'cv_carrera' => 1,
            'tipo' => $validated['tipo'],
            'is_active' => 1,
        ]);

        foreach ($request->input('carreras', []) as $carreraSel) {
            UserCarrera::create([
                'id' => $user->id,
                'cv_carrera' => $carreraSel,
                'is_active' => 1,            
            ]);
        }

        // Asignar rol según el tipo seleccionado
        $rol = $validated['tipo'] === 'DBA' ? 'DBA' : 'jefe_de_departamento';
        $user->assignRole($rol);
        $user->save(); 
        return redirect()->route('admin.admins.index')->with('success', 'Administrador creado y rol asignado.');
    }
    
    public function show(string $id)
    {
    }

    public function edit(User $admin)
    {
        $rol = $admin->getRoleNames()->first(); // 'DBA' o 'jefe_de_departamento'

        // Convertimos al formato que se usa en el select
        $tipo = $rol === 'DBA' ? 'DBA' : 'Jefe de Departamento';

        $resp = UserCarrera::where('id', $admin->id)->get();
        $car = [];
        foreach($resp as $r) {
            $car[] = $r->cv_carrera;
        }
        $carreras = Carrera::all();
        $carrerasSelec = Carrera::whereIn('cv_carrera', $car)->get();
        $selectedCarreras = $carrerasSelec->pluck('cv_carrera')->toArray();
        $oldCarreras = old('carreras', []);
        $checkedCarreras = array_unique(array_merge($selectedCarreras, $oldCarreras));
        return view('admin.admins.edit', compact('admin', 'tipo', 'carreras', 'checkedCarreras'));
    }
    
    public function update(Request $request, User $admin)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'correo' => 'required|string|email|max:100',
            'tipo'   => 'required|in:DBA,Jefe de Departamento',
            'is_active' => 'nullable|boolean',
        ]);

        // Actualizar datos del usuario
        $admin->update([
            'name'  => $data['nombre'],
            'email' => $data['correo'],
            'tipo'  => $data['tipo'],
            'is_active'  => $data['is_active'],
        ]);
        
        UserCarrera::where('id', $admin->id)->delete(); // Eliminar carreras anteriores
        foreach ($request->input('carreras', []) as $carreraSel) {
            UserCarrera::create([
                'id' => $admin->id,
                'cv_carrera' => $carreraSel,
            ]);
        }

        $rol = $data['tipo'] === 'DBA' ? 'DBA' : 'jefe_de_departamento';
        $admin->assignRole($rol);
        $admin->save();

        return redirect()->route('admin.admins.index', $admin)->with('success', 'Administrador actualizado correctamente.');
    }

    public function destroy(User $admin)
    {
        //dd($admin);  // Esto mostrará la información del objeto
        $admin->is_active = 0; // Cambia el estado a inactivo
        $admin->save();
        return redirect()->route('admin.admins.index');
    }
}