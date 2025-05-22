@extends('layouts.repa')

@section('content')
<div class="container mt-2">
    <h2>Lista de Entregas</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Venta</th>
                <th>Repartidor</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entregas as $entrega)
            <tr>
                <td>{{ $entrega->id_entrega }}</td>
                <td>{{ $entrega->venta->id_venta }}</td>
                <td>{{ $entrega->repartidor->usuario->name }}</td>
                <td>
                    @php
                    $estado = strtolower($entrega->estado);
                    $claseEstado = match($estado) {
                    'entregado' => 'text-success fw-bold',
                    'en curso' => 'text-warning fw-bold',
                    'pendiente' => 'text-secondary fw-bold',
                    'cancelado' => 'text-danger fw-bold',
                    default => 'text-muted',
                    };
                    @endphp
                    <span class="{{ $claseEstado }}">{{ ucfirst($estado) }}</span>
                </td>
                <td class="d-flex gap-1">


                    <form action="{{ route('entregas.update', $entrega->id_entrega) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id_venta" value="{{ $entrega->id_venta }}">
                        <input type="hidden" name="id_repartidor" value="{{ $entrega->id_repartidor }}">
                        <input type="hidden" name="estado" value="en curso">
                        <button type="submit" class="btn btn-warning btn-sm">En curso</button>
                    </form>

                    <form action="{{ route('entregas.update', $entrega->id_entrega) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id_venta" value="{{ $entrega->id_venta }}">
                        <input type="hidden" name="id_repartidor" value="{{ $entrega->id_repartidor }}">
                        <input type="hidden" name="estado" value="entregado">
                        <button type="submit" class="btn btn-success btn-sm">Entregado</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
