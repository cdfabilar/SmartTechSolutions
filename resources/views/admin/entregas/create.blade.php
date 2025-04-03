@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Registrar Entrega</h2>

    <form action="{{ route('entregas.store') }}" method="POST">
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
            <label class="form-label">Fecha Estimada:</label>
            <input type="date" class="form-control" name="fecha_entrega_estimada" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha Real:</label>
            <input type="date" class="form-control" name="fecha_entrega_real">
        </div>

        <div class="mb-3">
            <label class="form-label">Estado:</label>
            <select name="estado" class="form-control" required>
                <option>Pendiente</option>
                <option>En Ruta</option>
                <option>Entregado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('entregas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
