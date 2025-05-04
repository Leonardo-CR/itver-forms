<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosGeneralesEgresado extends Model
{
    protected $table = 'perfiles_egresado'; 

    protected $fillable = [
            'user_id',
            'nombre',
            'ap_paterno',
            'ap_materno',
            'fecha_nac',
            'sexo',
            'curp',
            'estado',
            'municipio',
            'ciudad',
            'colonia',
            'cp',
            'calle',
            'no',
            'cv_carrera',
            'especialidad',
            'mes_egreso',
            'anio_ingreso',
            'anio_egreso',
            'lada_celular',
            'tel_celular',
            'estado_civil',
            'lada_casa_paterna',
            'tel_casa_paterna',
            'correo',
            'red_social',
            'no_control',
            'titulado',
            'dominio_ingles',
            'manejo_paquetes',
            'obstaculo',
            'explicate',
            'relacion'
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'cv_carrera', 'cv_carrera');
        // Primero se indica la columna foránea 'cv_carrera' en el modelo User
        // Luego la columna de la tabla relacionada 'cv_carrera' en el modelo Carrera
    }
}
