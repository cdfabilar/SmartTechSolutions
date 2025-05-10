@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Editar Proveedor</h2>

    <form action="{{ route('repartidor.update', $repartidor->id_repartidor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_usuario" class="form-label">Seleccionar Usuario:</label>
            <select class="form-control" name="id_usuario" required>
                <option value="">Seleccionar usuario</option>
                @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}"
                    {{ $usuario->id == $repartidor->id_usuario ? 'selected' : '' }}>
                    {{ $usuario->name }} ({{ $usuario->email }})
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="{{ $repartidor->telefono }}" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <textarea class="form-control" name="direccion" required>{{ $repartidor->direccion }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso:</label>
            <input type="date" class="form-control" name="fecha_ingreso" value="{{ $repartidor->fecha_ingreso }}" required>
        </div>

        <div class="mb-3">
            <label for="entregas_totales" class="form-label">Entregas Totales:</label>
            <input type="number" class="form-control" name="entregas_totales" value="{{ $repartidor->entregas_totales }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('repartidor.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
