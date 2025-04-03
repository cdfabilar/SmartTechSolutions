@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Registrar Pedido</h2>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Cliente:</label>
            <select name="id_cliente" class="form-control">
                <option value="">-- Seleccionar --</option>
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Total:</label>
            <input type="number" step="0.01" class="form-control" name="total" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado:</label>
            <select name="estado" class="form-control" required>
                <option>Pendiente</option>
                <option>En Proceso</option>
                <option>Enviado</option>
                <option>Entregado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
