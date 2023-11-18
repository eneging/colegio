<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    public function matriculas()
    {
        return $this->belongsToMany(Matricula::class);
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'alumno_id');
    }
}
