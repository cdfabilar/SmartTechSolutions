@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Editar Pedido</h2>

    <form action="{{ route('pedidos.update', $pedido->id_pedido) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Cliente:</label>
            <select name="id_cliente" class="form-control">
                <option value="">-- Seleccionar --</option>
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}" {{ $cliente->id_cliente == $pedido->id_cliente ? 'selected' : '' }}>
                    {{ $cliente->nombre }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Total:</label>
            <input type="number" step="0.01" class="form-control" name="total" value="{{ $pedido->total }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado:</label>
            <select name="estado" class="form-control" required>
                @foreach(['Pendiente', 'En Proceso', 'Enviado', 'Entregado'] as $estado)
                <option value="{{ $estado }}" {{ $estado == $pedido->estado ? 'selected' : '' }}>{{ $estado }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
