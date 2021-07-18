<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table= 'Grupo';

    protected $fillable=['id_estudiante','semestre','grupo','turno'];
}
