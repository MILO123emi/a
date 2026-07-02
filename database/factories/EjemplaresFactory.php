<?php

namespace Database\Factories;

use App\Models\ejemplares;
use App\Models\libros;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ejemplares>
 */
class EjemplaresFactory extends Factory
{
    protected $model = ejemplares::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo_ejemplar' => $this->faker->unique()->ean8(),
            'observacion' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement(['DISPONIBLE', 'Prestado']),
            'libro_id' => libros::factory(),
        ];
    }
}
