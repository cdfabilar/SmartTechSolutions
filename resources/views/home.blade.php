@extends('layouts.app')

@section('content')

<!-- Estilos personalizados -->
<style>
    #tabla-productos {
        border-radius: 12px;
        overflow: hidden;
    }

    #tabla-productos th {
        background-color: #0d6efd;
        color: white;
        vertical-align: middle;
    }

    #tabla-productos td {
        vertical-align: middle;
    }

    #tabla-productos img {
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .hero {
        background: linear-gradient(to right, #0d6efd, #6610f2);
        color: white;
        padding: 4rem 1rem;
        text-align: center;
        border-radius: 0 0 30px 30px;
    }

    .hero h1 {
        font-weight: bold;
        font-size: 2.5rem;
    }

    .hero p {
        font-size: 1.2rem;
        opacity: 0.9;
    }
</style>

<!-- Hero de bienvenida -->
<section class="hero">
    <div class="container">
        <h1>Bienvenido a SmartTechSolutions</h1>
        <p>Explora productos de tecnología al mejor precio, con calidad garantizada.</p>
        <a href="#productos" class="btn btn-light mt-3">Ver catálogo</a>
    </div>
</section>

<!-- Tabla de productos -->
<section id="productos" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 fw-semibold">Productos destacados</h2>

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
                    <!-- Productos simulados -->
                    <tr>
                        <td class="text-center">
                            <img src="IMG/P1.jpg" width="70" height="70">
                        </td>
                        <td>Laptop HP ProBook</td>
                        <td>Equipo profesional con procesador Intel i5 y 8GB de RAM.</td>
                        <td class="fw-semibold text-success">$1,899.00</td>
                        <td>15</td>
                       
                    </tr>
                    <tr>
                        <td class="text-center">
                            <img src="IMG/P2.webp" width="70" height="70">
                        </td>
                        <td>Mouse Gamer RGB</td>
                        <td>Mouse con retroiluminación, 6 botones programables y alta precisión.</td>
                        <td class="fw-semibold text-success">$299.00</td>
                        <td>40</td>
                      
                    </tr>
                    <tr>
                        <td class="text-center">
                            <img src="IMG/P3.avif" width="70" height="70">
                        </td>
                        <td>Monitor LG 24"</td>
                        <td>Pantalla IPS Full HD, ideal para oficina y multimedia.</td>
                        <td class="fw-semibold text-success">$1,249.00</td>
                        <td>8</td>
                        
                    </tr>
                    <tr>
                        <td class="text-center">
                            <img src="IMG/P4.jpg" width="70" height="70">
                        </td>
                        <td>Audífonos Inalámbricos</td>
                        <td>Conexión Bluetooth 5.0 y hasta 10 horas de batería.</td>
                        <td class="fw-semibold text-success">$499.00</td>
                        <td>25</td>
                        
                    </tr>
                    <tr>
                        <td class="text-center">
                            <img src="IMG/P5.jpg" width="70" height="70">
                        </td>
                        <td>Teclado Mecánico Redragon</td>
                        <td>Switches rojos silenciosos, RGB y estructura metálica.</td>
                        <td class="fw-semibold text-success">$899.00</td>
                        <td>30</td>
                       
                    </tr>
                    <tr>
                        <td class="text-center">
                            <img src="IMG/P6.jpg" width="70" height="70">
                        </td>
                        <td>Cámara Web Full HD</td>
                        <td>Videollamadas en alta definición, micrófono integrado.</td>
                        <td class="fw-semibold text-success">$379.00</td>
                        <td>18</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Llamado a la acción -->
<section class="py-5 bg-primary text-white text-center mt-5">
    <div class="container">
        <h2 class="fw-bold">¡Compra ahora y recibe envíos gratis!</h2>
        <p class="lead">SmartTechSolutions te acompaña en tu camino digital.</p>
        
    </div>
</section>

@endsection

