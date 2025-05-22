@extends('layouts.repa')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded">
                <div class="card-header text-center bg-primary text-white">
                    <h2>¡Bienvenido, Repartidor!</h2>
                </div>
                <div class="card-body text-center">
                    <p class="lead">Te damos la bienvenida a tu panel de repartidor. Aquí podrás gestionar tus entregas y ver tus tareas asignadas.</p>

                    <div class="my-4">
                        <h4 class="mb-3">¿Qué puedes hacer aquí?</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Ver tus entregas pendientes.</li>
                            <li class="list-group-item">Marcar entregas como completadas.</li>
                            <li class="list-group-item">Acceder a tu historial de entregas.</li>
                        </ul>
                    </div>

                    <div class="my-4">
                        <a href="{{ route('entregas.index') }}" class="btn btn-success btn-lg">
                            <i class="fas fa-box"></i> Ver mis entregas
                        </a>
                    </div>

                    <div class="my-4">
                        <p class="text-muted">Si tienes alguna duda o necesitas asistencia, por favor contacta a tu supervisor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
