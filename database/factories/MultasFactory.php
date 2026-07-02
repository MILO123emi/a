<?php

namespace Database\Factories;

use App\Models\multas;
use App\Models\prestamos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<multas>
 */
class MultasFactory extends Factory
{
    protected $model = multas::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prestamo_id' => prestamos::factory(),
            'monto' => $this->faker->randomFloat(2, 10, 500),
            'motivo' => $this->faker->randomElement([
                'Devolución tardía',
                'Ejemplar dañado',
                'Pérdida del ejemplar',
            ]),
            'estado' => $this->faker->randomElement(['PENDIENTE', 'PAGADA']),
            'fecha' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
