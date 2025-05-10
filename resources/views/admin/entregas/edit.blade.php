@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Editar Entrega</h2>

    <form action="{{ route('entregas.update', $entrega->id_entrega) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_venta" class="form-label">Venta:</label>
            <select class="form-control" name="id_venta" required>
                <option value="">Seleccionar Venta</option>
                @foreach($ventas as $venta)
                <option value="{{ $venta->id_venta }}" {{ $venta->id_venta == $entrega->id_venta ? 'selected' : '' }}>
                    {{ $venta->id_venta }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_repartidor" class="form-label">Repartidor:</label>
            <select class="form-control" name="id_repartidor" required>
                <option value="">Seleccionar Repartidor</option>
                @foreach($repartidores as $repartidor)
                <option value="{{ $repartidor->id_repartidor }}" {{ $repartidor->id_repartidor == $entrega->id_repartidor ? 'selected' : '' }}>
                    {{ $repartidor->usuario->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <select class="form-control" name="estado" required>
                <option value="pendiente" {{ $entrega->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="en curso" {{ $entrega->estado == 'en curso' ? 'selected' : '' }}>En Curso</option>
                <option value="entregado" {{ $entrega->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Actualizar Entrega</button>
        <a href="{{ route('entregas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
