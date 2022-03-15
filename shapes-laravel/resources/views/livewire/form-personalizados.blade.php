<div class="row">
    <div class="col-md-8">

        <form action="#" method="post" enctype="multipart/form">
            @csrf
            <div class="container py-4 ">
                <div class="col-md-10 py-4 mx-auto">

                    <div class="card-body bg-white " style="border-radius: 25px;">
                        <p class="text-center h5 fw-bold ">Datos personales</p>
                        <hr>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control shadow" wire:model="nombre" id=""
                                aria-describedby="helpId" placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control shadow" wire:model="apellido" id=""
                                aria-describedby="helpId" placeholder="Apellido">
                        </div>
                        <div class="mb-3">
                            <label for="empresa" class="form-label">Nombre de su empresa</label>
                            <input type="text" class="form-control shadow" wire:model="empresa" id=""
                                aria-describedby="helpId" placeholder="Empresa">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <textarea class="form-control shadow" wire:model="direccion" id="" rows="3" style="border-radius: 20px;"></textarea>
                        </div>
                        <hr>
                        <center>
                            <small class="text-muted">Medios de contacto</small>
                        </center>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control shadow" wire:model="email" id=""
                                aria-describedby="helpId" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control shadow" wire:model="telefono" id=""
                                aria-describedby="helpId" placeholder="Teléfono">
                        </div>

                    </div>
                </div>



                <div class="col-md-10 py-4 mx-auto">
                    <div class="card-body bg-white " style="border-radius: 25px;">
                        <p class="text-center h5 fw-bold ">Descripción del producto que desea</p>
                        <hr>

                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo 3D</label>
                            <input type="file" class="form-control" wire:model="modelo" id="" placeholder=""
                                aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Archivo .stl</small>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción del producto</label>
                            <textarea class="form-control shadow" wire:model="descripcion" id="" rows="3"></textarea>
                        </div>

                        <!--Puntos de vista-->
                        <!-- <div class="row">
      <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/cubo.png" class="  img-fluid rounded " alt="Primera Perspectiva">
    </div>
      <div class="col-md-4 py-2 px-2  shadow">
        <img src="image/triangulo.png" class="  img-fluid rounded " alt="Segunda Perspectiva">
      </div>
      <div class="col-md-4 py-2 px-2  shadow">
        <img src="image/otro.jpg" class="  img-fluid rounded " alt="Tercera Perspectiva">
      </div>
    </div> -->

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
                                    <input type="number" wire:model="altura" id="altura" step="any" max="20"
                                        class="form-control shadow" placeholder="Altura">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Longitud cm</span>
                                    <input type="number" wire:model="longitud" id="longitud" step="any" max="14.8"
                                        class="form-control shadow" placeholder="Longitud">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Anchura cm</span>
                                    <input type="number" wire:model="anchura" id="anchura" step="any" max="14"
                                        class="form-control shadow" placeholder="Anchura">
                                </div>
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
                                <label for="material" class="form-label">Material</label>
                                <select class="form-select shadow" wire:model="material" id="">
                                    <option selected>-- Selecciona un Material --</option>
                                    {{-- codigo php --}}
                                </select>
                            </div>
                        </div>
                        <!-- relleno interior -->
                        <hr>
                        <center>
                            <h4>Relleno</h4>
                        </center>
                        <div class="row">
                            <div class="col-md-4 py-2 px-2  shadow">
                                <img src="{{ asset('image/relleno-1.jpg') }}" class="imgzoom figure-img img-fluid rounded"
                                    alt="relleno 1">
                                <label for="relleno">Relleno 20 - 30%</label>
                                <input type="radio" class="form-check-input" wire:model="relleno" value="20-30" id="">
                            </div>
                            <div class="col-md-4 py-2 px-2  shadow">
                                <img src="{{ asset('image/relleno-2.jpg')}}" class="imgzoom figure-img img-fluid rounded"
                                    alt="relleno 2">
                                <label for="relleno">Relleno 50 - 60%</label>
                                <input type="radio" class="form-check-input" wire:model="relleno" value="50-60" id="">
                            </div>
                            <div class="col-md-4 py-2 px-2  shadow">
                                <img src="{{ asset('image/relleno-3.jpg')}}" class="imgzoom figure-img img-fluid rounded"
                                    alt="relleno 3">
                                <label for="relleno">Relleno 90 - 100%</label>
                                <input type="radio" class="form-check-input" wire:model="relleno" value="90-100" id="">
                            </div>
                        </div>
                        <!-- relleno interior -->
                        <!-- acabado superficial -->
                        <hr>
                        <center>
                            <h4>Acabado superficial</h4>
                        </center>
                        <div class="row">
                            <div class="col-md-4 py-2 px-2  shadow">
                                <img src="{{ asset('image/calidad-1.jpg')}}" class="imgzoom figure-img img-fluid rounded"
                                    alt="relleno 1">
                                <label for="acabado">Fino</label>
                                <input type="radio" class="form-check-input" wire:model="acabado" value="20-30" id="">
                            </div>
                            <div class="col-md-4 py-2 px-2  shadow">
                                <img src="{{ asset('image/calidad-2.jpg')}}" class="imgzoom figure-img img-fluid rounded"
                                    alt="relleno 2">
                                <label for="acabado">Medio</label>
                                <input type="radio" class="form-check-input" wire:model="acabado" value="50-60" id="">

                            </div>
                            <div class="col-md-4 py-2 px-2  shadow">
                                <img src="{{ asset('image/calidad-3.jpg')}}" class="imgzoom figure-img img-fluid rounded"
                                    alt="relleno 3">
                                <label for="acabado">Rugoso</label>
                                <input type="radio" class="form-check-input" wire:model="acabado" value="90-100" id="">

                            </div>
                        </div>
                        <!-- acabado superficial -->
                        <!-- figura semejante -->
                        <hr>
                        <center>
                            <h4>¿A qué figura se parece más tu modelo?</h4>
                        </center>
                        <div class="row">
                            <div class="col-md-6 py-2 px-2  shadow">
                                <img src="{{ asset('image/cubo.png')}}" class=" img-fluid  rounded" alt="Cubo" style="width:90%"> <br>
                                <label for="acabado">Cubo</label>
                                <input type="radio" class="form-check-input" wire:model="forma" value="cubo" id="">
                            </div>
                            <div class="col-md-6 py-2 px-2  shadow">
                                <img src="{{ asset('image/triangulo.png')}}" class=" img-fluid rounded" alt="Pirámide">
                                <label for="acabado">Pirámide</label>
                                <input type="radio" class="form-check-input" wire:model="forma" value="piramide" id="">

                            </div>
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
                    <input type="submit" class="btn btn-success" wire:model="submit" value="Sacar solo Cotización">

                    <button type="button" class="btn btn-danger">¿Quiere continuar con la compra? <i
                            class="bi-arrow-right-circle"></i></button>
                </center>
            </div>

        </form>
    </div>


    <div class="col-md-4 py-4 px-4">
        <div class="card-body bg-white">
            <p class="text-center h5 fw-bold ">Detalles de cotización</p>
            <hr>

            <p id="p1">
                El filamento se cobra por minuto según el tipo de material del filamento seleccionado,
                cada filamento tiene sus pros y contras, Revisa la información proporcionada!!! <br><br>
                <a href="filamentos.php" class="btn btn-outline-primary btn-sm"><i class="bi-heart-fill"></i>
                    Filamentos</a>
            </p>

            <input type="button" class="btn btn-secondary btn-sm" value="Mostrar"
                onclick="document.getElementById('p1').style.visibility='visible'">
            <input type="button" class="btn btn-secondary btn-sm" value="Ocultar"
                onclick="document.getElementById('p1').style.visibility='hidden'">



        </div>
    </div>

</div>
