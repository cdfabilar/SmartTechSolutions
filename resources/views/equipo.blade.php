<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartTechSolutions - Equipo</title>
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

        .team-section {
            background-color: var(--color-gris);
            padding: 60px 0;
        }

        .team-section .team-member {
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-section .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .team-section .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid var(--color-azul);
            transition: transform 0.3s ease;
        }

        .team-section .team-member:hover img {
            transform: scale(1.1);
        }

        .team-section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--color-azul);
            margin-bottom: 30px;
        }

        .team-section .team-member h4 {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--color-negro);
        }

        .team-section .team-member p {
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

        .container {
            padding: 0 15px;
        }

        /* Estilos para las tarjetas del equipo */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--color-negro);
        }

        .card-text {
            font-size: 1rem;
            color: var(--color-negro);
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">SmartTechSolutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('equipo') }}">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('historia') }}">Historia</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección principal (Hero) -->
    <header class="hero text-center">
        <div class="container">
            <h1 class="display-4">Conoce a Nuestro Equipo</h1>
            <p class="lead">Un equipo comprometido con la innovación en energía limpia y el cuidado del medio ambiente</p>
        </div>
    </header>

    <!-- Sección del equipo -->
    <section class="team-section text-center">
        <div class="container h-auto">
            <h2>El Equipo Detrás de SmartTechSolutions</h2>
            <div class="row">
                <!-- Miembro del equipo 1: Carlos Daniel Fabila Reyes -->
                <div class="col-md-4">
                    <div class="card team-member">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Carlos Daniel Fabila Reyes">
                        <div class="card-body">
                            <h4 class="card-title">Carlos Daniel Fabila Reyes</h4>
                            <p class="card-text">CEO y Fundador</p>
                        </div>
                    </div>
                </div>
                <!-- Miembro del equipo 2: Diego Rebollar Cacique -->
                <div class="col-md-4">
                    <div class="card team-member">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Diego Rebollar Cacique">
                        <div class="card-body">
                            <h4 class="card-title">Diego Rebollar Cacique</h4>
                            <p class="card-text">Director de Operaciones</p>
                        </div>
                    </div>
                </div>
                <!-- Miembro del equipo 3: Alberto Jordán Samanó -->
                <div class="col-md-4">
                    <div class="card team-member">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Alberto Jordán Samanó">
                        <div class="card-body">
                            <h4 class="card-title">Alberto Jordán Samanó</h4>
                            <p class="card-text">Director de Tecnología</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2025 SmartTechSolutions. Todos los derechos reservados.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>

</html>
