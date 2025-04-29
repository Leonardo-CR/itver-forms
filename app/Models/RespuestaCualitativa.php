<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaCualitativa extends Model
{
    /** @use HasFactory<\Database\Factories\RespuestaCualitativaFactory> */
    use HasFactory;

    protected $table = 'respuesta_cualitativa';    
    protected $primaryKey = 'cv_respuesta_cualitativa'; 
    public $timestamps = false;
    
    public function pregunta(){
        return $this->belongsTo(Pregunta::class, 'cv_pregunta');
    }
}
