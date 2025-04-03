@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Editar Entrega</h2>

    <form action="{{ route('entregas.update', $entrega->id_entrega) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Pedido:</label>
            <select name="id_pedido" class="form-control">
                <option value="">-- Seleccionar --</option>
                @foreach($pedidos as $pedido)
                <option value="{{ $pedido->id_pedido }}" {{ $pedido->id_pedido == $entrega->id_pedido ? 'selected' : '' }}>
                    {{ $pedido->id_pedido }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha Estimada:</label>
            <input type="date" class="form-control" name="fecha_entrega_estimada" value="{{ $entrega->fecha_entrega_estimada }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha Real:</label>
            <input type="date" class="form-control" name="fecha_entrega_real" value="{{ $entrega->fecha_entrega_real }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Estado:</label>
            <select name="estado" class="form-control" required>
                @foreach(['Pendiente', 'En Ruta', 'Entregado'] as $estado)
                <option value="{{ $estado }}" {{ $estado == $entrega->estado ? 'selected' : '' }}>{{ $estado }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('entregas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
