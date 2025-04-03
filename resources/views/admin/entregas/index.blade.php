@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Entregas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('entregas.create') }}" class="btn btn-primary mb-3">Nueva Entrega</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pedido</th>
                <th>Estimada</th>
                <th>Real</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entregas as $entrega)
            <tr>
                <td>{{ $entrega->id_entrega }}</td>
                <td>{{ $entrega->pedido->id_pedido ?? 'Sin pedido' }}</td>
                <td>{{ $entrega->fecha_entrega_estimada }}</td>
                <td>{{ $entrega->fecha_entrega_real ?? '-' }}</td>
                <td>{{ $entrega->estado }}</td>
                <td>
                    <a href="{{ route('entregas.edit', $entrega->id_entrega) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('entregas.destroy', $entrega->id_entrega) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta entrega?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
