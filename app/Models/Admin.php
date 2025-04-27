<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;

    protected $fillable = [
        'cv_administrador',
        'nombre',
        'correo',
        'password',
        'tipo',
    ];

    protected $table = 'administrador';    
    protected $primaryKey = 'cv_administrador'; 
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
