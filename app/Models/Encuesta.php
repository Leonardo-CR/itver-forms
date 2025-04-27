<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    /** @use HasFactory<\Database\Factories\EncuestaFactory> */
    use HasFactory;

    protected $fillable = [
        'cv_encuesta',
        'periodo',
        'is_active',
        'fecha_inicio',
        'fecha_cierre',
        'hora_inicio',
        'hora_cierre',
        'cv_tipo_encuesta',
    ];

    protected $table = 'encuesta';    
    protected $primaryKey = 'cv_encuesta'; 
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    public function tipo_encuesta(){
        return $this->belongsTo(TipoEncuesta::class, 'cv_tipo_encuesta');
    }
}