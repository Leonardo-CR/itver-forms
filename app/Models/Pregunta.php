<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    /** @use HasFactory<\Database\Factories\PreguntaFactory> */
    use HasFactory;

    protected $table = 'pregunta';    
    protected $primaryKey = 'cv_pregunta';
    public $timestamps = false;

    public function respuestasCuantitativas()
    {
        return $this->hasMany(RespuestaCuantitativa::class, 'cv_pregunta', 'cv_pregunta');
    }

    public function respuestasCualitativas()
    {
        return $this->hasMany(RespuestaCualitativa::class, 'cv_pregunta', 'cv_pregunta');
    }
}
