<?php

namespace Database\Seeders;

use App\Models\estudiantes;
use Illuminate\Database\Seeder;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        estudiantes::factory()->count(40)->create();
    }
}
