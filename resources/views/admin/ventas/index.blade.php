@extends('layouts.menuADM')

@section('content')

<style>
    body {
        background-color: #edf1f5;
        font-family: 'Segoe UI', 'Helvetica Neue', sans-serif;
    }

    .container {
        margin-top: 60px;
        padding: 40px;
        background-color: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    }

    h2 {
        color: #2d3436;
        font-size: 1.8rem;
        font-weight: 600;
        margin-bottom: 30px;
        position: relative;
    }

    h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 3px;
        background-color: #ff4d4f;
        border-radius: 2px;
    }

    .btn-primary {
        background: linear-gradient(to right, #ff4d4f, #c0392b);
        border: none;
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(255, 77, 79, 0.3);
        transition: 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(to right, #c0392b, #ff4d4f);
        transform: translateY(-2px);
    }

    .btn-warning, .btn-danger {
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 6px;
        border: none;
    }

    .btn-warning {
        background-color: #f1c40f;
        color: #212529;
    }

    .btn-danger {
        background-color: #e74c3c;
    }

    .alert-success {
        background-color: #eafaf1;
        color: #2e7d32;
        border-left: 5px solid #27ae60;
        padding: 10px 20px;
        border-radius: 6px;
        font-size: 0.95rem;
        font-weight: 500;
    }

    table {
        margin-top: 20px;
        border-radius: 10px;
        overflow: hidden;
    }

    thead th {
        background-color: #2c3e50;
        color: #ffffff;
        text-align: center;
        padding: 14px;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
    }

    tbody td {
        text-align: center;
        vertical-align: middle;
        background-color: #fdfdfd;
        padding: 14px;
        font-size: 0.95rem;
    }

    img {
        width: 250px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    form {
        display: inline-block;
    }

    .table-container {
        overflow-x: auto;
    }
</style>

<div class="container">
    <h2>Lista de Ventas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">+ Registrar Nueva Venta</a>

    <div class="table-container">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>ID Venta</th>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Tarjeta</th>
                    <th>CVV</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ventas as $venta)
                    <tr>
                        <td>{{ $venta->id_venta }}</td>
                        <td>{{ optional($venta->cliente->usuario)->name ?? 'No asignado' }}</td>
                        <td>{{ optional($venta->producto)->nombre ?? 'Producto eliminado' }}</td>
                        <td>{{ $venta->cantidad }}</td>
                        <td>${{ number_format($venta->total, 2) }}</td>
                        <td>{{ $venta->tarjeta_credito }}</td>
                        <td>{{ $venta->cvv }}</td>
                        <td>{{ \Carbon\Carbon::parse($venta->fecha_venta)->format('d/m/Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($venta->hora_venta)->format('H:i') }}</td>
                        <td>
                            <a href="{{ route('ventas.edit', $venta->id_venta) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('ventas.destroy', $venta->id_venta) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta venta?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">No hay ventas registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
