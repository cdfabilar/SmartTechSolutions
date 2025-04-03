@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Listado de Pedidos</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pedidos.create') }}" class="btn btn-primary mb-3">Nuevo Pedido</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id_pedido }}</td>
                <td>{{ $pedido->cliente->nombre ?? 'Sin cliente' }}</td>
                <td>{{ $pedido->fecha_pedido }}</td>
                <td>${{ $pedido->total }}</td>
                <td>{{ $pedido->estado }}</td>
                <td>
                    <a href="{{ route('pedidos.edit', $pedido->id_pedido) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('pedidos.destroy', $pedido->id_pedido) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este pedido?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
