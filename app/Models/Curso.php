<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function docentes()
    {
        return $this->belongsTo(Docente::class, 'docente_id');
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'curso_id');
    }
}
