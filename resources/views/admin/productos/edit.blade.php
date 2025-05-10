@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Editar Producto</h2>

    <form action="{{ route('productos.update', $producto->id_producto) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción:</label>
            <textarea class="form-control" name="descripcion">{{ $producto->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Precio:</label>
            <input type="number" step="0.01" class="form-control" name="precio" value="{{ $producto->precio }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stock:</label>
            <input type="number" class="form-control" name="stock" value="{{ $producto->stock }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Imagen:</label>
            <input type="file" class="form-control" name="imagen">
            @if($producto->imagen)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $producto->imagen) }}" alt="Imagen del producto" class="img-thumbnail" width="100">
            </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
