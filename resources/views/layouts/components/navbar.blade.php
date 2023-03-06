<nav class="navbar navbar-expand-lg bg-white">
    <div class="container px-3 py-2">

        {{--  hamburguesa - xs  --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarCanvaStartup"
            aria-controls="navbarCanvaStartup">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end d-block d-md-none opacity-90" tabindex="-1"
            style="background-color: #0e5394;" id="navbarCanvaStartup" aria-labelledby="navbarCanvaStartupLabel">
            <div class="offcanvas-header">
                <button type="button" class="text-white font-bold" data-bs-dismiss="offcanvas" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-x" viewBox="0 0 20 20">
                        <path
                            d="M14.354 1.646a.5.5 0 0 1 0 .708L9.707 8l4.647 4.646a.5.5 0 0 1-.708.708L9 8.707l-4.646 4.647a.5.5 0 0 1-.708-.708L8.293 8 3.646 3.354a.5.5 0 0 1 .708-.708L9 7.293l4.646-4.647a.5.5 0 0 1 .708 0z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="offcanvas-body pt-5">
                <ul class="flex flex-col justify-center items-center gap-4 pr-5 border-b pb-5 border-gray-100">
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg" href="#">Home</a>
                    </li>
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg"
                            href="#">Startup</a>
                    </li>
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg"
                            href="#">Profesionales</a>
                    </li>
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg"
                            href="#">Inversor</a>
                    </li>
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg"
                            href="#">Comunidad</a>
                    </li>
                </ul>

                <div class="flex flex-col items-center gap-3 pt-5">
                    <a class="border-2 border-fuchsia-700 text-white py-2 px-10 uppercase no-underline hover:no-underline"
                        href="#">
                        Iniciar sesion
                    </a>
                    <a class="border-2 border-fuchsia-700 bg-fuchsia-700 text-white py-2 px-10 uppercase no-underline hover:no-underline"
                        href="#">
                        Crear cuenta
                    </a>
                </div>
            </div>
        </div>
        {{--  /hamburguesa - xs  --}}

        {{--  logo all  --}}
        <a href="/">
            <img src="/img/logos/phone.png" class="d-block d-md-none">
            <img src="/img/logos/color.png" class="d-none d-md-block">
        </a>

        {{--  user - xs  --}}
        <a href="/" class="d-block d-md-none dark-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                class="bi bi-person" viewBox="0 0 16 16">
                <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                </path>
            </svg>
        </a>

        {{--  menu md  --}}
        <div class="justify-center items-center hidden md:flex">
            <ul class="flex items-center mt-3 gap-3 px-5">
                <li>
                    <a class="nav-link text-center" aria-current="page" href="{{ route('landings.startup') }}">
                        Startups
                    </a>
                </li>
                <li>
                    <a class="nav-link text-center" aria-current="page" href="{{ route('landings.professional') }}">
                        Profesionales
                    </a>
                </li>
                <li>
                    <a class="nav-link text-center" aria-current="page" href="{{ route('landings.investor') }}">
                        Inversores
                    </a>
                </li>
                </li>
            </ul>
            <div>
                <a class="btn btn-primary btn-lg uppercase" href="https://engine.thestartup-community.com/"
                    target="_blank">
                    @if (request()->route()->uri === 'startup')
                        ¡QUIERO UNIRME!
                    @elseif (request()->route()->uri === 'investor')
                        ¡QUIERO INVERTIR!
                    @elseif (request()->route()->uri === 'professional')
                        ¡QUIERO Trabajar!
                    @else
                        ¡QUIERO Registrarme!
                    @endif
                </a>
            </div>
        </div>
    </div>
</nav>


{{--  <nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Offcanvas navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>  --}}
