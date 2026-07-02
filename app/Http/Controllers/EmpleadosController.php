<?php

namespace App\Http\Controllers;

use App\Models\detalle_prestamos;
use App\Models\empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    //
    public function index(){
        $empleados = empleados::all();
        dd($empleados);

    }


}
