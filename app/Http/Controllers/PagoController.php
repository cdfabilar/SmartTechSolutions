<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with('pedido')->get();
        return view('admin.pagos.index', compact('pagos'));
    }

    public function create()
    {
        $pedidos = Pedido::all();
        return view('admin.pagos.create', compact('pedidos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pedido' => 'nullable|exists:pedidos,id_pedido',
            'metodo_pago' => 'required|in:Tarjeta de Crédito,Tarjeta de Débito,PayPal',
            'monto' => 'required|numeric',
        ]);

        Pago::create($request->all());

        return redirect()->route('pagos.index')->with('success', 'Pago registrado correctamente.');
    }

    public function edit($id)
    {
        $pago = Pago::findOrFail($id);
        $pedidos = Pedido::all();
        return view('admin.pagos.edit', compact('pago', 'pedidos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pedido' => 'nullable|exists:pedidos,id_pedido',
            'metodo_pago' => 'required|in:Tarjeta de Crédito,Tarjeta de Débito,PayPal',
            'monto' => 'required|numeric',
        ]);

        $pago = Pago::findOrFail($id);
        $pago->update($request->all());

        return redirect()->route('pagos.index')->with('success', 'Pago actualizado correctamente.');
    }

    public function destroy($id)
    {
        Pago::findOrFail($id)->delete();
        return redirect()->route('pagos.index')->with('success', 'Pago eliminado correctamente.');
    }
}
