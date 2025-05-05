<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class EncuestaRespuestas extends Model
{
    protected $table = 'encuesta_respuestas_control';

    
    // Permitir asignación masiva
    protected $fillable = [
        'user_id',
        'cv_encuesta',
        'cv_seccion',
    ];

    /**
     * Relación con el modelo User (egresado que responde)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con la encuesta (clave foránea: cv_encuesta)
     */
    public function encuesta(): BelongsTo
    {
        return $this->belongsTo(Encuesta::class, 'cv_encuesta', 'cv_encuesta');
    }

    /**
     * Relación con la sección (clave foránea: cv_seccion)
     */
    public function seccion(): BelongsTo
    {
        return $this->belongsTo(Seccion::class, 'cv_seccion', 'icv_seccion');
    }

}
