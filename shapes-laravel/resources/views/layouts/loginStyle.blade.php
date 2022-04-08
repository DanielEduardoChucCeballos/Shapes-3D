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
        header{ background: rgb(10, 200, 244); border-bottom: 1px solid rgb(10, 200, 244);}
        header a{ color: rgb(10, 200, 244); }
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
    <div id="app" class="container-flex">
        <nav class="navbar">
            
                <ul class="nav-link">
                    <li class="nav-link">
                        
                    </li>
                </ul>
            
        </nav>
        <div class="row padre">
            <div class="col-md-4">
                <img src="image/logo13.jpeg" class="rounded-circle shadow" style="width: 350px; height: 350px;">
            </div>
             <div class="col-md-8">
                 <main class="">
                    @yield('content')
                </main>
             </div>          
        </div>
    </div>
    <!-- Configuracion de transición de tamaño de nav -->
    
</body>

</html>
