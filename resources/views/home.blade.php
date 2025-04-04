@extends('layouts.app')

@section('content')

<style>
    main {
        background: rgb(229, 255, 235);
    }

    .hero {
        background: linear-gradient(to right, #28a745, #218838);
        color: white;
        padding: 5rem 1rem;
        text-align: center;
        border-radius: 0 0 300px 300px;
    }

    .hero h1 {
        font-weight: bold;
        font-size: 2.8rem;
    }

    .hero p {
        font-size: 1.2rem;
        opacity: 0.95;
    }

    .info-card {
        transition: transform 0.2s ease-in-out;
    }

    .info-card:hover {
        transform: translateY(-5px);
    }

    #tabla-productos img {
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #tabla-productos th {
        background-color: #28a745;
        color: white;
    }
</style>

<!-- Hero Principal -->
<section class="hero">
    <div class="container">
        <h1>Generadores de Energía Limpia</h1>
        <p>Ofrecemos productos innovadores para la generación de energía limpia y sostenible.</p>
        <a href="#productos" class="btn btn-light btn-lg mt-4">Ver productos</a>
    </div>
</section>

<!-- Beneficios / Mensaje institucional -->
<section class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow-sm info-card">
                    <h5 class="fw-bold">Energía Sustentable</h5>
                    <p>Contribuye al planeta utilizando fuentes de energía que no contaminan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow-sm info-card">
                    <h5 class="fw-bold">Tecnología Innovadora</h5>
                    <p>Usamos lo último en sistemas solares y generadores híbridos.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow-sm info-card">
                    <h5 class="fw-bold">Ahorro Garantizado</h5>
                    <p>Reduce tu factura eléctrica desde el primer mes con nuestros productos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tabla de Productos -->
<section id="productos" class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Nuestros Generadores</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach($productos as $producto)
            <div class="col">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <img src="{{ asset('storage/' . ($producto->imagen ?? 'productos/default.jpg')) }}"
                        class="card-img-top img-fluid"
                        alt="{{ $producto->nombre }}"
                        style="object-fit: cover; height: 200px;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-success fw-semibold">{{ $producto->nombre }}</h5>
                        <p class="text-muted small mb-2">Stock: {{ $producto->stock }}</p>
                        <p class="card-text text-secondary small" style="min-height: 60px;">
                            {{ Str::limit($producto->descripcion, 100) }}
                        </p>

                        <div class="mt-auto">
                            <p class="fw-bold text-brown h5">${{ number_format($producto->precio, 2) }}</p>

                            <a href="#" class="btn btn-success btn-sm w-100 mt-2">
                                Ver más
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Llamado a la acción -->
<section class="py-5 bg-success text-white text-center">
    <div class="container">
        <h2 class="fw-bold">¡Haz el cambio hacia la energía limpia!</h2>
        <p class="lead">Contáctanos y recibe asesoría gratuita para tu proyecto energético.</p>


    </div>
</section>


@endsection