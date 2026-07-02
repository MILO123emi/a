<?php

namespace App\Models;

use Database\Factories\CategoriasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriasFactory> */
    use HasFactory;

    protected static function newFactory()
    {
        return CategoriasFactory::new();
    }

    protected $fillable = [
        'nombre',
        'descripcion'

    ];

    public function libros(){
        return $this->hasMany(libros::class, 'categoria_id');
    }


}
