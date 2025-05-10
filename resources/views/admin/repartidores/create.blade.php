@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Registrar Nuevo Repartidor</h2>

    <form action="{{ route('repartidor.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_usuario" class="form-label">Seleccionar Usuario:</label>
            <select class="form-control" name="id_usuario" required>
                <option value="">Seleccionar usuario</option>
                @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }} ({{ $usuario->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <textarea class="form-control" name="direccion" required>{{ old('direccion') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso:</label>
            <input type="date" class="form-control" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}" required>
        </div>

        <div class="mb-3">
            <label for="entregas_totales" class="form-label">Entregas Totales:</label>
            <input type="number" class="form-control" name="entregas_totales" value="{{ old('entregas_totales') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('repartidor.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
