<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespuestaCualitativa extends Model
{
    protected $fillable = [
       'valor',
       'user_id',
       'cv_pregunta',
       'cv_encuesta',
    ];

    protected $table = 'respuesta_cualitativa';    
    protected $primaryKey = 'cv_respuesta_cualitativa'; 
}
