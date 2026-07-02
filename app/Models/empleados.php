<?php

namespace App\Models;

use Database\Factories\EmpleadosFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadosFactory> */
    use HasFactory;

    protected static function newFactory()
    {
        return EmpleadosFactory::new();
    }

    protected $fillable = [
        'nombre',
        'dni',
        'correo',
        'telefono',
        'cargo',
    ];

    public function prestamos()
    {
        return $this->hasMany(prestamos::class, 'empleado_id');
    }
}
