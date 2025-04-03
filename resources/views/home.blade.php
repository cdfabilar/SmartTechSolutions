@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tienda - Productos disponibles</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($productos as $producto)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text text-truncate" style="max-height: 60px;">
                        {{ $producto->descripcion }}
                    </p>
                    <div class="mt-auto">
                        <p class="fw-bold mb-2">${{ number_format($producto->precio, 2) }}</p>
                        <p class="text-muted mb-1">Stock: {{ $producto->stock }}</p>
                        <a href="#" class="btn btn-sm btn-primary w-100">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
