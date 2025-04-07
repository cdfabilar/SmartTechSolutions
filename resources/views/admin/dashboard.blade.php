@extends('layouts.menuADM')

@section('content')

<div class="container py-5 text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-5 fw-bold">¡Bienvenido, Administrador!</h1>
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
