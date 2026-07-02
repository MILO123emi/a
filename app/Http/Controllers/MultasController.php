<?php

namespace App\Http\Controllers;

use App\Models\detalle_prestamos;
use App\Models\multas;
use Illuminate\Http\Request;

class MultasController extends Controller
{
    //
    public function index(){
        $multas = multas::all();
        dd($multas);

    }


}
