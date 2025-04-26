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
    public $incrementing = false;
    public $timestamps = false;
}
