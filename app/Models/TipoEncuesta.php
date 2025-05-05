<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEncuesta extends Model
{
    /** @use HasFactory<\Database\Factories\TipoEncuestaFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    protected $table = 'tipo_encuesta';    
    protected $primaryKey = 'cv_tipo_encuesta'; 
    protected $keyType = 'string';
    public $incrementing = true;
    public $timestamps = true;
}
