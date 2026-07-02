<?php

namespace Database\Seeders;

use App\Models\detalle_prestamos;
use App\Models\ejemplares;
use App\Models\prestamos;
use Illuminate\Database\Seeder;

class DetallePrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ejemplares = ejemplares::all();

        // Cada prestamo lleva entre 1 y 3 ejemplares distintos
        prestamos::all()->each(function ($prestamo) use ($ejemplares) {
            $seleccion = $ejemplares->random(rand(1, 3));

            foreach ($seleccion as $ejemplar) {
                detalle_prestamos::factory()->create([
                    'prestamo_id' => $prestamo->id,
                    'ejemplar_id' => $ejemplar->id,
                ]);
            }
        });
    }
}
