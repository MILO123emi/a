<?php

namespace App\Models;

use Database\Factories\EjemplaresFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ejemplares extends Model
{
    /** @use HasFactory<\Database\Factories\EjemplaresFactory> */
    use HasFactory;

    protected static function newFactory()
    {
        return EjemplaresFactory::new();
    }

    protected $fillable = [
        'codigo_ejemplar',
        'observacion',
        'estado',
        'libro_id',
    ];

    public function libro()
    {
        return $this->belongsTo(libros::class);
    }

    public function detalles()
    {
        return $this->hasMany(detalle_prestamos::class, 'ejemplar_id');
    }
}
