@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide robotofont" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/dragon.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Imagina</h5>
                    <p>Activa tu creatividad</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/maxresdefault.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Diseña</h5>
                    <p>Plasma tu idea</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/output-with-accuracy.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Imprime</h5>
                    <p>Has realidad tu idea con Nosotros</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container ">
        <h5 class="robotofont py-4 text-center">Modelos 3D</h5>
        <div class="row">
            <div class="col-md-4 py-2">
                <div class="card h-100 card-body shadow">
                    <img src="{{ asset('image/6.png') }}" class="imgzoom img-fluid" alt="precios">
                    <br>
                    <hr>
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block"><i class="bi-heart-fill"></i>
                        Precios</button>
                </div>
            </div>
            <div class="col-md-4 py-2">
                <div class="card h-100 card-body shadow">
                    <img src="{{ asset('image/filamentos.webp') }}" class="imgzoom img-fluid" alt="filamentos">
                    <br>
                    <hr>
                    <a href="filamentos.php" class="btn btn-outline-primary btn-lg btn-block"><i class="bi-heart-fill"></i>
                        Filamentos</a>
                </div>
            </div>
            <div class="col-md-4 py-2">
                <div class="card h-100 card-body shadow">
                    <img src="{{ asset('image/diseños.jpg') }}" class="imgzoom img-fluid" alt="diseños 3d">
                    <br>
                    <hr>
                    <a href="catalogo.php" class="btn btn-outline-primary btn-lg btn-block"><i class="bi-heart-fill"></i>
                        Diseños 3D</a>
                </div>
            </div>
            <hr>
            <div class="card h-100 card-body shadow my-5">
                <div class="row container">
                    <div class="col-3 p-3">
                        <img src="{{ asset('image/3.png')}}" class="imgzoom img-fluid" alt="" style="width: 300px; height: 300px">
                    </div>
                    <div class="col-2 text-white">
                        .
                    </div>
                    <div class="col-md-6 p-4">
                        <center>
                            <h1>Nosotros</h1>
                        </center>
                        <h3 class="text-center">Brindamos un servicio de impresión 3D, así como la creación del diseño,
                            para cualquier persona interesada, ya sea micro, pequeñas y medianas empresas. La impresión 3D
                            proporcionando una réplica exacta del producto o prototipo original, lo que garantiza la
                            producción y la calidad del producto.</h3>
                    </div>
                </div>
            </div>
            <div class="card h-100 card-body shadow my-5">
                <div class="row container">
                    <div class="col-3 p-3">
                        <img src="{{ asset('image/2.jpeg')}}"
                            class="imgzoom img-fluid|thumbnail rounded-top|rounded-end|rounded-bottom|rounded-start|rounded-circle|"
                            alt="" style="width: 300px; height: 300px">
                    </div>
                    <div class="col-2 text-white">
                        .
                        <!--Espacio entre columnas, no lo borres we!! :-->
                    </div>
                    <div class="col-md-6 p-4">
                        <center>
                            <h1>Nuestro Objetivo</h1>
                        </center>
                        <h3 class="text-center">Brindar un servicio eficaz y completo a quienes requieran productos
                            elaborados con impresión 3D, brindándoles el apoyo técnico necesario para hacer de sus ideas una
                            realidad.</h3>
                    </div>
                </div>
            </div>
            <div class="card h-100 card-body shadow my-5">
                <div class="row container">
                    <div class="col-3 p-3">
                        <img src="{{ asset('image/1.jpeg')}}"
                            class="imgzoom img-fluid|thumbnail rounded-top|rounded-end|rounded-bottom|rounded-start|rounded-circle|"
                            alt="" style="width: 300px; height: 300px">
                    </div>
                    <div class="col-2 text-white">
                        .
                    </div>
                    <div class="col-md-6 p-4">
                        <center>
                            <h1>Innovación</h1>
                        </center>
                        <h3 class="text-center">Cuando se necesita una reparación o una pieza faltante, puedes reemplazar
                            o solucionar el problema mucho más rápido, también procesar su idea de producto, proporcionar
                            diseños 3D y en su caso su impresión.</h3>
                    </div>
                </div>
            </div>
            <hr>



        </div>
        <!--  carousel -->
        <!--  carousel -->





    </div>
    <section class="container robotofont">
        <h5 class="robotofont py-4 text-center"><span>Shapes 3D</span></h5>
        <footer class="p-5 m-5">
            <a href="" class="link-dark">Politica de pricacidad</a>
            <a href="" class="link-dark">Condiciones del servicio</a>
            <a href="" class="link-dark">Terminos de uso</a>
        </footer>
    </section>
@endsection
