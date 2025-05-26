@extends('layouts.menuADM')

@section('content')

<style>
    body {
        background: linear-gradient(to right, #f8f9fa, #ffffff);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .dashboard-container {
        background-color: #ffffff;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }

    .dashboard-container:hover {
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    }

    h1 {
        color: #b30000;
        font-weight: 700;
        letter-spacing: 1px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .lead {
        font-size: 1.2rem;
        color: #444;
        line-height: 1.7;
    }

    .alert-primary {
        background-color: #e8f0fe;
        border-left: 5px solid #0d6efd;
        color: #0d6efd;
        font-weight: 500;
    }

    .text-muted-date {
        font-size: 0.9rem;
        color: #6c757d;
        margin-top: 20px;
        font-style: italic;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 dashboard-container text-center">
            <h1 class="display-5">¡Bienvenido, Administrador!</h1>
            <p class="lead mt-3">
                Este es el panel de control de <strong>Smart Tech Solutions</strong>. Desde aquí puedes gestionar
                toda la información relacionada con la empresa: productos, pedidos, clientes, pagos y más.
            </p>
            <div class="alert alert-primary mt-4" role="alert">
                Utiliza el menú lateral para acceder a las distintas secciones del sistema.
            </div>
         
        </div>
    </div>
</div>

@endsection

