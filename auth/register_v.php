<?php

include('db/config.php');
session_start();
 
if (isset($_POST['confirm'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $r_password = $_POST['r_password'];
    $confirm = $_POST['confirm'];
    $register = $_POST['register'];


    

    echo $username . '-' . $email . '-' . $password. '-' .$confirm. '-' .$register. '-' .$r_password;
}else {
    echo 'Porfavor acepte los terminos y condiciones';
}

?>
