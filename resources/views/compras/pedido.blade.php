|@extends('layouts.app')

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

    .product-scroll-wrapper {
        overflow-x: auto;
        scrollbar-width: thin;
        scrollbar-color: #28a745 #f1f1f1;
    }

    .product-scroll-wrapper::-webkit-scrollbar {
        height: 8px;
    }

    .product-scroll-wrapper::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .product-scroll-wrapper::-webkit-scrollbar-thumb {
        background-color: #28a745;
        border-radius: 4px;
    }
</style>

<!-- Hero Principal -->
<section class="hero">
    <div class="container">
        <h1>Generadores de Energía Limpia </h1>
        <p>Ofrecemos productos innovadores para la generación de energía limpia y sostenible.</p>
    </div>
</section>



<!-- Tabla de Productos -->
<section id="productos" class="py-5">
    <div class="container">

        <div class="container py-5">
            <div class="row">

                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('storage/' . ($producto->imagen ?? 'productos/default.jpg')) }}"
                            class="card-img-top w-50 mx-auto" style="object-fit: cover; height: 300px;" alt="{{ $producto->nombre }}">
                        <div class="card-body">
                            <h3 class="card-title text-success fw-bold">{{ $producto->nombre }}</h3>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                            <p class="h4 text-brown fw-bold">${{ number_format($producto->precio, 2) }}</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card shadow-sm h-100 p-4">
                        <h4 class="mb-4">Formulario de Compra</h4>
                        <form method="POST" action="#">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                            </div>

                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>

                            <div class="mb-3">
                                <label for="tarjeta" class="form-label">Tarjeta de crédito</label>
                                <input type="text" class="form-control" id="tarjeta" name="tarjeta" maxlength="16" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100 mt-3">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <h4 class="text-center mb-4">Otros productos disponibles</h4>

    <div class="container-fluid px-4">
        <div class="product-scroll-wrapper" style="overflow-x: auto;">
            <div class="d-flex flex-nowrap gap-3 py-2">
                @foreach($productos as $p)
                <div class="card mx-auto" style="min-width: 200px; max-width: 200px;">
                    <img src="{{ asset('storage/' . ($p->imagen ?? 'productos/default.jpg')) }}"
                        class="card-img-top"
                        style="object-fit: cover; height: 150px;">
                    <div class="card-body">
                        <h6 class="card-title text-success fw-bold">{{ $p->nombre }}</h6>
                        <p class="small text-muted">${{ number_format($p->precio, 2) }}</p>
                        <a href="{{ route('compra', $p->id_producto) }}" class="btn btn-outline-success btn-sm w-100">Ver más</a>
                    </div>
                </div>
                @endforeach
            </div>
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
