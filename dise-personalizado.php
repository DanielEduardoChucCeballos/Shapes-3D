<?php
include 'funciones/cotizacion.php';?>
<?php
include 'db/config.php';
$statement = $pdo->prepare('SELECT * FROM filament');
$statement->execute();
$resultados = $statement->fetchAll();
?>
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
    <?php include 'layout/header.php';?>
    <?php if (!empty($errores)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <center>
                        <strong class=""><?php echo $errores; ?></strong>
                      </center>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                  <?php endif;?>
    <div class="row">
    <div class="col-md-8">

<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
); ?>" method="post" enctype="multipart/form">

<div class="container py-4 ">
<div class="col-md-10 py-4 mx-auto">

<div class="card-body bg-white " style="border-radius: 25px;">
<p class="text-center h5 fw-bold ">Datos personales</p>
<hr>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control shadow" name="nombre" id="" aria-describedby="helpId" placeholder="Nombre" >
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control shadow" name="apellido" id="" aria-describedby="helpId" placeholder="Apellido" >
    </div>
    <div class="mb-3">
        <label for="empresa" class="form-label">Nombre de su empresa</label>
        <input type="text" class="form-control shadow" name="empresa" id="" aria-describedby="helpId" placeholder="Empresa" >
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
          <textarea class="form-control shadow" name="direccion" id="" rows="3" style="border-radius: 20px;" ></textarea>
    </div>
    <hr>
    <center>
    <small class="text-muted">Medios de contacto</small>
    </center>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control shadow" name="email" id="" aria-describedby="helpId" placeholder="Email" >
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" class="form-control shadow" name="telefono" id="" aria-describedby="helpId" placeholder="Teléfono" >
    </div>

</div>
</div>



<div class="col-md-10 py-4 mx-auto">
            <div class="card-body bg-white " style="border-radius: 25px;">
        <p class="text-center h5 fw-bold ">Descripción del producto que desea</p>
        <hr>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo 3D</label>
            <input type="file" class="form-control" name="modelo" id="" placeholder="" aria-describedby="fileHelpId" >
            <small id="fileHelpId" class="form-text text-muted">Archivo .stl</small>
        </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción del producto</label>
                    <textarea class="form-control shadow" name="descripcion" id="" rows="3" ></textarea>
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
                <input type="number" name="altura" id="altura" step="any" max="20" class="form-control shadow" placeholder="Altura" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Longitud cm</span>
                <input type="number" name="longitud" id="longitud" step="any" max="14.8" class="form-control shadow" placeholder="Longitud" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Anchura cm</span>
                <input type="number" name="anchura" id="anchura" step="any" max="14" class="form-control shadow" placeholder="Anchura" >
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
                <select class="form-select shadow" name="material" id="" >
                <option selected>-- Selecciona un Material --</option>
              <?php foreach ($resultados as $resultado): ?>
                <option value="<?php echo $resultado['price']; ?>">
                    <?php echo $resultado['name'] . ' - ' . $resultado['colour']; ?>
                </option>
              <?php endforeach?>
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
<input type="radio" class="form-check-input" name="relleno" value="20-30" id="" >
</div>
  <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/relleno-2.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 2">
    <label for="relleno">Relleno 50 - 60%</label>
    <input type="radio" class="form-check-input" name="relleno" value="50-60" id="" >

  </div>
  <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/relleno-3.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 3">
    <label for="relleno">Relleno 90 - 100%</label>
    <input type="radio" class="form-check-input" name="relleno" value="90-100" id="" >

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
<input type="radio" class="form-check-input" name="acabado" value="20-30" id="" >
</div>
  <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/calidad-2.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 2">
    <label for="acabado">Medio</label>
    <input type="radio" class="form-check-input" name="acabado" value="50-60" id="" >

  </div>
  <div class="col-md-4 py-2 px-2  shadow">
    <img src="image/calidad-3.jpg" class="imgzoom figure-img img-fluid rounded" alt="relleno 3">
    <label for="acabado">Rugoso</label>
    <input type="radio" class="form-check-input" name="acabado" value="90-100" id="" >

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
<img src="image/cubo.png" class=" img-fluid  rounded" alt="Cubo" style="width:90%">  <br>
<label for="acabado">Cubo</label>
<input type="radio" class="form-check-input" name="forma" value="cubo" id="" >
</div>
  <div class="col-md-6 py-2 px-2  shadow">
    <img src="image/triangulo.png" class=" img-fluid rounded" alt="Pirámide">
    <label for="acabado">Pirámide</label>
    <input type="radio" class="form-check-input" name="forma" value="piramide" id="" >

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
    <input type="submit" class="btn btn-success" name="submit" value="Sacar solo Cotización">

    <button type="button" class="btn btn-danger">¿Quiere continuar con la compra? <i class="bi-arrow-right-circle"></i></button>
  </center>
</div>

</form>
    </div>
   

    <div class="col-md-4 py-4 px-4">
      <div class="card-body bg-white">
      <p class="text-center h5 fw-bold ">Detalles de cotización</p>
<hr>
<?php if ($tiempoMinutos): ?>
  <strong>Minutos para imprimir <?php echo round(
    $tiempoMinutos
); ?> minutos</strong> <br>
  <strong>o tambien</strong><br>
  <strong>Horas para imprimir <?php echo round($horas, 2); ?> hrs</strong> <br>
<?php endif;?>

<hr>
<?php if ($precio): ?>
  <strong>Filamento $<?php echo round($precio); ?> pesos MXN</strong>
<?php endif;?>

<p id="p1">
El filamento se cobra por minuto según el tipo de material del filamento seleccionado, cada filamento tiene sus pros y contras, Revisa la información proporcionada!!! <br><br>
<a href="filamentos.php"class="btn btn-outline-primary btn-sm"><i class="bi-heart-fill"></i> Filamentos</a>
</p>

<input type="button" class="btn btn-secondary btn-sm" value="Mostrar"
onclick="document.getElementById('p1').style.visibility='visible'">
<input type="button" class="btn btn-secondary btn-sm" value="Ocultar" 
onclick="document.getElementById('p1').style.visibility='hidden'">



      </div>
    </div>

    </div>

<?php include 'layout/footer.php';?>

</body>

</html>