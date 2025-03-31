<?php

use Illuminate\Support\Facades\Route;

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
