<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory; 

    protected $fillable = [
        'titulo',
        'descripcion',
        'contenido',
        'imagen_ruta',
        'url',
        'publicado',
        'fecha_publicacion',
    ];
    protected $casts = [
        'publicado' => 'boolean',
        'fecha_publicacion' => 'date',
    ];
    // public function image(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn () => $this->imagen ? Storage::url($this->imagen) : 'https://thumb.ac-illust.com/b1/b170870007dfa419295d949814474ab2_t.jpeg'
    //     );
    // }
}
