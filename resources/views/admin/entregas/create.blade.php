@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Registrar Nueva Entrega</h2>

    <form action="{{ route('entregas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_venta" class="form-label">Venta:</label>
            <select class="form-control" name="id_venta" required>
                <option value="">Seleccionar Venta</option>
                @foreach($ventas as $venta)
                <option value="{{ $venta->id_venta }}">{{ $venta->id_venta }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_repartidor" class="form-label">Repartidor:</label>
            <select class="form-control" name="id_repartidor" required>
                <option value="">Seleccionar Repartidor</option>
                @foreach($repartidores as $repartidor)
                <option value="{{ $repartidor->id_repartidor }}">{{ $repartidor->usuario->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <select class="form-control" name="estado" required>
                <option value="">Seleccionar Estado</option>
                <option value="pendiente">Pendiente</option>
                <option value="en curso">En Curso</option>
                <option value="entregado">Entregado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Entrega</button>
        <a href="{{ route('entregas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
