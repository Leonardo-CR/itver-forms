<?php

namespace App\Http\Controllers\admin;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Http\Controllers\Controller;
use App\Models\Aviso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avisos = Aviso::orderBy('id','desc')->paginate();
        return view('admin.avisos.index', compact('avisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.avisos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required',
            'imagen_ruta' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'publicado' => 'required|boolean',
            'fecha_publicacion' => 'nullable|date',
        ]);

        if ($request->hasFile('imagen_ruta')) {
        // Guardar la imagen en la carpeta 'avisos' dentro de 'storage/app/public'
        $path = $request->file('imagen_ruta')->store('avisos', 'public');
        // Guardar la ruta del archivo en la base de datos
        $data['imagen_ruta'] = $path;
    }

        //return $data;
        //dd($data);
        
    
        // Procesar imagen si se subió
        if ($request->hasFile('imagen_ruta')) {
            // Guarda el archivo en el disco 'public' dentro de la carpeta 'avisos'
            $ruta = $request->file('imagen_ruta')->store('avisos', 'public');
            //return $ruta;
    
            // Almacena la ruta en el campo 'imagen_ruta'
            $data['imagen_ruta'] = $ruta;
        }
    
        Aviso::create($data);

        
    
        return redirect()->route('admin.avisos.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Aviso $aviso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aviso $aviso)
    {
       return view('admin.avisos.edit', compact('aviso'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aviso $aviso)
    {
    $data = $request->validate([
        'titulo' => 'required|string|max:255',
        'contenido' => 'nullable',
        'imagen_ruta' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'publicado' => 'required|boolean',
        'fecha_publicacion' => 'nullable|date',
    ]);
    
    if ($request->hasFile('imagen_ruta')) {
        // Eliminar la imagen anterior si existe
        if ($aviso->imagen_ruta) {
            Storage::disk('public')->delete($aviso->imagen_ruta);
        }

        // Guardar la nueva imagen
        $data['imagen_ruta'] = $request->file('imagen_ruta')->store('avisos', 'public');
    }

    $aviso->update($data);

    return redirect()->route('admin.avisos.edit', $aviso);
    }

       
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aviso $aviso)
{
    // Eliminar la imagen del almacenamiento si existe
    if ($aviso->imagen_ruta && Storage::disk('public')->exists($aviso->imagen_ruta)) {
        Storage::disk('public')->delete($aviso->imagen_ruta);
    }

    // Eliminar el aviso de la base de datos
    $aviso->delete();

    // Redireccionar con mensaje
    return redirect()->route('admin.avisos.index');
}

}
