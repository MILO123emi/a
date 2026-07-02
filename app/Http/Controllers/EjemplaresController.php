<?php

namespace App\Http\Controllers;

use App\Models\ejemplares;
use Illuminate\Http\Request;

class EjemplaresController extends Controller
{
    //
    public function index(){
        $ejemplar = ejemplares::all();

        dd($ejemplar);
    }
}
