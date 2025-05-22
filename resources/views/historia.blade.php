@extends('layouts.menu1')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartTechSolutions - Historia</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        /* Colores personalizables */
        :root {
            --color-blanco: #ffffff;
            --color-verde: #4CAF50;
            /* Verde */
            --color-azul: rgb(3, 78, 183);
            /* Azul */
            --color-gris: #f4f4f4;
            /* Gris claro */
            --color-negro: #333333;
        }

        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: var(--color-blanco);
        }

        .navbar {
            background-color: var(--color-azul);
        }

        .navbar-nav .nav-link {
            color: var(--color-blanco) !important;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: var(--color-verde) !important;
        }

        .hero {
            background: linear-gradient(to right, var(--color-verde), var(--color-azul));
            color: var(--color-blanco);
            padding: 80px 0;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            font-weight: 400;
        }

        .history-section {
            background-color: var(--color-gris);
            padding: 60px 0;
        }

        .history-section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--color-azul);
            margin-bottom: 30px;
        }

        .history-section .timeline {
            list-style-type: none;
            padding: 0;
        }

        .history-section .timeline li {
            margin-bottom: 30px;
        }

        .history-section .timeline .timeline-item {
            padding: 20px;
            background-color: var(--color-blanco);
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .history-section .timeline .timeline-item h5 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--color-negro);
        }

        .history-section .timeline .timeline-item p {
            font-size: 1rem;
            font-weight: 400;
            color: var(--color-negro);
        }

        footer {
            background-color: var(--color-azul);
            color: var(--color-blanco);
            padding: 30px 0;
        }

        footer p {
            font-size: 1rem;
            font-weight: 400;
        }
    </style>
</head>

<body>


    <header class="hero text-center">
        <div class="container">
            <h1 class="display-4">Nuestra Historia</h1>
            <p class="lead">Descubre cómo SmartTechSolutions comenzó su camino hacia la innovación en energía limpia</p>
        </div>
    </header>

    <section class="history-section">
        <div class="container">
            <h2>El Viaje de SmartTechSolutions</h2>
            <ul class="timeline">
                <li>
                    <div class="timeline-item">
                        <h5>Fundación</h5>
                        <p>SmartTechSolutions fue fundada en 2020 por un grupo de apasionados por la tecnología y el cuidado del medio ambiente. Nuestro objetivo es ofrecer soluciones innovadoras en energía limpia y sostenible.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-item">
                        <h5>Primera Innovación</h5>
                        <p>En 2021, lanzamos nuestro primer producto generador de energía limpia, diseñado para ayudar a comunidades a obtener acceso a fuentes de energía sostenibles y accesibles.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-item">
                        <h5>Expansión de Productos</h5>
                        <p>En 2022, expandimos nuestra línea de productos con soluciones más avanzadas y ecológicas, que abarcan desde paneles solares hasta sistemas de energía eólica. Comenzamos a colaborar con diversas empresas para mejorar el impacto ambiental a nivel global.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-item">
                        <h5>Compromiso Ambiental</h5>
                        <p>A lo largo de los años, hemos incrementado nuestra inversión en proyectos de energías renovables y en el cuidado del medio ambiente, trabajando hacia un futuro más sostenible para todos.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <p>&copy; 2025 SmartTechSolutions. Todos los derechos reservados.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
@endsection
