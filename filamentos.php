
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filamento | Shapes 3D</title>
</head>
<body>
<?php require('layout/header.php'); ?>
<div class="container py-4">
<table class="table table-striped ">
    <thead class="thead-inverse">
        <tr>
            <th>Tipo</th>
            <th>Colores disponibles</th>
            <th>Precio por minuto</th>
            <th>Resistencia a la tracción</th>
            <th>Densidad </th>
            <th>Punto de fusión</th>
            <th>Biodegradable</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">PLA (ácido poliláctico)</td>
                <td>Verde, Rojo, Negro, Blancom, Azul</td>
                <td>$1.20 pesos MXN</td>
                <td>27 MPa</td>
                <td>1.3 g/cm3</td>
                <td>173ºC</td>
                <td>Sí, bajo las condiciones correctas</td>
            </tr>
            <tr>
                <td scope="row">ABS (acrilonitrilo butadieno estireno)</td>
                <td>Verde, Rojo, Negro, Blancom, Azul</td>
                <td>$1.20 pesos MXN</td>
                <td>37 MPa</td>
                <td>1.0 a 1.4 g/cm3 </td>
                <td>N/A (amorfo)</td>
                <td>No</td>
            </tr>
            <tr>
                <td scope="row">PET</td>
                <td>Verde, Rojo, Negro, Blancom, Azul</td>
                <td>(no disponible)</td>
            </tr>
        </tbody>
</table>

</div>
<?php require 'layout/footer.php'; ?>
</body>
</html>