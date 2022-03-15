<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
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

<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>

<section class=" py-4 robotofont" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
             
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
          <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-2 mt-4">Iniciar Sesión</p>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
                	<div class="error-msg" id="error-msg"></div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <div class="form-label">
            
								Nombre de Usuario <span class="required error" id="username-info"></span>
							</div>
                      <input type="text" id="username" class="form-control shadow" name="username" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                   

                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <div class="form-label">
								Contraseña <span class="required error" id="login-password-info"></span>
							</div>

                      <input class="form-control shadow" type="password"
								name="login-password" id="login-password"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                    

                     
                    </div>
                  </div>
                 <!-- //Olvidó su contraseña aquí -->
                  <div class="form-check d-flex justify-content-center mb-5"> </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    
                    <button type="submit" name="login-btn"
                    
							id="login-btn" value="Login Now" class="btn btn-primary btn-lg">Iniciar Sesión</button>
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
<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("Necesario.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("Necesario.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
<?php require 'layout/footer.php'; ?>

</body>
</html>