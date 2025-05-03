<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 4a8558864c265c91da156e85aa90ae620c2e0071
use Illuminate\Database\Eloquent\Model;

class RespuestaCualitativa extends Model
{
<<<<<<< HEAD
    /** @use HasFactory<\Database\Factories\RespuestaCualitativaFactory> */
    use HasFactory;

    protected $table = 'respuesta_cualitativa';    
    protected $primaryKey = 'cv_respuesta_cualitativa'; 
    public $timestamps = false;
    
    public function pregunta(){
        return $this->belongsTo(Pregunta::class, 'cv_pregunta');
    }
=======
    protected $fillable = [
       'valor',
       'user_id',
       'cv_pregunta',
       'cv_encuesta',
    ];

    protected $table = 'respuesta_cualitativa';    
    protected $primaryKey = 'cv_respuesta_cualitativa'; 
>>>>>>> 4a8558864c265c91da156e85aa90ae620c2e0071
}
