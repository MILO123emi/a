<?php

namespace App\Models;

use Database\Factories\MultasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multas extends Model
{
    /** @use HasFactory<\Database\Factories\MultasFactory> */
    use HasFactory;

    protected static function newFactory()
    {
        return MultasFactory::new();
    }

    protected $fillable = [
        'prestamo_id',
        'monto',
        'motivo',
        'estado',
        'fecha',
    ];

    protected $casts = [
        'monto' => 'decimal:2',
        'fecha' => 'date',
    ];

    public function prestamo()
    {
        return $this->belongsTo(prestamos::class);
    }
}
