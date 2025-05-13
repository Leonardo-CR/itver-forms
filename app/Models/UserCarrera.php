<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCarrera extends Model
{
    /** @use HasFactory<\Database\Factories\UserCarreraFactory> */
    use HasFactory;
    protected $table = 'user_carrera';    
    protected $primaryKey = 'cv_user_carrera';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'cv_carrera'
    ];

    // Relación con User
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    // Relación con Carrera
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'cv_carrera');
    }
}
