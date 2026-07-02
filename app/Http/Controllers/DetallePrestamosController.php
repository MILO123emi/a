<?php

namespace App\Http\Controllers;

use App\Models\detalle_prestamos;
use Illuminate\Http\Request;

class DetallePrestamosController extends Controller
{
    //
    public function index(){
        $detalle_prestamos = detalle_prestamos::all();
        dd($detalle_prestamos);

    }

}
