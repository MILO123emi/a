<?php

namespace App\Models;

use Database\Factories\DetallePrestamosFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_prestamos extends Model
{
    /** @use HasFactory<\Database\Factories\DetallePrestamosFactory> */
    use HasFactory;

    protected static function newFactory()
    {
        return DetallePrestamosFactory::new();
    }

    protected $fillable = [
        'prestamo_id',
        'ejemplar_id',
        'devuelto',
        'fecha_devolucion',
    ];

    protected $casts = [
        'devuelto' => 'boolean',
        'fecha_devolucion' => 'date',
    ];

    public function prestamo()
    {
        return $this->belongsTo(prestamos::class);
    }

    public function ejemplar()
    {
        return $this->belongsTo(ejemplares::class);
    }
}
