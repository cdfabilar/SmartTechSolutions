@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Editar Cliente</h2>

    <form action="{{ route('clientes.update', $cliente->id_cliente) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_usuario" class="form-label">Seleccionar Usuario:</label>
            <select class="form-control" name="id_usuario" required>
                <option value="">Seleccionar usuario</option>
                @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}"
                    {{ $usuario->id == $cliente->id_usuario ? 'selected' : '' }}>
                    {{ $usuario->name }} ({{ $usuario->email }})
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <textarea class="form-control" name="direccion" required>{{ $cliente->direccion }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
