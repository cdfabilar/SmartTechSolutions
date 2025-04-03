@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Producto</h2>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción:</label>
            <textarea class="form-control" name="descripcion"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Precio:</label>
            <input type="number" step="0.01" class="form-control" name="precio" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stock:</label>
            <input type="number" class="form-control" name="stock" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
