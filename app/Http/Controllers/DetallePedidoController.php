<?php
namespace App\Http\Controllers;

use App\Models\DetallePedido;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    public function index()
    {
        $detalles = DetallePedido::with('pedido', 'producto')->get();
        return view('admin.detalles_pedido.index', compact('detalles'));
    }

    public function create()
    {
        $pedidos = Pedido::all();
        $productos = Producto::all();
        return view('admin.detalles_pedido.create', compact('pedidos', 'productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pedido' => 'required|exists:pedidos,id_pedido',
            'id_producto' => 'required|exists:productos,id_producto',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0',
        ]);

        $request->merge([
            'subtotal' => $request->cantidad * $request->precio_unitario
        ]);

        DetallePedido::create($request->all());

        return redirect()->route('detalles_pedido.index')->with('success', 'Detalle registrado correctamente.');
    }

    public function edit($id)
    {
        $detalle = DetallePedido::findOrFail($id);
        $pedidos = Pedido::all();
        $productos = Producto::all();
        return view('admin.detalles_pedido.edit', compact('detalle', 'pedidos', 'productos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pedido' => 'required|exists:pedidos,id_pedido',
            'id_producto' => 'required|exists:productos,id_producto',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0',
        ]);

        $request->merge([
            'subtotal' => $request->cantidad * $request->precio_unitario
        ]);

        $detalle = DetallePedido::findOrFail($id);
        $detalle->update($request->all());

        return redirect()->route('detalles_pedido.index')->with('success', 'Detalle actualizado correctamente.');
    }

    public function destroy($id)
    {
        DetallePedido::findOrFail($id)->delete();
        return redirect()->route('detalles_pedido.index')->with('success', 'Detalle eliminado correctamente.');
    }
}
