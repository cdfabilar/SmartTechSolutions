@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Registrar Detalle de Pedido</h2>

    <form action="{{ route('detalles_pedido.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Pedido:</label>
            <select name="id_pedido" class="form-control" required>
                <option value="">-- Seleccionar --</option>
                @foreach($pedidos as $pedido)
                <option value="{{ $pedido->id_pedido }}">{{ $pedido->id_pedido }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Producto:</label>
            <select name="id_producto" class="form-control" required>
                <option value="">-- Seleccionar --</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id_producto }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Cantidad:</label>
            <input type="number" name="cantidad" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Precio Unitario:</label>
            <input type="number" step="0.01" name="precio_unitario" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('detalles_pedido.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
