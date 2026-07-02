<?php

namespace App\Models;

use Database\Factories\PrestamosFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    /** @use HasFactory<\Database\Factories\PrestamosFactory> */
    use HasFactory;

    protected static function newFactory()
    {
        return PrestamosFactory::new();
    }

    protected $fillable = [
        'fecha_prestamo',
        'fecha_limite',
        'fecha_devolucion',
        'estado',
        'estudiante_id',
        'empleado_id',
    ];

    public function estudiante()
    {
        return $this->belongsTo(estudiantes::class);
    }

    public function empleado()
    {
        return $this->belongsTo(empleados::class);
    }

    public function detalles()
    {
        return $this->hasMany(detalle_prestamos::class, 'prestamo_id');
    }

    public function multas()
    {
        return $this->hasMany(multas::class, 'prestamo_id');
    }
}
