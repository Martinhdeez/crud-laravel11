<?php

use App\Http\Controllers\StudentController; // Asegúrate de importar el controlador

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Definición de rutas para el recurso 'students'
    Route::resource('students', StudentController::class);
});
