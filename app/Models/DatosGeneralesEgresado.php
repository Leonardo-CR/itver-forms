<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosGeneralesEgresado extends Model
{
    protected $table = 'perfiles_egresado'; 

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'cv_carrera', 'cv_carrera');
        // Primero se indica la columna foránea 'cv_carrera' en el modelo User
        // Luego la columna de la tabla relacionada 'cv_carrera' en el modelo Carrera
    }
}
