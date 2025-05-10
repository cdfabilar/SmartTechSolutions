@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Lista de Entregas</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('entregas.create') }}" class="btn btn-primary mb-3">Registrar Nueva Entrega</a>

    <table class="table table-bordered">
        <thead>
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
                <td>{{ $entrega->estado }}</td>
                <td>
                    <a href="{{ route('entregas.edit', $entrega->id_entrega) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('entregas.destroy', $entrega->id_entrega) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta entrega?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
