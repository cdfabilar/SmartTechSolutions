@extends('layouts.app')

@section('content')

<style>
    .hero {
        background: linear-gradient(to right, #28a745, #218838);
        color: white;
        padding: 5rem 1rem;
        text-align: center;
        border-radius: 0 0 30px 30px;
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
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
<section class="py-5 bg-light">
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

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle shadow-sm" id="tabla-productos">
                <thead class="text-center">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach([
                        ['nombre' => 'Generador Solar Portátil EcoPower 500W', 'desc' => 'Ideal para camping, hogares y oficinas pequeñas.', 'precio' => 1250, 'stock' => 20, 'img' => 'IMG/s1.webp'],
                        ['nombre' => 'Estación de Energía Solar 1000W Pro', 'desc' => 'Alta capacidad, batería de litio y panel solar incluido.', 'precio' => 2300, 'stock' => 12, 'img' => 'IMG/s2.jpg'],
                        ['nombre' => 'Kit Solar Residencial 3KW', 'desc' => 'Ideal para casas completas, incluye inversor y paneles.', 'precio' => 8400, 'stock' => 5, 'img' => 'IMG/s3.webp'],
                        ['nombre' => 'Generador Eólico Compacto 800W', 'desc' => 'Aprovecha el viento para generar energía sostenible.', 'precio' => 1900, 'stock' => 10, 'img' => 'IMG/s4.jpg'],
                        ['nombre' => 'Sistema Solar + Eólico Híbrido 1.5KW', 'desc' => 'Lo mejor de ambos mundos en un solo sistema.', 'precio' => 4600, 'stock' => 6, 'img' => 'IMG/s5.avif'],
                        ['nombre' => 'Panel Solar Flexible 200W', 'desc' => 'Ligero, portátil y resistente para superficies curvas.', 'precio' => 750, 'stock' => 30, 'img' => 'IMG/s6.jpg'],
                    ] as $i => $producto)
                    <tr>
                        <td class="text-center"><img src="{{ $producto['img'] }}" alt="producto" width="70" height="70"></td>
                        <td>{{ $producto['nombre'] }}</td>
                        <td>{{ $producto['desc'] }}</td>
                        <td class="fw-semibold text-success">${{ number_format($producto['precio'], 2) }}</td>
                        <td>{{ $producto['stock'] }}</td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
