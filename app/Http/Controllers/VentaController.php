<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ventas = Venta::with(['cliente', 'producto'])->get();
        return view('admin.ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('admin.ventas.create', compact('clientes', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'id_producto' => 'required|exists:productos,id_producto',
            'cantidad' => 'required|integer',
            'total' => 'required|numeric',
            'tarjeta_credito' => 'required|string|max:16',
            'cvv' => 'required|string|max:4',
            'fecha_venta' => 'required|date',
        ]);

        Venta::create([
            'id_cliente' => $request->id_cliente,
            'id_producto' => $request->id_producto,
            'cantidad' => $request->cantidad,
            'total' => $request->total,
            'tarjeta_credito' => $request->tarjeta_credito,
            'cvv' => $request->cvv,
            'fecha_venta' => $request->fecha_venta,
            'hora_venta' => $request->hora_venta,
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta registrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        //
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('admin.ventas.edit', compact('venta', 'clientes', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        //
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'id_producto' => 'required|exists:productos,id_producto',
            'cantidad' => 'required|integer',
            'total' => 'required|numeric',
            'tarjeta_credito' => 'nullable|string|max:16',
            'cvv' => 'nullable|string|max:4',
            'fecha_venta' => 'required|date',
        ]);

        $venta->update([
            'id_cliente' => $request->id_cliente,
            'id_producto' => $request->id_producto,
            'cantidad' => $request->cantidad,
            'total' => $request->total,
            'tarjeta_credito' => $request->tarjeta_credito,
            'cvv' => $request->cvv,
            'fecha_venta' => $request->fecha_venta,
            'hora_venta' => $request->hora_venta,
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        //
        $venta->delete();
        return redirect()->route('ventas.index')->with('success', 'Venta eliminada correctamente.');
    }
}
