<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // o ->paginate(12) si quieres paginar
        return view('home', compact('productos'));
    }
}
