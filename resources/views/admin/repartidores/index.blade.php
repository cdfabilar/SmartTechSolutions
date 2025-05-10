@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Lista de Repartidores</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('repartidor.create') }}" class="btn btn-primary mb-3">Nuevo Repartidor</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Repartidor</th>
                <th>Nombre Repartidor</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Fecha de Ingreso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($repartidores as $repartidor)
            <tr>
                <td>{{ $repartidor->id_repartidor }}</td>
                <td>{{ $repartidor->usuario->name ?? 'Sin nombre' }}</td>
                <td>{{ $repartidor->telefono }}</td>
                <td>{{ $repartidor->direccion }}</td>
                <td>{{ $repartidor->fecha_ingreso }}</td>
                <td>
                    <a href="{{ route('repartidor.edit', $repartidor->id_repartidor) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('repartidor.destroy', $repartidor->id_repartidor) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
