<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/equipo', function () {
    return view('equipo');
})->name('equipo');
Route::get('/historia', function () {
    return view('historia');
})->name('historia');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta solo accesible por el admin
Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->role == 'admin') {
        return view('admin.dashboard'); // Ruta del administrador
    }

    // Redirigir si no es administrador o no está autenticado
    return redirect('/')->with('error', 'No tienes acceso a esta página.');
})->name('admin.dashboard');
