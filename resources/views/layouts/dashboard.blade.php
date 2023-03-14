<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio - {{ config('app.name') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="body-dashboard">
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box p-3">
                <a href="/">
                    <img src="img/logo-dashboard.png" alt="" width="100%">
                </a>
            </div>
            <div class="sidebar-body px-2">
                <ul class="list-unstyled">
                    <li class="">

                    </li>
                </ul>
            </div>
        </div>
        <div class="content bg-white">
            <div id="app">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
