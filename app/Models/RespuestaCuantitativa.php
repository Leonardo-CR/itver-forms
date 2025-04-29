<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaCuantitativa extends Model
{
    /** @use HasFactory<\Database\Factories\RespuestaCuantitativaFactory> */
    use HasFactory;

    protected $table = 'respuesta_cuantitativa';    
    protected $primaryKey = 'cv_respuesta_cuantitativa'; 
    public $timestamps = false;
    
    public function pregunta(){
        return $this->belongsTo(Pregunta::class, 'cv_pregunta');
    }
}
