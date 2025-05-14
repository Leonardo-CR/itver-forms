<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaCualitativa extends Model
{
    /** @use HasFactory<\Database\Factories\RespuestaCualitativaFactory> */
    use HasFactory;

    protected $fillable = [
        'cv_respuesta_cualitativa',
        'cv_pregunta',
        
    ];

    protected $table = 'respuesta_cualitativa';    
    protected $primaryKey = 'cv_respuesta_cualitativa'; 
    public $timestamps = false;
    
    public function pregunta(){
        return $this->belongsTo(Pregunta::class, 'cv_pregunta');
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
public function encuesta()
{
    return $this->belongsTo(Encuesta::class, 'cv_encuesta');
}
}
