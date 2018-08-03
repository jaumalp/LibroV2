<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - LIBRO -</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="container bg-light">

    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <a class="navbar-brand text-light">Libro G2</a>
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="glyphicon glyphicon-th-list"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container d-block d-sm-none sticky-top my-1">
        <header>
            <div>
              Hola
            </div>
        </header>
    </div>

    <div class="container">

            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>
            <p>LOREM</p>

            @yield('content')

    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
