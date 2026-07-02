<?php

namespace Database\Seeders;

use App\Models\empleados;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        empleados::factory()->count(8)->create();
    }
}
