<?php
$errores = '';
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $r_password = $_POST['r_password'];
    $confirm = $_POST['confirm'];
    $register = $_POST['register'];

    if (!empty($username)) {
        $username = filter_var($username, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un nombre <br>';
    }

    //! SE MUESTRA LA VALIDACION DE UN CORREO ELECTRONICO
    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Por favor ingrese un email valido <br>';
        } else {
        }
    } else {
        $errores .= ' Porfavor agregue un email <br>';
    }

    if (!empty($password)) {
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $password = md5($password);
    } else {
        $errores .= ' Porfavor agregue una contraseña <br>';
    }

    if (!empty($r_password)) {
        $r_password = filter_var($r_password, FILTER_SANITIZE_STRING);
        $r_password = md5($r_password);
    } else {
        $errores .= ' Porfavor verfifique su contraseña <br>';
    }

    if (!empty($confirm)) {
        $confirm = filter_var($confirm, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor acepte los terminos y condiciones <br>';
    }

    if ($password !== $r_password) {
        $errores .= 'Las contraseña no coinciden <br>';
        echo $password;
        echo '/';
        echo $r_password;
    } else {
        echo 'Coinciden';
    }
} ?>
