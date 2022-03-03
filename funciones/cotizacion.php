<?php
include 'db/config.php';


$errores = '';
$vmax = 4144;
$tmax = 2700;
$volume = '';

if (isset($_POST['submit'])) {
    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $business = $_POST['empresa'];
    $address = $_POST['direccion'];
    $email = $_POST['email'];
    $phone = $_POST['telefono'];
    $model = $_POST['modelo'];
    $description = $_POST['descripcion'];
    $height = $_POST['altura'];
    $length = $_POST['longitud'];
    $width = $_POST['anchura'];
    $filament = $_POST['material'];
    $filling = $_POST['relleno'];
    $finished = $_POST['acabado'];
    $shape = $_POST['forma'];

    if (!empty($name)) {
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un Nombre <br>';
    }
    if (!empty($lastname)) {
        $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un Apellido <br>';
    }
    if (!empty($business)) {
        $business = filter_var($business, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un Nombre de su empresa<br>';
    }
    if (!empty($address)) {
        $address = filter_var($address, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue una Dirección <br>';
    }
    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Por favor ingrese un email valido';
        } else {
        }
    } else {
        $errores .= ' Porfavor agregue un Email';
    }

    if (!empty($phone)) {
        $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un Teléfono valido <br>';
    }

    /*  if (!empty($model)) {
        $model = filter_var($model, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor inserte un Modelo <br>';
    } */
    if (!empty($description)) {
        $description = filter_var($description, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue una Descripción <br>';
    }
    if (!empty($height)) {
        $height = filter_var($height, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue la altura <br>';
    }
    if (!empty($length)) {
        $length = filter_var($length, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue la longitud <br>';
    }
    if (!empty($width)) {
        $width = filter_var($width, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue la anchura <br>';
    }
    if (!empty($filament)) {
        $filament = filter_var($filament, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue el Material de filamento <br>';
    }
    if (!empty($filling)) {
        $filling = filter_var($filling, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue el Relleno<br>';
    }
    if (!empty($finished)) {
        $finished = filter_var($finished, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un Acabado <br>';
    }
    if (!empty($shape)) {
        $shape = filter_var($shape, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor determine la forma <br>';
    }

    //Si se quiere subir una imagen
    if (isset($_POST['submit'])) {
        //Recogemos el archivo enviado por el formulario
        $model = $_FILES['model']['name'];
        //Si el archivo contiene algo y es diferente de vacio
        if (isset($model) && $model != '') {
            //Obtenemos algunos datos necesarios sobre el archivo
            $tipo = $_FILES['model']['type'];
            $tamano = $_FILES['model']['size'];
            $temp = $_FILES['model']['tmp_name'];
            //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
            if (
                !(
                    (strpos($tipo, 'gif') ||
                        strpos($tipo, 'jpeg') ||
                        strpos($tipo, 'jpg') ||
                        strpos($tipo, 'png')) &&
                    $tamano < 2000000
                )
            ) {
                echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
         - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
            } else {
                //Si la imagen es correcta en tamaño y tipo
                //Se intenta subir al servidor
                if (move_uploaded_file($temp, 'image/' . $archivo)) {
                    //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                    chmod('image/' . $archivo, 0777);
                    //Mostramos el mensaje de que se ha subido co éxito
                    echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                    //Mostramos la imagen subida
                    echo '<p><img src="image/' . $archivo . '"></p>';
                } else {
                    //Si no se ha podido subir la imagen, mostramos un mensaje de error
                    echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                }
            }
        }
    }

    if ($shape === 'cubo') {
        if ($length or $height or $width) {
            $volume = $length * $height * $width;
            $tiempoMinutos = ($volume * $tmax) / $vmax;
            $horas = $tiempoMinutos / 60;
            $precio = $tiempoMinutos * $filament;
        }
    } else {
        if ($length or $height or $width) {
            $volume = (($length * $height) / 2) * $width;
            $tiempoMinutos = ($volume * $tmax) / $vmax;
            $horas = $tiempoMinutos / 60;
            $precio = $tiempoMinutos * $filament;
        }
    }
   
}

?>
