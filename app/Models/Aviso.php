<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory; 

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'url',
        'publicado',
        'fecha_publicacion',
    ];
    protected $casts = [
        'publicado' => 'boolean',
        'fecha_publicacion' => 'date',
    ];
}
