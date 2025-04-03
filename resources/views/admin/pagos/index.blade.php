@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Listado de Pagos</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pagos.create') }}" class="btn btn-primary mb-3">Nuevo Pago</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pedido</th>
                <th>Método de Pago</th>
                <th>Monto</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagos as $pago)
            <tr>
                <td>{{ $pago->id_pago }}</td>
                <td>{{ $pago->pedido->id_pedido ?? 'Sin pedido' }}</td>
                <td>{{ $pago->metodo_pago }}</td>
                <td>${{ $pago->monto }}</td>
                <td>{{ $pago->fecha_pago }}</td>
                <td>
                    <a href="{{ route('pagos.edit', $pago->id_pago) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('pagos.destroy', $pago->id_pago) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este pago?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
