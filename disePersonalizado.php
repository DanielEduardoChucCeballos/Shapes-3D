<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño Personalizado | Shapes 3D</title>
</head>
<style>
    input[type="text"]{
        border-radius: 20px;
    }

</style>
<body style="background-color: #eee;">
    <?php include 'layout/header.php'; ?>
    <div class="row">
    <div class="col-md-8">

<form action="funciones/calculadora.php" method="post" enctype="multipart/form">

<div class="container py-4 ">
<div class="col-md-10 py-4 mx-auto">

<div class="card-body bg-white " style="border-radius: 25px;">
<p class="text-center h5 fw-bold ">Datos personales</p>
<hr>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control shadow" name="nombre" id="" aria-describedby="helpId" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control shadow" name="apellido" id="" aria-describedby="helpId" placeholder="Apellido">
    </div>
    <div class="mb-3">
        <label for="empresa" class="form-label">Nombre de su empresa</label>
        <input type="text" class="form-control shadow" name="empresa" id="" aria-describedby="helpId" placeholder="Empresa">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
          <textarea class="form-control shadow" name="direccion" id="" rows="3" style="border-radius: 20px;"></textarea>
    </div>
    <hr>
    <center>
    <small class="text-muted">Medios de contacto</small>
    </center>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control shadow" name="email" id="" aria-describedby="helpId" placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" class="form-control shadow" name="telefono" id="" aria-describedby="helpId" placeholder="Teléfono">
    </div>

</div>
</div>



<div class="col-md-10 py-4 mx-auto">
            <div class="card-body bg-white " style="border-radius: 25px;">
        <p class="text-center h5 fw-bold ">Descripción del producto que desea</p>
        <hr>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo 3D</label>
            <input type="file" class="form-control" name="modelo" id="" placeholder="" aria-describedby="fileHelpId">
            <small id="fileHelpId" class="form-text text-muted">Archivo .stl</small>
        </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción del producto</label>
                    <textarea class="form-control shadow" name="descripcion" id="" rows="3"></textarea>
                </div>

                <!--Puntos de vista-->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        Perspectivas
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="card border-dark">
                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Primera persp</h4>
                            <p class="card-text">image</p>
                          </div>
                        </div>
                        <div class="card border-dark">
                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Segunda persp</h4>
                            <p class="card-text">image</p>
                          </div>
                        </div>
                        <div class="card border-dark">
                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Tercera persp</h4>
                            <p class="card-text">image</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

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
                <input type="number" name="altura" id="altura" step="any" max="148" class="form-control shadow" placeholder="Altura">
              </div>
              <div class="input-group">
                <span class="input-group-text">Longitud cm</span>
                <input type="number" name="longitud" id="longitud" step="any" max="148" class="form-control shadow" placeholder="Longitud">
              </div>
              <div class="input-group">
                <span class="input-group-text">Anchura cm</span>
                <input type="number" name="anchura" id="anchura" step="any" max="74" class="form-control shadow" placeholder="Anchura">
              </div>
  </div>
  <div class="col-md-2">
<div class="">
<!-- <i class="fa fa-arrow-up" aria-hidden="true"></i> -->
X
</div >
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
                <select class="form-select shadow" name="material" id="">
                  <option selected>-- Selecciona un Material --</option>
                  <option value="">PLA Gris $1.2 pesos MX Por Minuto</option>
                  <option value="">ABS Azul $1.50 pesos MX por minuto</option>
                 
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
<img src="image/relleno-1.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 1">
<label for="relleno">Relleno 20 - 30%</label>
<input type="radio" class="form-check-input" name="relleno" value="20-30" id="">  
</div>
  <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/relleno-2.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 2">
    <label for="relleno">Relleno 50 - 60%</label>
    <input type="radio" class="form-check-input" name="relleno" value="50-60" id="">
  
  </div>
  <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/relleno-3.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 3">
    <label for="relleno">Relleno 90 - 100%</label>
    <input type="radio" class="form-check-input" name="relleno" value="90-100" id="">
  
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
<img src="image/calidad-1.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 1">
<label for="acabado">Fino</label>
<input type="radio" class="form-check-input" name="acabado" value="20-30" id="">  
</div>
  <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/calidad-2.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 2">
    <label for="acabado">Medio</label>
    <input type="radio" class="form-check-input" name="acabado" value="50-60" id="">
  
  </div>
  <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/calidad-3.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 3">
    <label for="acabado">Rugoso</label>
    <input type="radio" class="form-check-input" name="acabado" value="90-100" id="">
  
  </div>
</div>
<!-- acabado superficial -->









        </div>

   <!--  <div class="row">

        El contenido va aqui

    </div> -->
</div>
</div>
<div class="col-md-10 py-4 mx-auto">
  <center>
    <input type="submit" class="btn btn-success" name="submit" value="Calcular">
  </center>
</div>
</form>
    </div>
    <div class="col-md-4 py-4 px-4">
      <div class="card-body bg-white">
      <p class="text-center h5 fw-bold ">Detalles de cotización</p>
<hr>
      </div>
    </div>
    </div>

<?php include 'layout/footer.php'; ?>

</body>

</html>