<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    /** @use HasFactory<\Database\Factories\CarreraFactory> */
    use HasFactory;

    protected $table = 'carrera';    
    protected $primaryKey = 'cv_carrera'; 
    public $incrementing = true;
    public $timestamps = false;

     /**
     * La relación inversa de los usuarios.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class, 'cv_carrera', 'cv_carrera');
    }

    public function administradores()
    {
        return $this->belongsToMany(Admin::class, 'user_carrera', 'cv_carrera', 'id');
    }
}