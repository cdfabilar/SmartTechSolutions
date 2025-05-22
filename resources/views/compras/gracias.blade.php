@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <div class="card shadow-lg p-4">
        <h2 class="text-success fw-bold mb-3">¡Gracias por tu compra!</h2>
        <p class="fs-5 mb-4">Tu pedido ha sido procesado correctamente.</p>

        <p class="fs-5">Un repartidor se pondrá en contacto contigo para coordinar la entrega lo antes posible.</p>

        <div class="my-4">
            <img src="{{ asset('images/gracias.png') }}" alt="Gracias" class="img-fluid" style="max-height: 250px;">
        </div>

        <a href="{{ route('home') }}" class="btn btn-success btn-lg">Volver al inicio</a>
    </div>
</div>
@endsection
