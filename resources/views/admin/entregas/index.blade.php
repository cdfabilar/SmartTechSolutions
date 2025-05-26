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
    <h2>Lista de Entregas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('entregas.create') }}" class="btn btn-primary mb-3">+ Registrar Nueva Entrega</a>

    <div class="table-container">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Venta</th>
                    <th>Repartidor</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entregas as $entrega)
                <tr>
                    <td>{{ $entrega->id_entrega }}</td>
                    <td>{{ $entrega->venta->id_venta }}</td>
                    <td>{{ $entrega->repartidor->usuario->name }}</td>
                    <td>{{ $entrega->estado }}</td>
                    <td>
                        <a href="{{ route('entregas.edit', $entrega->id_entrega) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('entregas.destroy', $entrega->id_entrega) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta entrega?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
