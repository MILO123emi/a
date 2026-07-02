<?php

namespace Database\Factories;

use App\Models\categorias;
use App\Models\libros;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<libros>
 */
class LibrosFactory extends Factory
{
    protected $model = libros::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->ean8(),
            'titulo' => $this->faker->sentence(3),
            'autor' => $this->faker->name(),
            'editorial' => $this->faker->company(),
            'anio_publicacion' => $this->faker->numberBetween(1950, 2025),
            'descripcion' => $this->faker->text(),
            'categoria_id' => categorias::factory(),
        ];
    }
}
