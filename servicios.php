<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios | Shapes 3D</title>
</head>
<body style="background-color: #eee;">
<?php
require "layout/header.php";

?>

<div class="container ">
<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Servicios</p>


<div class="row justify-content-center ">

  <div class="card col-lg-4 mx-3 my-3">
    <div class="my-4 rounded-bottom py-4 px-4 text-center" >
      <img src="image/8.png" class="card-img-top w-50" alt="...">
      <div class="card-body">
        <h5 class="card-title robotofont text-start ">Impresiones</h5>
        <hr>
        <p class="card-text text-start ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <div class="d-grid gap-2">
          <a href="formulario-de-impresion.php" class="btn btn-primary  btn-lg">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card col-lg-4 mx-3 my-3">
  <div class="my-4 rounded-bottom py-4 px-4" >
    <img src="image/8.png" class="card-img-top imgzoom w-50" alt="...">
    <div class="card-body">
      <h5 class="card-title robotofont">Diseño Personalizado</h5>
      <hr>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="dise-personalizado.php" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  </div>


  
  

</div>

</div>
<?php
require "layout/footer.php";

?>
</body>
</html>