<nav class="navbar navbar-expand-lg bg-light">
    <div class="container px-3 py-2">

        {{--  hamburguesa - xs  --}}
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-image: url('img/general/menu.png');"></span>
        </button>

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
                <a class="btn btn-primary btn-lg" href="https://engine.thestartup-community.com/" target="_blank">
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
