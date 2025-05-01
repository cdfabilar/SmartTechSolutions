<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\HomeController;

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
Route::resource('pedidos', PedidoController::class);
Route::resource('pagos', PagoController::class);
Route::resource('entregas', EntregaController::class);
Route::resource('detalles_pedido', DetallePedidoController::class);
