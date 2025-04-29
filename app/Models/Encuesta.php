<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    /** @use HasFactory<\Database\Factories\EncuestaFactory> */
    use HasFactory;

    protected $fillable = [
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
    public $timestamps = false;

    public function tipo_encuesta(){
        return $this->belongsTo(TipoEncuesta::class, 'cv_tipo_encuesta');
    }

    public function secciones()
    {
        return $this->hasMany(Seccion::class, 'cv_encuesta', 'cv_encuesta');
    }

    public function getRouteKeyName()
    {
        return 'cv_encuesta';
    }
}