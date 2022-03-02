<?php

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

$volumen = $longitud * $altura * $anchura;
/* echo "Volumen $volumen";
 */
$vmax =4144;
$tmax = 2700;

$tiempoMinutos = $volumen *  $tmax / $vmax;
$horas = $tiempoMinutos / 60;
$precio = $tiempoMinutos * $material;
/* echo "El tiempo en minutos para imprimir es de $tiempoMinutos minutos por lo cual el precio de
1.5 pesos por minuto seria de $$precio pesos MX";

 */

?>