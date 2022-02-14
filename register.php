<?php
$errores ="";
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
  echo "/";
  echo $r_password;
  
  
}else{
  echo "Coinciden";
}


} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro | Shapes 3D</title>
</head>
<body>
<?php require 'layout/header.php'; ?>
<section class=" py-4 robotofont" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              <?php if (!empty($errores)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?php echo $errores; ?></strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                  <?php endif; ?>
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registro</p>

                <form action="<?php echo htmlspecialchars(
                    $_SERVER['PHP_SELF']
                ); ?>" method="POST"class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Nombre de Usuario</label>

                      <input type="text" id="form3Example1c" class="form-control shadow" name="username" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Email</label>

                      <input type="email" id="form3Example3c" class="form-control shadow" name="email" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Contraseña</label>

                      <input type="password" id="form3Example4c" class="form-control shadow" name="password"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Verifique su contraseña</label>

                      <input type="password" id="form3Example4cd" class="form-control shadow" name="r_password"/>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value="confirm"
                      name="confirm"
                    />
                    <label class="form-check-label" for="form2Example3">
                    Acepto todos los <a href="#!"> Términos y condiciones</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="register" value="register" class="btn btn-primary btn-lg">Registrar</button>
                  </div>

                </form>
               
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="image/pp.jpeg" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br>
<br><br><br>
</section>
<!-- //test -->

<?php require 'layout/footer.php'; ?>

</body>
</html>