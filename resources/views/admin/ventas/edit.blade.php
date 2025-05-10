@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Editar Venta</h2>

    <form action="{{ route('ventas.update', $venta->id_venta) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_cliente" class="form-label">Cliente:</label>
            <select class="form-control" name="id_cliente" required>
                <option value="">Seleccionar Cliente</option>
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}" {{ $venta->id_cliente == $cliente->id_cliente ? 'selected' : '' }}>{{ $cliente->usuario->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_producto" class="form-label">Producto:</label>
            <select class="form-control" name="id_producto" required>
                <option value="">Seleccionar Producto</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id_producto }}" {{ $venta->id_producto == $producto->id_producto ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" value="{{ $venta->cantidad }}" required>
        </div>

        <div class="mb-3">
            <label for="total" class="form-label">Total:</label>
            <input type="number" step="0.01" class="form-control" name="total" value="{{ $venta->total }}" required>
        </div>

        <div class="mb-3">
            <label for="tarjeta_credito" class="form-label">Tarjeta de Crédito:</label>
            <input type="text" class="form-control" name="tarjeta_credito" value="{{ $venta->tarjeta_credito }}" required>
        </div>

        <div class="mb-3">
            <label for="cvv" class="form-label">CVV:</label>
            <input type="text" class="form-control" name="cvv" value="{{ $venta->cvv }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_venta" class="form-label">Fecha de Venta:</label>
            <input type="date" class="form-control" name="fecha_venta" value="{{ $venta->fecha_venta }}" required>
        </div>

        <div class="mb-3">
            <label for="hora_venta" class="form-label">Hora de Venta:</label>
            <input type="time" class="form-control" name="hora_venta" value="{{ $venta->hora_venta }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar Venta</button>
        <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
