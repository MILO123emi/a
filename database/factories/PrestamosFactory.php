<?php

namespace Database\Factories;

use App\Models\empleados;
use App\Models\estudiantes;
use App\Models\prestamos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<prestamos>
 */
class PrestamosFactory extends Factory
{
    protected $model = prestamos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fechaPrestamo = $this->faker->dateTimeBetween('-2 months', 'now');
        $fechaLimite = (clone $fechaPrestamo)->modify('+15 days');
        $estado = $this->faker->randomElement(['ACTIVO', 'DEVUELTO', 'ATRASADO']);

        return [
            'fecha_prestamo' => $fechaPrestamo,
            'fecha_limite' => $fechaLimite,
            'fecha_devolucion' => $estado === 'DEVUELTO'
                ? $this->faker->dateTimeBetween($fechaPrestamo, $fechaLimite)
                : null,
            'estado' => $estado,
            'estudiante_id' => estudiantes::factory(),
            'empleado_id' => empleados::factory(),
        ];
    }
}
