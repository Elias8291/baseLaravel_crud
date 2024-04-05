<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones'; // Especifica el nombre de la tabla

    protected $fillable = ['alumno_numeroDeControl', 'grupo_clave']; // Campos asignables de manera masiva

    // Relación con Alumno
    public function alumno()
    {
        return $this->belongsTo(Estudiante::class, 'alumno_numeroDeControl', 'numeroDeControl');
    }

    // Relación con Grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_clave', 'clave');
    }
}