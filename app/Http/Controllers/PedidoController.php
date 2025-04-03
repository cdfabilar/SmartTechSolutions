<?php
namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with('cliente')->get();
        return view('admin.pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('admin.pedidos.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'nullable|exists:clientes,id_cliente',
            'total' => 'required|numeric',
            'estado' => 'required|in:Pendiente,En Proceso,Enviado,Entregado',
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado correctamente.');
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        $clientes = Cliente::all();
        return view('admin.pedidos.edit', compact('pedido', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_cliente' => 'nullable|exists:clientes,id_cliente',
            'total' => 'required|numeric',
            'estado' => 'required|in:Pendiente,En Proceso,Enviado,Entregado',
        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado correctamente.');
    }

    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado correctamente.');
    }
}
