<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Venta;
use App\Models\Repartidor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $entregas = Entrega::with(['venta', 'repartidor'])->get();

        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('admin.entregas.index', compact('entregas'));
        }

        return redirect('/')->with('error', 'No tienes acceso a esta página.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $ventas = Venta::all();
        $repartidores = Repartidor::all();
        return view('admin.entregas.create', compact('ventas', 'repartidores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_venta' => 'required|exists:ventas,id_venta',
            'estado' => 'required|in:pendiente,en curso,entregado',
            'id_repartidor' => 'required|exists:repartidores,id_repartidor',
        ]);

        Entrega::create([
            'id_venta' => $request->id_venta,
            'estado' => $request->estado,
            'id_repartidor' => $request->id_repartidor,
        ]);

        return redirect()->route('entregas.index')->with('success', 'Entrega registrada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrega $entrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrega $entrega)
    {
        //
        $ventas = Venta::all();
        $repartidores = Repartidor::all();
        return view('admin.entregas.edit', compact('entrega', 'ventas', 'repartidores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrega $entrega)
    {
        //
        $request->validate([
            'id_venta' => 'required|exists:ventas,id_venta',
            'estado' => 'required|in:pendiente,en curso,entregado',
            'id_repartidor' => 'required|exists:repartidores,id_repartidor',
        ]);

        $entrega->update([
            'id_venta' => $request->id_venta,
            'estado' => $request->estado,
            'id_repartidor' => $request->id_repartidor,
        ]);

        return redirect()->route('entregas.index')->with('success', 'Entrega actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrega $entrega)
    {
        //
        $entrega->delete();
        return redirect()->route('entregas.index')->with('success', 'Entrega eliminada correctamente');
    }
}
