@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Editar Pago</h2>

    <form action="{{ route('pagos.update', $pago->id_pago) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Pedido:</label>
            <select name="id_pedido" class="form-control">
                <option value="">-- Seleccionar --</option>
                @foreach($pedidos as $pedido)
                <option value="{{ $pedido->id_pedido }}" {{ $pedido->id_pedido == $pago->id_pedido ? 'selected' : '' }}>
                    {{ $pedido->id_pedido }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Método de Pago:</label>
            <select name="metodo_pago" class="form-control" required>
                @foreach(['Tarjeta de Crédito', 'Tarjeta de Débito', 'PayPal'] as $metodo)
                <option value="{{ $metodo }}" {{ $metodo == $pago->metodo_pago ? 'selected' : '' }}>
                    {{ $metodo }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Monto:</label>
            <input type="number" step="0.01" class="form-control" name="monto" value="{{ $pago->monto }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('pagos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
