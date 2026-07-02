<?php

namespace Database\Factories;

use App\Models\estudiantes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<estudiantes>
 */
class EstudiantesFactory extends Factory
{
    protected $model = estudiantes::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'dni' => $this->faker->unique()->ean13(),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
