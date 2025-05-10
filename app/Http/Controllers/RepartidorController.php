<?php

namespace App\Http\Controllers;

use App\Models\Repartidor;
use Illuminate\Http\Request;
use App\Models\User;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $repartidores = Repartidor::with('usuario')->get();
        return view('admin.repartidores.index', compact('repartidores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $usuarios = User::all();
        return view('admin.repartidores.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_usuario' => 'required|exists:users,id',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'fecha_ingreso' => 'required|date',
            'entregas_totales' => 'required|integer',
        ]);

        Repartidor::create([
            'id_usuario' => $request->id_usuario,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'fecha_ingreso' => $request->fecha_ingreso,
            'entregas_totales' => $request->entregas_totales,
        ]);

        return redirect()->route('repartidor.index')->with('success', 'Proveedor creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Repartidor $repartidor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Repartidor $repartidor)
    {
        //
        $usuarios = User::all();
        return view('admin.repartidores.edit', compact('repartidor', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Repartidor $repartidor)
    {
        //
        $request->validate([
            'id_usuario' => 'required|exists:users,id',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'fecha_ingreso' => 'required|date',
            'entregas_totales' => 'required|integer',
        ]);

        $repartidor->update([
            'id_usuario' => $request->id_usuario,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'fecha_ingreso' => $request->fecha_ingreso,
            'entregas_totales' => $request->entregas_totales,
        ]);

        return redirect()->route('repartidor.index')->with('success', 'Repartidor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repartidor $repartidor)
    {
        //
        $repartidor->delete();
        return redirect()->route('repartidor.index')->with('success', 'Repartidor eliminado correctamente');
    }
}
