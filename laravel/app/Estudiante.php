<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'Estudiante';
    protected $primaryKey = 'id';
    protected $fillable =['nombre','apellidos','edad','email'];

    public function grupo(){
        return $this->hasMany(Grupo::class,'id_estudiante');
    }
}
