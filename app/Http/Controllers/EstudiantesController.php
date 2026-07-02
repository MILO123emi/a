<?php

namespace App\Http\Controllers;

use App\Models\estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    //
    public function index(){
        $estudiantes = estudiantes::all();

        dd($estudiantes);
    }
}
