@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Lista de Ventas</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">Registrar Nueva Venta</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Venta</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id_venta }}</td>
                <td>{{ $venta->cliente->usuario->name }}</td>
                <td>{{ $venta->producto->nombre }}</td>
                <td>{{ $venta->cantidad }}</td>
                <td>${{ number_format($venta->total, 2) }}</td>
                <td>{{ $venta->fecha_venta }}</td>
                <td>{{ $venta->hora_venta }}</td>
                <td>
                    <a href="{{ route('ventas.edit', $venta->id_venta) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('ventas.destroy', $venta->id_venta) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta venta?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
