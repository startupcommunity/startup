<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Startup Community') }}</title>

    <!-- Favicons -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Scripts -->
    <!-- Landing CSS Files -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('css')
</head>

<body class="HomeGeneral01">
    <div id="app">
        <div class="Cabezal_PrincipalDefault">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container px-lg-5">
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="background-image:url(img/general/menu.png)"></span>
                    </button>
                    <a class="navbar-brand mx-auto " href="/">
                        <img src="/img/logos/phone.png" class="d-block d-md-none">
                        <img src="/img/logos/color.png" class="d-none d-md-block">
                    </a>
                    <a href="/" class="d-block d-md-none dark-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                            </path>
                        </svg>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-3">
                            <li>
                                <a class="nav-link text-center" aria-current="page" href="startup">
                                    Startups
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-center" aria-current="page" href="professional">
                                    Profesionales
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-center" aria-current="page" href="investor">
                                    Inversores
                                </a>
                            </li>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a class="btn btn-primary btn-lg" href="https://engine.thestartup-community.com/"
                                target="_blank">
                                @if (\Route::current()->getName() == 'landings' || \Route::current()->getName() == 'landings.startup')
                                    ¡QUIERO UNIRME!
                                @elseif (\Route::current()->getName() == 'landings.investor')
                                    ¡QUIERO INVERTIR!
                                @else
                                    ¡QUIERO TRABAJAR!
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="">
            @yield('content')
        </div>

        <footer id="footer" class="footer">
            <div class="footer-top py-auto">
                <div class="container">
                    <div class="row gy-4">
                        <div class="container">
                            <div class="copyright" style="color:white">
                                &copy; STARTUP COMMUNITY Todos los derechos reservados.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        @yield('modals')
    </div>

</body>

</html>
