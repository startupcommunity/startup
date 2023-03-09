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

    <!-- assets -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('css')

    @yield('scripts')

    @routes
</head>

<body class="HomeGeneral01">
    <div id="app">
        <div class="Cabezal_PrincipalDefault">
            @include('layouts.components.navbar')
        </div>

        <main>
            @yield('content')
        </main>

        @include('layouts.components.footer')
        @yield('modals')
    </div>
</body>

</html>
