@extends('layouts.app')
@section('title', 'Diseños Personalizados')
@section('content')
    <div class="row">
        <div class="col-md-8">

            <form method="post" action="{{ route('diseñosform') }}" enctype="multipart/form-data">
                @csrf
                <div class="container py-4 ">
                    <div class="col-md-10 py-4 mx-auto">
                        <div class="card-body bg-white " style="border-radius: 25px;">
                            <p class="text-center h5 fw-bold ">Datos personales</p>
                            <hr>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control shadow" placeholder="Nombre" name="name"
                                    value="{{ old('name') }} ">
                                @error('name')
                                    <div class="alert alert-danger">
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control shadow" name="lastname" aria-describedby="helpId"
                                    placeholder="Apellido" value="{{ old('lastname') }} ">
                                @error('lastname')
                                    <div class="alert alert-danger">
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="empresa" class="form-label">Nombre de su empresa</label>
                                <input type="text" class="form-control shadow" name="business" placeholder="Empresa"
                                    value="{{ old('business') }}">
                            </div>
                            @error('business')
                                <div class="alert alert-danger">
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <textarea class="form-control shadow" name="address" rows="3"
                                    style="border-radius: 20px;">{{ old('address') }}</textarea>
                            </div>
                            @error('address')
                                <div class="alert alert-danger">
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                            <hr>
                            <center>
                                <small class="text-muted">Medios de contacto</small>
                            </center>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control shadow" name="email" aria-describedby="helpId"
                                    placeholder="Email" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control shadow" name="phone" value="{{ old('phone') }}"
                                    placeholder="Teléfono">
                            </div>
                            @error('phone')
                                <div class="alert alert-danger">
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>
                    </div>



                    <div class="col-md-10 py-4 mx-auto">
                        <div class="card-body bg-white " style="border-radius: 25px;">
                            <p class="text-center h5 fw-bold ">Descripción del producto que desea</p>
                            <hr>

                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo 3D</label>
                                <input type="file" class="form-control" name="model" placeholder=""
                                    aria-describedby="fileHelpId">
                                <small id="fileHelpId" class="form-text text-muted">Archivo .stl</small>
                            </div>
                            {{-- @error('model')
                        <div class="alert alert-danger">
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror --}}
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción del producto</label>
                                <textarea class="form-control shadow" name="description" rows="3">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                                <div class="alert alert-danger">
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror


                        </div>
                    </div>
                    <div class="col-md-10 py-4 mx-auto">
                        <div class="card-body bg-white " style="border-radius: 25px;">
                            <p class="text-center h5 fw-bold ">Detalles</p>
                            <hr>

                            <!-- Calculadora -->
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <span class="input-group-text">Altura cm</span>
                                        <input type="number" name="height" id="height" step="any" max="20"
                                            class="form-control shadow" placeholder="Altura" value="{{ old('height') }}">
                                    </div>
                                    @error('height')
                                        <div class="alert alert-danger">
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        </div>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text">Longitud cm</span>
                                        <input type="number" name="length" id="length" step="any" max="14.8"
                                            class="form-control shadow" placeholder="Longitud"
                                            value="{{ old('length') }}">
                                    </div>
                                    @error('length')
                                        <div class="alert alert-danger">
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        </div>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text">Anchura cm</span>
                                        <input type="number" name="width" id="width" step="any" max="14"
                                            class="form-control shadow" placeholder="Anchura"
                                            value="{{ old('width') }}">
                                    </div>
                                    @error('width')
                                        <div class="alert alert-danger">
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="">
                                        <!-- <i class="fa fa-arrow-up" aria-hidden="true"></i> -->
                                        X
                                    </div>
                                    <div class="py-4">
                                        <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> -->
                                        Y
                                    </div>
                                    <div class="">
                                        Z
                                    </div>
                                </div>
                                <!-- Calculadora -->
                                <div class="mb-3">
                                    <label for="filament" class="form-label">Material</label>
                                    <select class="form-select shadow" name="filament">

                                        @foreach ($materials as $material)
                                            <option value="{{ $material->price }}"
                                                @if (old('filament') == $material->price) selected @endif>{{ $material->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('filament')
                                    <div class="alert alert-danger">
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror

                                <label for="color">Color</label>
                                <select class="form-select shadow" name="color">
                                    <option> -- Selecciona un color --</option>
                                    @foreach ($colorsList as $colorList)
                                        <option style="background-color: {{ $colorList->code }};" value="{{ $colorList->name }}"
                                            @if (old('color') == $colorList->code) selected @endif>{{ $colorList->name }}
                                        </option>
                                    @endforeach
                                </select>
                                {{-- <input class="form-control " type="color" name="color" value="{{ old('color') }}"
                                    placeholder="Teléfono"> --}}
                                @error('color')
                                    <div class="alert alert-danger">
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>
                            <!-- relleno interior -->
                            <hr>
                            <center>
                                <h4>Relleno</h4>
                            </center>
                            <div class="row">
                                <div class="col-md-4 py-2 px-2  shadow">
                                    <img src="{{ asset('image/relleno-1.jpg') }}"
                                        class="imgzoom figure-img img-fluid rounded" alt="relleno 1">
                                    <label for="filling">Relleno 20 - 30%</label>
                                    <input type="radio" class="form-check-input" name="filling" value="20-30"
                                        @if (old('filling') == '20-30') checked @endif>
                                </div>

                                <div class="col-md-4 py-2 px-2  shadow">
                                    <img src="{{ asset('image/relleno-2.jpg') }}"
                                        class="imgzoom figure-img img-fluid rounded" alt="relleno 2">
                                    <label for="filling">Relleno 50 - 60%</label>
                                    <input type="radio" class="form-check-input" name="filling" value="50-60"
                                        @if (old('filling') == '50-60') checked @endif>
                                </div>
                                <div class="col-md-4 py-2 px-2  shadow">
                                    <img src="{{ asset('image/relleno-3.jpg') }}"
                                        class="imgzoom figure-img img-fluid rounded" alt="relleno 3">
                                    <label for="filling">Relleno 90 - 100%</label>
                                    <input type="radio" class="form-check-input" name="filling" value="90-100"
                                        @if (old('filling') == '90-100') checked @endif>
                                </div>
                                @error('filling')
                                    <div class="alert alert-danger">
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>
                            <!-- relleno interior -->
                            <!-- acabado superficial -->
                            <hr>
                            <center>
                                <h4>Acabado superficial</h4>
                            </center>
                            <div class="row">
                                <div class="col-md-4 py-2 px-2  shadow">
                                    <img src="{{ asset('image/calidad-1.jpg') }}"
                                        class="imgzoom figure-img img-fluid rounded" alt="relleno 1">
                                    <label for="finished">Fino</label>
                                    <input type="radio" class="form-check-input" name="finished"
                                        value="Fino" @if (old('finished') == 'fino') checked @endif>
                                </div>
                                <div class="col-md-4 py-2 px-2  shadow">
                                    <img src="{{ asset('image/calidad-2.jpg') }}"
                                        class="imgzoom figure-img img-fluid rounded" alt="relleno 2">
                                    <label for="finished">Medio</label>
                                    <input type="radio" class="form-check-input" name="finished"
                                        value="Medio" @if (old('finished') == 'medio') checked @endif>

                                </div>
                                <div class="col-md-4 py-2 px-2  shadow">
                                    <img src="{{ asset('image/calidad-3.jpg') }}"
                                        class="imgzoom figure-img img-fluid rounded" alt="relleno 3">
                                    <label for="finished">Rugoso</label>
                                    <input type="radio" class="form-check-input" name="finished" 
                                        value="Rugoso" @if (old('finished') == 'rugoso') checked @endif>

                                </div>
                                @error('finished')
                                    <div class="alert alert-danger">
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>
                            <!-- acabado superficial -->
                            <!-- figura semejante -->
                            <hr>
                            <center>
                                <h4>¿A qué figura se parece más tu modelo?</h4>
                            </center>
                            <div class="row">
                                <div class="col-md-6 py-2 px-2  shadow">
                                    <img src="{{ asset('image/cubo.png') }}" class=" img-fluid  rounded" alt="Cubo"
                                        style="width:90%"> <br>
                                    <label for="shape">Cubo</label>
                                    <input type="radio" class="form-check-input" name="shape" name="shape" value="cubo"
                                        @if (old('shape') == 'cubo') checked @endif>
                                </div>
                                <div class="col-md-6 py-2 px-2  shadow">
                                    <img src="{{ asset('image/triangulo.png') }}" class=" img-fluid rounded"
                                        alt="Pirámide">
                                    <label for="shape">Pirámide</label>
                                    <input type="radio" class="form-check-input" name="shape" name="shape" value="piramide"
                                        @if (old('shape') == 'piramide') checked @endif>

                                </div>
                                @error('shape')
                                    <div class="alert alert-danger">
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>
                            <!-- figura semejante -->
                        </div>

                        <!--  <div class="row">

                                            El contenido va aqui

                                        </div> -->
                    </div>
                </div>
                <div class="col-md-10 py-4 mx-auto">
                    <center>
                        <input type="submit" class="btn btn-success" value="Sacar solo Cotización">
                    </center>
                </div>

            </form>
            <div class="col-md-10 py-4 mx-auto">
                <center>
                    @isset ($prospectID)
                    <a class="btn btn-danger" href="{{ route('compra',['id' => $prospectID]) }}">Realizar Compra</a>
                    @endisset
                </center>
            </div>

         
        </div>


        <div class="col-md-4 py-4 px-4 fijo-dos body-dos top-left-dos" style="z-index: 100;">
            <div class="card-body bg-white">
                <p class="text-center h5 fw-bold ">Detalles de cotización</p>
                <hr>
                <strong>
                    @isset($tiempoMinutos)
                        Minutos para imprimir
                        {{ $tiempoMinutos }} Minutos
                    @endisset
                    <br>


                    @isset($horas)
                        @if ($horas >= 1)
                            o tambien
                            <br>
                            Horas para imprimir
                            {{ $horas }} Horas
                        @endif
                    @endisset
                    <br>

                    @isset($precio)
                        Precio Total
                        ${{ $precio }} Pesos MXN
                    @endisset



                </strong>
                <p id="p1">
                    El filamento se cobra por minuto según el tipo de material del filamento seleccionado,
                    cada filamento tiene sus pros y contras, Revisa la información proporcionada!!! <br><br>
                    <a href="{{ route('filamentolist') }}" class="btn btn-outline-primary btn-sm"><i
                            class="bi-heart-fill"></i>
                        Filamentos</a>
                </p>

                <input type="button" class="btn btn-secondary btn-sm" value="Mostrar"
                    onclick="document.getElementById('p1').style.visibility='visible'">
                <input type="button" class="btn btn-secondary btn-sm" value="Ocultar"
                    onclick="document.getElementById('p1').style.visibility='hidden'">



            </div>
        </div>

    </div>

@endsection
