@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Detalles de Pedidos</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('detalles_pedido.create') }}" class="btn btn-primary mb-3">Agregar Detalle</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pedido</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Subtotal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detalles as $detalle)
            <tr>
                <td>{{ $detalle->id_detalle }}</td>
                <td>{{ $detalle->pedido->id_pedido ?? '-' }}</td>
                <td>{{ $detalle->producto->nombre ?? '-' }}</td>
                <td>{{ $detalle->cantidad }}</td>
                <td>${{ $detalle->precio_unitario }}</td>
                <td>${{ $detalle->subtotal }}</td>
                <td>
                    <a href="{{ route('detalles_pedido.edit', $detalle->id_detalle) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('detalles_pedido.destroy', $detalle->id_detalle) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este detalle?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
