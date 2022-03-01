<?php
print_r($_POST);
$area = $longitud * $anchura * $altura;


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$empresa = $_POST['empresa'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$modelo = $_POST['modelo'];
$description = $_POST['description'];
$altura = $_POST['altura'];
$longitud = $_POST['longitud'];
$anchura = $_POST['anchura'];
$material = $_POST['material'];
$relleno = $_POST['relleno'];
$acabado = $_POST['acabado'];








$altura = $_POST['altura'];
$longitud = $_POST['longitud'];
$anchura = $_POST['anchura'];

$area = $longitud * $altura * $anchura;
echo "Area $area";


?>