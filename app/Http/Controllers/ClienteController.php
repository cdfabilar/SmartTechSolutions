<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
public function index()
{
    $clientes = Cliente::all();
    return view('admin.clientes.index', compact('clientes'));
}

public function edit($id)
{
    $cliente = Cliente::findOrFail($id);
    return view('admin.clientes.edit', compact('cliente'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:100',
        'email' => 'required|email|max:100|unique:clientes,email,' . $id . ',id_cliente',
        'telefono' => 'nullable|string|max:20',
        'direccion' => 'required|string',
    ]);

    $cliente = Cliente::findOrFail($id);
    $cliente->update($request->all());

    return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');
}

public function destroy($id)
{
    Cliente::findOrFail($id)->delete();
    return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente');
}

public function create()
{
    return view('admin.clientes.create');
}


public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:100',
        'email' => 'required|email|max:100|unique:clientes,email',
        'telefono' => 'nullable|string|max:20',
        'direccion' => 'required|string',
    ]);

    Cliente::create($request->all());

    return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente.');
}

}
