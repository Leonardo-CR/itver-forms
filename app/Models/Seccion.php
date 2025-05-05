<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{

    /** @use HasFactory<\Database\Factories\SeccionFactory> */
    use HasFactory;

    protected $table = 'seccion';    
    protected $primaryKey = 'cv_seccion';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    
    public function encuesta(){
        return $this->belongsTo(Encuesta::class, 'cv_encuesta');
    }

    protected $table = 'seccion';

}
