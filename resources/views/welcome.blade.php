@extends('layouts.menu1')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartTechSolutions</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* Colores personalizables */
        :root {
            --color-blanco: #ffffff;
            --color-verde: #4CAF50;
            /* Verde */
            --color-cafe: rgb(3, 78, 183);
            /* Café */
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
            background-color: var(--color-cafe);
        }

        .navbar-nav .nav-link {
            color: var(--color-blanco) !important;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: var(--color-verde) !important;
        }

        .hero {
            background: linear-gradient(to right, var(--color-verde), var(--color-cafe));
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

        .features {
            background-color: var(--color-gris);
            padding: 60px 0;
        }

        .features .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .features .card:hover {
            transform: translateY(-10px);
        }

        .features .card-body {
            background-color: var(--color-blanco);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 500;
            color: var(--color-cafe);
        }

        footer {
            background-color: var(--color-cafe);
            color: var(--color-blanco);
            padding: 30px 0;
        }

        footer p {
            font-size: 1rem;
            font-weight: 400;
        }

        .container {
            padding: 0 15px;
        }

        .btn-primary {
            background-color: var(--color-verde);
            border-color: var(--color-verde);
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--color-cafe);
            border-color: var(--color-cafe);
        }
    </style>

</head>

<body>


    <header class="hero text-center">
        <div class="container">
            <h1 class="display-4"><img src="{{ asset('IMG/LogoSTS.png') }}" class="w-25"></h1>
            <p class="lead">Soluciones innovadoras en energía limpia y cuidado del medio ambiente</p>
            @if (Route::has('login'))
            @auth
            @php
            $role = auth()->user()->role;
            @endphp

            @if ($role === 'admin')
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-lg">Entrar</a>
            @elseif ($role === 'rep')
            <a href="{{ route('repartidores.welcomerep') }}" class="btn btn-primary btn-lg">Entrar</a>
            @elseif ($role === 'user')
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Entrar</a>
            @else
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Entrar</a>
            @endif
            @else
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Iniciar Sesión</a>
            @endauth
            @endif
        </div>
    </header>

    <section class="features text-center">
        <div class="container">
            <h2 class="mb-5">Nuestras Soluciones</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Generadores de Energía Limpia</h5>
                            <p class="card-text">Ofrecemos productos innovadores para la generación de energía limpia y sostenible.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Soluciones Ecológicas</h5>
                            <p class="card-text">Desarrollamos soluciones que respetan el medio ambiente y optimizan el uso de recursos naturales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Asesoría Ambiental</h5>
                            <p class="card-text">Brindamos consultoría para empresas y particulares en el uso de tecnologías limpias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center h-100vh">
            <p>&copy; 2025 SmartTechSolutions. Todos los derechos reservados.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>

</html>
@endsection
