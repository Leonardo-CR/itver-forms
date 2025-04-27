<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
     /** @use HasFactory<\Database\Factories\EgresadoFactory> */
     use HasFactory;

    protected $table = 'egresado';    
    protected $primaryKey = 'no_control'; 
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'no_control',
        'nombre',
        'app',
        'apm',
        'correo',
        'password',
        'cv_carrera',
    ];
   
    public function carrera(){
        return $this->belongsTo(Carrera::class, 'cv_carrera');
    }
}
