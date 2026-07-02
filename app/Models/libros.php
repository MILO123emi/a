<?php

namespace App\Models;

use Database\Factories\LibrosFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    /** @use HasFactory<\Database\Factories\LibrosFactory> */
    use HasFactory;

    protected static function newFactory()
    {
        return LibrosFactory::new();
    }

    protected $fillable = [
        'codigo',
        'titulo',
        'autor',
        'editorial',
        'anio_publicacion',
        'descripcion',
        'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(categorias::class);
    }

    public function ejemplares()
    {
        return $this->hasMany(ejemplares::class, 'libro_id');
    }
}
