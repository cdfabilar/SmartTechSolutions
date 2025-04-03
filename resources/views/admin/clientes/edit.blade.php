@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Cliente</h2>

    <form action="{{ route('clientes.update', $cliente->id_cliente) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ $cliente->email }}" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="{{ $cliente->telefono }}">
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
