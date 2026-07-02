<?php

namespace Database\Factories;

use App\Models\empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<empleados>
 */
class EmpleadosFactory extends Factory
{
    protected $model = empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->name(),
            'dni' => $this->faker->unique()->ean8(),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'cargo'=>$this->faker->randomElement(['1','2','3','4','5','6','7','8','9']),

        ];
    }
}
