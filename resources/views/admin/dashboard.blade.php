@extends('layouts.menuADM')

@section('content')




<section class="py-5 text-center container">
    <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Administracion</h1>
            <p class="lead text-body-secondary">

                En esta ventana se administra el contenido de la pagina y la empresa para visualizacion de los usuarios
                ademas de que se proporciona una registro de los usuarios y su actividad en la pagina.

            </p>
        </div>
    </div>
</section>

<div class="album py-3 bg-body-tertiary">

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col text-center">
                <div class="card shadow-sm">
                    <img src="{{ asset('IMG/CardsADM/Clientes.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Clientes</title>
                    <rect class="fs-6 m-1">Clientes</text>
                        </img>
                        <div class="card-body">
                            <p class="card-text">Visualiza o modifica el registro de clientes de la tienda</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Mostrar</button>
                                </div>
                                <small class="text-body-secondary"></small>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col text-center">
                <div class="card shadow-sm">
                    <img src="{{ asset('IMG/CardsADM/Pedidos.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Clientes</title>
                    <rect class="fs-6 m-1">Pedidos</text>
                        </img>
                        <div class="card-body">
                            <p class="card-text">Visualiza o modifica los pedidos realizados a la tienda en linea.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Mostrar</button>
                                </div>
                                <small class="text-body-secondary"></small>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col text-center">
                <div class="card shadow-sm">
                    <img src="{{ asset('IMG/CardsADM/Productos.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Clientes</title>
                    <rect class="fs-6 m-1">Productos</text>
                        </img>
                        <div class="card-body">
                            <p class="card-text">Visualiza o modifica los productos de la tienda en linea y sus existencias</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Mostrar</button>
                                </div>
                                <small class="text-body-secondary"></small>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col text-center">
                <div class="card shadow-sm">
                    <img src="{{ asset('IMG/CardsADM/Entregas.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Clientes</title>
                    <rect class="fs-6 m-1">Entregas</text>
                        </img>
                        <div class="card-body">
                            <p class="card-text">Visualiza o modifica las entregas de la tienda haci como ferificar de entregado</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Mostrar</button>
                                </div>
                                <small class="text-body-secondary"></small>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col text-center">
                <div class="card shadow-sm">
                    <img src="{{ asset('IMG/CardsADM/Pagos.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Clientes</title>
                    <rect class="fs-6 m-1">Pagos</text>
                        </img>
                        <div class="card-body">
                            <p class="card-text">Visualiza los pagos realizados por los usuarios o clientes de la tienda</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Mostrar</button>
                                </div>
                                <small class="text-body-secondary"></small>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col text-center">
                <div class="card shadow-sm">
                    <img src="{{ asset('IMG/CardsADM/DetallesPedido.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Clientes</title>
                    <rect class="fs-6 m-1">Deatlles de pedido</text>
                        </img>
                        <div class="card-body">
                            <p class="card-text">Visualiza los detalles de los pedidos realizados de los clientes.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Mostrar</button>
                                </div>
                                <small class="text-body-secondary"></small>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>




@endsection
