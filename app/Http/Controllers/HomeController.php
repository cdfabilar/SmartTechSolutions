<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // o ->paginate(12) si quieres paginar
        return view('home', compact('productos'));
    }

    public function pedido($id)
    {
        $producto = \App\Models\Producto::findOrFail($id);
        $productos = \App\Models\Producto::where('id_producto', '!=', $id)->get();
        return view('compras.pedido', compact('producto', 'productos'));
    }
}
