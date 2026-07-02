<?php

namespace Database\Seeders;

use App\Models\multas;
use App\Models\prestamos;
use Illuminate\Database\Seeder;

class MultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Solo los prestamos atrasados generan multa
        prestamos::where('estado', 'ATRASADO')->get()->each(function ($prestamo) {
            multas::factory()->create([
                'prestamo_id' => $prestamo->id,
            ]);
        });
    }
}
