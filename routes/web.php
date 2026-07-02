<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Http\Controllers\EstudiantesController;
use \App\Http\Controllers\DetallePrestamosController;
use \App\Http\Controllers\EjemplaresController;
use \App\Http\Controllers\EmpleadosController;
use \App\Http\Controllers\LibrosController;
use \App\Http\Controllers\MultasController;
use \App\Http\Controllers\PrestamosController;




Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/test-vuetify', function(){
    return Inertia::render("TestVuetify");
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/Categorias/Index', [CategoriasController::class, 'index']);


Route::get('/estudiantes', [EstudiantesController::class, 'index']);

Route::get('/detalles', [DetallePrestamosController::class, 'index']);
Route::get('/ejemplares', [EjemplaresController::class, 'index']);
Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::get('/libros', [LibrosController::class, 'index']);
Route::get('/multas', [MultasController::class, 'index']);
Route::get('/prestamos', [PrestamosController::class, 'index']);
Route::get('/detalles', [DetallePrestamosController::class, 'index']);

Route::get('/categorias/export', [CategoriasController::class, 'export']) -> name('categorias.export');


require __DIR__.'/auth.php';


