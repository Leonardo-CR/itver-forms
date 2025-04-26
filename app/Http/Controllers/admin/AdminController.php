<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        $admins = Admin::paginate();
        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'cv_administrador' => 'unique:administrador,cv_administrador|required|string|max:20',
            'nombre' => 'required|string|max:100',
            'correo' => 'required|string|email|max:100',
            'password' => 'required|string',
            'tipo' => 'required|string',
        ]);
        $data['password'] = bcrypt($data['password']);

        Admin::create($data);
    
        return redirect()->route('admin.admins.index');
    }
    
    public function show(string $id)
    {
    }

   
    public function edit(Admin $admin)
    {
       return view('admin.admins.edit', compact('admin'));
    }
   
    public function update(Request $request, Admin $admin)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'correo' => 'required|string|email|max:100',
            'tipo' => 'required|string',
        ]);

        $admin->update($data);
    
        return redirect()->route('admin.admins.edit', $admin);
    }

   
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.admins.index');
    }
}
