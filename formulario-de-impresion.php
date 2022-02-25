<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Impresion | Shapes 3D</title>
</head>
<body >
    <?php
    include "layout/header.php";
    ?>

<div class="container py-4">
<div class="mb-3">
  <label for="nombre" class="form-label">Nombre</label>
  <input type="text" class="form-control shadow" name="nombre" id="" placeholder="Nombre">
</div>
<div class="mb-3">
  <label for="telefono" class="form-label">Teléfono</label>
  <input type="text" class="form-control shadow" name="telefono" id="" placeholder="Teléfono">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control shadow" name="email" id="" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control shadow" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>


    <?php
    include "layout/footer.php";
    ?>
</body>
</html>