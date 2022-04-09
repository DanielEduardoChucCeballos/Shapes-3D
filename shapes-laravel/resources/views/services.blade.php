@extends('layouts.app')
@section('title', 'Servicios')
@section('content')
    <div class="container ">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Servicios</p>


        <div class="row justify-content-center ">

          {{--   <div class="card col-lg-4 mx-3 my-3  " style="border-radius: 25px;">
                <div class="my-4 rounded-bottom py-4 px-4 text-center">
                    <img src="image/solicitud.jpg" class="card-img-top w-50" alt="Solicitud de impresiones">
                    <div class="card-body">
                        <h5 class="card-title robotofont text-start text-center">Impresiones</h5>
                        <hr>
                        <p class="card-text text-start ">
                            En esta solicitud de impresiones puedes solicitar el servicio de impresión 3D que gustes!
                        </p>
                        <div class="d-grid gap-2">
                            <a href="formulario-de-impresion.php" class="btn btn-primary  btn-lg">Solicitar</a>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="card col-lg-4 mx-3 my-3 " style="border-radius: 25px;">
                <div class="my-4 rounded-bottom py-4 px-4 text-center">
                    <img src="image/Form-1.jpg" class="card-img-top w-50" alt="Diseños Personalizados">
                    <div class="card-body">
                        <h5 class="card-title robotofont text-start text-center">Impresiones 3D</h5>
                        <hr>
                        <p class="card-text text-start ">
                            En esta solicitud de impresiones puedes solicitar el servicio de impresión 3D personalizado!
                        </p>
                        <div class="d-grid gap-2">
                            <a href="{{ route('diseños') }}" class="btn btn-primary  btn-lg">Solicitar</a>
                        </div>
                    </div>
                </div>
            </div>






        </div>

    </div>
@endsection
