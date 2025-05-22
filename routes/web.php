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

Route::get('/gracias', function () {
    return view('compras/gracias');
})->name('gracias');



Auth::routes();



Route::get('/home', [HomeController::class, 'index'])->name('home');


// Ruta solo accesible por el admin
Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->role == 'admin') {
        return view('admin.dashboard');
    }


    return redirect('/')->with('error', 'No tienes acceso a esta página.');
})->name('admin.dashboard');

Route::get('/welcomerep', function () {
    if (Auth::check() && Auth::user()->role == 'rep') {
        return view('repartidores.welcomerep');
    }
    return redirect('/')->with('error', 'No tienes acceso a esta página.');
})->name('repartidores.welcomerep');



Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
Route::resource('repartidor', RepartidorController::class);
Route::resource('ventas', VentaController::class);
Route::resource('entregas', EntregaController::class);




Route::get('/catalogo/pedido/{id}', [VentaController::class, 'realizarCompra'])->name('compra');

Route::post('/procesar-venta', [VentaController::class, 'procesarVenta'])->name('venta.procesar');
