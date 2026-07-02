<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CategoriasSeeder::class,
            LibrosSeeder::class,
            EjemplaresSeeder::class,
            EmpleadosSeeder::class,
            EstudiantesSeeder::class,
            PrestamosSeeder::class,
            DetallePrestamosSeeder::class,
            MultasSeeder::class,
        ]);
    }
}
