
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<style>
    .robotofont {
        font-family: 'Roboto', sans-serif;
    }

    footer {
        position: relative;
        bottom: 0;
        width: 100%;
        height: 70%;
    }
    

    
    .imgzoom {
        transition: 0.5s;
        object-fit: cover;
    }
    
    .imgzoom:hover {
        transform: scale(1.2);
    }
</style>
<!-- fs-4 px-5+ py-3 robotofont text-light 125, 29, 214       style="background-color:rgb(127, 20, 228);"-->

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light py-4 " style="background-color:rgb(4, 14, 105);">
        <div class="container-fluid">
            <a class="px-4" href="index.php"><img src="image/pp.jpeg" alt="Shapes 3D" class="rounded-circle" style="cursor: pointer; width: 80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  text-light robotofont " aria-current="page" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light robotofont" href="contacto.php">CONTÁCTANOS</a>
    


                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light robotofont" href="#">DOCUMENTACIÓN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light robotofont" href="#">EXPERIENCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light robotofont" href="servicios.php">SERVICIOS</a>
                    </li>
     <!--                <li class="nav-item">
                        <a class="nav-link text-light robotofont" href="#">PRODUCTOS</a>
                    </li>
              

    <div class="dropdown open robotofont">
        <button class="btn btn-danger dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                    Productos
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <button class="dropdown-item" href="#">Action</button>
            <button class="dropdown-item disabled" href="#">Disabled action</button>
        </div>
    </div> -->



                </ul>
                <form class="d-flex">
                    <input class="form-control  robotofont " type="Buscar" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-dark border-white robotofont" type="submit"><i class="fas fa-search"></i></button>
                </form>


                <a href="login.php" class="nav-link  text-light robotofont ">Login</a>
                <a href="register.php" class="nav-link  text-light robotofont ">Register</a>

            </div>
        </div>
    </nav>


</body>

</html>