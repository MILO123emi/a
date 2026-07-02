<?php

namespace Database\Seeders;

use App\Models\empleados;
use App\Models\estudiantes;
use App\Models\prestamos;
use Illuminate\Database\Seeder;

class PrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        prestamos::factory()
            ->count(30)
            ->recycle(estudiantes::all())
            ->recycle(empleados::all())
            ->create();
    }
}
