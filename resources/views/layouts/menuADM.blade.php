<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="d-flex flex-column w-100">

        <!-- Navbar superior -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <img src="{{ asset('IMG/AnimacionSTS.gif') }}" class="img-fluid" style="max-height: 60px;" alt="Logo">

                <div class="d-flex align-items-center gap-3">
                    <a class="btn btn-outline-light" href="{{ route('admin.dashboard') }}">Inicio Administración</a>

                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenedor general con sidebar y contenido -->
        <div class="d-flex" style="min-height: 100vh;">

            <!-- Sidebar -->
            <div class="bg-dark text-white p-3" style="width: 250px;">
                <div class="text-center mb-3">
                    <img src="{{ asset('IMG/LogoSTS.png') }}" alt="Admin" class="rounded-circle img-thumbnail" style="width: 100px; height: 100px;">
                    <h5 class="mt-2">Administrador</h5>
                </div>
                <hr class="border-light">
                <div class="nav flex-column">

                    <a href="{{ route('productos.index') }}" class="nav-link text-white">Productos</a>
                    <a href="{{ route('clientes.index') }}" class="nav-link text-white">Clientes</a>
                    <a href="{{ route('repartidor.index') }}" class="nav-link text-white">Repartidores</a>
                    <a href="{{ route('ventas.index') }}" class="nav-link text-white">Ventas</a>
                    <a href="{{ route('entregas.index') }}" class="nav-link text-white">Entregas</a>

                </div>
                <hr class="border-light">
            </div>

            <!-- Contenido principal -->
            <main class="flex-fill p-4">
                @yield('content')
            </main>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
