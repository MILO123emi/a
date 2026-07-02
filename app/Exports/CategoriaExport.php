<?php

namespace App\Exports;

use App\Models\categorias;
use Maatwebsite\Excel\Concerns\FromCollection;

class CategoriaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return categorias::select('id', 'nombre', 'descripcion') -> get();
    }


    public function headings(): array{
        return ['Id', 'Nombre', 'Descripcion'];
    }

    public function export(){
        return Excel::download(new CategoriaExport, 'categorias.xlsx');
    }
}


