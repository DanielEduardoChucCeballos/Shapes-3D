<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shapes 3D') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--  Iconos  -->
    <link rel="stylesheet" type="text/css" href="">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

        /* Efecto de menu: Tamaño inicial  */
        header{ background: rgb(0, 145, 137); border-bottom: 1px solid rgb(10, 200, 244);}
        header a{ color: rgb(0, 145, 137); }
        header a.active, header a:hover{ color: #3d3d3d; }
        /* Sizes for the bigger menu */
        header.large{ height: 120px; }
        header.large img{ width: 100px; height: 100px; margin-top: 70px; }
        header.large li{ margin-top: 45px; }
        header.large form{ margin-top: 45px; }

        /* Efecto de menu: Tamaño pequeño */
        header.small{ height: 50px; }
        header.small img{ width: 50px; height: 50px; margin-top: 10px; }
        header.small li{ margin-top: 17px; }

        /* Transicion de menu a menu  */
        header,nav, a, img, li{
        transition: all 0.5s;
        -moz-transition: all 0.5s; /* Firefox 4 */
        -webkit-transition: all 0.5s; /* Safari and Chrome */
        -o-transition: all 0.5s; /* Opera */
}
    </style>
</head>

<body>
    <div id="app">
    <header class="large shadow">
        <nav class="fijo top-left body navbar navbar-expand-lg navbar-light py-4" style="background-color:rgb(0, 145, 137); z-index: 100;">
            <div class="container-fluid">
                <a class="px-4 nav-link" href="{{ route('index') }}"><img src="{{ asset('image/logo14.png') }}"
                        alt="Shapes 3D" class="" style="cursor: pointer;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  text-light robotofont " aria-current="page"
                                href="{{ route('index') }}">Página principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light robotofont" href="contacto.php">Contáctanos</a>



                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light robotofont" href="#">Documentación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light robotofont" href="#">Experiencias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light robotofont" href="{{ route('services') }}">Servicios</a>
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
                    <!--form class="d-flex">
                        <input class="form-control  robotofont " type="Buscar" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-dark border-white robotofont" type="submit"><i
                                class="fas fa-search"></i></button>
                    </form-->



                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light robotofont"
                                        href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light robotofont"
                                        href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                @can('adminDashboard')
                                <a class="nav-link text-light robotofont" href="{{__('admin')}}">Dasboard</a>
                                    
                                @endcan
                            </li>
                            <li class="nav-item">

                                <a id="navbarDropdown" class="nav-link text-light robotofont " href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fab fa-ello"></i>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li>
                                <!--a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a-->

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <!--form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form-->
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>
    </header>
        <main class="">
            @yield('content')
        </main>
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-linkedin-in"></i></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->

                <!-- Section: Form -->

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum repellat quaerat
                    voluptatibus placeat nam, commodi optio pariatur est quia magnam eum harum corrupti dicta, aliquam
                    sequi voluptate quas.
                </p>
                </section>
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Link 1</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 2</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 3</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Link 1</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 2</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 3</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Link 1</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 2</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 3</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Link 1</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 2</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 3</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Shapes 3D © 2020 Copyright

            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- Configuracion de transición de tamaño de nav -->
    <script type="text/javascript">
        $(document).on("scroll",function(){
            if($(document).scrollTop()>25){
                $("header").removeClass("large").addClass("small");
            } else{
                $("header").removeClass("small").addClass("large");
            }
});
</script>
</body>

</html>
