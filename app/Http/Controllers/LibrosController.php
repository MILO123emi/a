<?php

namespace App\Http\Controllers;

use App\Models\detalle_prestamos;
use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    //
    public function index(){
        $libro =libros::all();
        dd($libro);

    }


}
