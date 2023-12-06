<nav class="navbar navbar-expand-lg bg-white fixed-top transition-all duration-700 ease-in-out" id="navbar-fixed">
    <div class="container py-2">
        {{--  hamburguesa - xs  --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarCanvaStartup"
            aria-controls="navbarCanvaStartup" id="btn-burguer">
            {{--  svg burguer  --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-list text-gray-500" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 5.5A.5.5 0 0 1 3 5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0 4A.5.5 0 0 0 3 10h10a.5.5 0 0 0
                    0-1H3a.5.5 0 0 0-.5.5z">
                </path>
                <path fill-rule="evenodd"
                    d="M2.5 1.5A.5.5 0 0 1 3 1h10a.5.5 0 0 1
                    0 1H3a.5.5 0 0 1-.5-.5zm0 4A.5.5 0 0 0
                    3 6h10a.5.5 0 0 0 0-1H3a.5.5 0
                    0 0-.5.5z" class="icon-line hidden">
                </path>
                <path fill-rule="evenodd"
                    d="M2.5 9.5A.5.5 0 0 1 3 9h10a.5.5 0
                    0 1 0 1H3a.5.5 0 0 1-.5-.5zm0
                    4A.5.5 0 0 0 3 14h10a.5.5 0
                    0 0 0-1H3a.5.5 0 0 0-.5.5z" class="icon-line hidden">
                </path>
            </svg>
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
                <ul
                    class="flex flex-col justify-center items-center gap-4 pr-8 border-b w-72 mx-auto pb-5 border-gray-100">
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg"
                            href="{{ route('landings') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg"
                            href="{{ route('landings.startup') }}">
                            Startup
                        </a>
                    </li>
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg"
                            href="{{ route('landings.professional') }}">
                            Profesionales
                        </a>
                    </li>
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg"
                            href="{{ route('landings.investor') }}">
                            Inversor
                        </a>
                    </li>
                    <li>
                        <a class="text-white hover:no-underline no-underline font-bold text-lg" href="#">
                            Comunidad
                        </a>
                    </li>
                </ul>

                <div class="flex flex-col items-center gap-3 pt-5">
                    <a class="border-2 border-fuchsia-700 text-white py-2 px-10 uppercase no-underline hover:no-underline"
                        href="{{ route('engine.login') }}" target="_blank">
                        Iniciar sesion
                    </a>
                    <a class="border-2 border-fuchsia-700 bg-fuchsia-700 text-white py-2 px-10 uppercase no-underline hover:no-underline"
                        href="{{ route('engine.register') }}" target="_blank">
                        Crear cuenta
                    </a>
                </div>
            </div>
        </div>
        {{--  /hamburguesa - xs  --}}

        {{--  logo all  --}}
        <a href="/">
            <img src="/img/logos/phone.png" class="d-block d-md-none" id="img-startup-xs">
            <img src="/img/logos/color.png" class="d-none d-md-block" id="img-startup-md">
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
        <ul class="mt-3 gap-3 px-5 justify-start hidden md:flex">
            <li>
                <a class="nav-link" aria-current="page" href="/">
                    Home
                </a>
            </li>
            <li>
                <a class="nav-link" aria-current="page" href="{{ route('landings.startup') }}">
                    Startups
                </a>
            </li>
            <li>
                <a class="nav-link" aria-current="page" href="{{ route('landings.professional') }}">
                    Profesionales
                </a>
            </li>
            <li>
                <a class="nav-link" aria-current="page" href="{{ route('landings.investor') }}">
                    Inversores
                </a>
            </li>
        </ul>
        <div class="hidden md:flex justify-between items-center">
            <div class="flex justify-end items-center gap-3">
                <a class="px-10 py-1 bg-white text-app-blue-2 no-underline hover:bg-app-blue-1 transition-all ease-in-out duration-200 font-semibold border-0"
                    href="{{ route('engine.login') }}" target="_blank">
                    {{--  svg login  --}}
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-user bg-app-blue-2 p-2 rounded-full hover:bg-app-blue-1 duration-300 ease-out"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <span>Iniciar sesión</span>
                    </div>
                </a>
                <a class="py-2 px-8 bg-[#bd13b8] uppercase rounded-md text-zinc-50 hover:text-white no-underline hover:bg-[#7a1276] duration-300 ease-out"
                    href="{{ route('engine.register') }}" target="_blank">
                    <span class="font-semibold text-base">
                        Crear cuenta
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>
