<?php

namespace App\Models;

use Database\Factories\EstudiantesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    /** @use HasFactory<\Database\Factories\EstudiantesFactory> */
    use HasFactory;

    protected static function newFactory()
    {
        return EstudiantesFactory::new();
    }

    protected $fillable = [
        'nombre',
        'dni',
        'correo',
        'telefono',
    ];

    public function prestamos()
    {
        return $this->hasMany(prestamos::class, 'estudiante_id');
    }
}
