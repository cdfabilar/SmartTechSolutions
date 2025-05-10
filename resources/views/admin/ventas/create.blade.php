@extends('layouts.menuADM')

@section('content')
<div class="container">
    <h2>Registrar Nueva Venta</h2>

    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_cliente" class="form-label">Cliente:</label>
            <select class="form-control" name="id_cliente" required>
                <option value="">Seleccionar Cliente</option>
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}"
                    {{ old('id_cliente') == $cliente->id_cliente ? 'selected' : '' }}>
                    {{ $cliente->usuario->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_producto" class="form-label">Producto:</label>
            <select class="form-control" name="id_producto" id="producto" required>
                <option value="">Seleccionar Producto</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id_producto }}" data-precio="{{ $producto->precio }}">
                    {{ $producto->nombre }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{ old('cantidad') }}" required>
        </div>

        <div class="mb-3">
            <label for="total" class="form-label">Total:</label>
            <input type="number" step="0.01" class="form-control" name="total" id="total" value="{{ old('total') }}" readonly>
        </div>

        <div class="mb-3">
            <label for="tarjeta_credito" class="form-label">Tarjeta de Crédito:</label>
            <input type="text" class="form-control" name="tarjeta_credito" value="{{ old('tarjeta_credito') }}" required>
        </div>

        <div class="mb-3">
            <label for="cvv" class="form-label">CVV:</label>
            <input type="text" class="form-control" name="cvv" value="{{ old('cvv') }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_venta" class="form-label">Fecha de Venta:</label>
            <input type="date" class="form-control" name="fecha_venta" value="{{ old('fecha_venta') }}" required>
        </div>

        <div class="mb-3">
            <label for="hora_venta" class="form-label">Hora de Venta:</label>
            <input type="time" class="form-control" name="hora_venta" value="{{ old('hora_venta') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Venta</button>
        <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cantidadInput = document.getElementById('cantidad');
        const productoSelect = document.getElementById('producto');
        const totalInput = document.getElementById('total');

        productoSelect.addEventListener('change', function() {
            updateTotal();
        });

        cantidadInput.addEventListener('input', function() {
            updateTotal();
        });

        function updateTotal() {
            const precio = productoSelect.options[productoSelect.selectedIndex].getAttribute('data-precio');
            const cantidad = cantidadInput.value;

            if (precio && cantidad) {
                totalInput.value = (precio * cantidad).toFixed(2);
            } else {
                totalInput.value = '0.00';
            }
        }
    });
</script>
@endsection
