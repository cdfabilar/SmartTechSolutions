<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\EntregaController;


//Rutas Publicas para cualquier usuario

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



Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/catalogo/pedido/{id}', [HomeController::class, 'pedido'])->name('compra');

// Ruta solo accesible por el admin
Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->role == 'admin') {
        return view('admin.dashboard'); // Ruta del administrador
    }

    // Redirigir si no es administrador o no está autenticado
    return redirect('/')->with('error', 'No tienes acceso a esta página.');
})->name('admin.dashboard');

Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
Route::resource('repartidor', RepartidorController::class);
Route::resource('ventas', VentaController::class);
Route::resource('entregas', EntregaController::class);
