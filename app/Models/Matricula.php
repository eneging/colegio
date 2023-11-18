<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    public function cursos()
    {

        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function alumnos()
    {

        return $this->belongsTo(Alumno::class, 'alumno_id');
    }
}
