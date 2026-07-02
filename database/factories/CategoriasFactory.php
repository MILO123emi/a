<?php

namespace Database\Factories;

use App\Models\categorias;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<categorias>
 */
class CategoriasFactory extends Factory
{
    protected $model = categorias::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nombre' => fake() -> unique()-> words(2, true),
            'descripcion' => fake()-> paragraph(),
            //

        ];
    }
}
