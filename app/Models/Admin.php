<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory, HasRoles;

    protected $table = 'administrador';    
    protected $primaryKey = 'cv_administrador'; 
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'cv_administrador',
        'nombre',
        'correo',
        'password',
        'tipo',
    ];
}