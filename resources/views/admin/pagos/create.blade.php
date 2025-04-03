@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Registrar Pago</h2>

    <form action="{{ route('pagos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Pedido:</label>
            <select name="id_pedido" class="form-control">
                <option value="">-- Seleccionar --</option>
                @foreach($pedidos as $pedido)
                    <option value="{{ $pedido->id_pedido }}">{{ $pedido->id_pedido }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Método de Pago:</label>
            <select name="metodo_pago" class="form-control" required>
                <option>Tarjeta de Crédito</option>
                <option>Tarjeta de Débito</option>
                <option>PayPal</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Monto:</label>
            <input type="number" step="0.01" class="form-control" name="monto" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('pagos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
