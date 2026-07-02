<?php

namespace Database\Factories;

use App\Models\detalle_prestamos;
use App\Models\ejemplares;
use App\Models\prestamos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<detalle_prestamos>
 */
class DetallePrestamosFactory extends Factory
{
    protected $model = detalle_prestamos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $devuelto = $this->faker->boolean(40);

        return [
            'prestamo_id' => prestamos::factory(),
            'ejemplar_id' => ejemplares::factory(),
            'devuelto' => $devuelto,
            'fecha_devolucion' => $devuelto ? $this->faker->dateTimeBetween('-1 month', 'now') : null,
        ];
    }
}
