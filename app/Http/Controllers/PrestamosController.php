<?php

namespace App\Http\Controllers;

use App\Models\detalle_prestamos;
use App\Models\prestamos;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    //
    public function index(){
        $prestamo = prestamos::all();
        dd($prestamo);

    }


}
