<?php

namespace Database\Seeders;

use App\Models\ejemplares;
use App\Models\libros;
use Illuminate\Database\Seeder;

class EjemplaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ejemplares::factory()
            ->count(60)
            ->recycle(libros::all())
            ->create();
    }
}
