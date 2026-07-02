<?php

namespace Database\Seeders;

use App\Models\categorias;
use App\Models\libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // recycle() reutiliza las categorias existentes en vez de crear nuevas
        libros::factory()
            ->count(30)
            ->recycle(categorias::all())
            ->create();
    }
}
