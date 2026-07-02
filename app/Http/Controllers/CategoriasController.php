<?php

namespace App\Http\Controllers;

use App\Exports\CategoriaExport;
use App\Models\categorias;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class CategoriasController extends Controller
{
    //
    public function index(){
        $categorias = categorias::all();



        return Inertia::render('Categorias/Index',
            [
                'categorias'=> $categorias
            ]);
    }

    public function export(){
        return Excel::download(new CategoriaExport, 'categorias.xlsx');
    }
}
