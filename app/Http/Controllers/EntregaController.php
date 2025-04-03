<?php
namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Pedido;
use Illuminate\Http\Request;

class EntregaController extends Controller
{
    public function index()
    {
        $entregas = Entrega::with('pedido')->get();
        return view('admin.entregas.index', compact('entregas'));
    }

    public function create()
    {
        $pedidos = Pedido::all();
        return view('admin.entregas.create', compact('pedidos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pedido' => 'nullable|exists:pedidos,id_pedido',
            'fecha_entrega_estimada' => 'required|date',
            'fecha_entrega_real' => 'nullable|date',
            'estado' => 'required|in:Pendiente,En Ruta,Entregado',
        ]);

        Entrega::create($request->all());

        return redirect()->route('entregas.index')->with('success', 'Entrega registrada correctamente.');
    }

    public function edit($id)
    {
        $entrega = Entrega::findOrFail($id);
        $pedidos = Pedido::all();
        return view('admin.entregas.edit', compact('entrega', 'pedidos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pedido' => 'nullable|exists:pedidos,id_pedido',
            'fecha_entrega_estimada' => 'required|date',
            'fecha_entrega_real' => 'nullable|date',
            'estado' => 'required|in:Pendiente,En Ruta,Entregado',
        ]);

        $entrega = Entrega::findOrFail($id);
        $entrega->update($request->all());

        return redirect()->route('entregas.index')->with('success', 'Entrega actualizada correctamente.');
    }

    public function destroy($id)
    {
        Entrega::findOrFail($id)->delete();
        return redirect()->route('entregas.index')->with('success', 'Entrega eliminada correctamente.');
    }
}
