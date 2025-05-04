<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
class AdminController extends Controller
{

    public function index(Request $request)
    {
        $admins = User::role(['dba', 'jefe_de_departamento']) // Ajusta a los roles que usas para administradores
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
    
        $roles = Role::whereIn('name', ['dba', 'jefe_de_departamento'])->get();
    
        return view('admin.admins.index', compact('admins', 'roles'));
    }


    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
{

    $validated = $request->validate([
        
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        'tipo' => 'required|in:DBA,Jefe de Departamento',
    ]);

    $user = User::create([
        
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
        'cv_carrera' => 1,
    ]);

    // Asignar rol según el tipo seleccionado
    $rol = $validated['tipo'] === 'DBA' ? 'dba' : 'jefe_de_departamento';
    $user->assignRole($rol);

    return redirect()->route('admin.admins.index')->with('success', 'Administrador creado y rol asignado.');
}
    
    public function show(string $id)
    {
    }

   
    public function edit(User $admin)
{
    $rol = $admin->getRoleNames()->first(); // 'dba' o 'jefe_de_departamento'

    // Convertimos al formato que se usa en el select
    $tipo = $rol === 'dba' ? 'DBA' : 'Jefe de Departamento';

    return view('admin.admins.edit', compact('admin', 'tipo'));
}

   
    public function update(Request $request, User $admin)
{
    $data = $request->validate([
        'nombre' => 'required|string|max:100',
        'correo' => 'required|string|email|max:100',
        'tipo'   => 'required|in:DBA,Jefe de Departamento',
    ]);

    // Actualizar datos del usuario
    $admin->update([
        'name'  => $data['nombre'],
        'email' => $data['correo'],
    ]);

    // Actualizar rol
    $nuevoRol = $data['tipo'] === 'DBA' ? 'dba' : 'jefe_de_departamento';

    // Elimina todos los roles actuales y asigna el nuevo
    $admin->syncRoles([$nuevoRol]);

    return redirect()->route('admin.admins.edit', $admin)->with('success', 'Administrador actualizado correctamente.');
}


   
public function destroy(User $admin)
{
    //dd($admin);  // Esto mostrará la información del objeto
    $admin->delete();
    return redirect()->route('admin.admins.index');
}

}
