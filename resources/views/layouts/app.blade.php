<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ASIS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Dosis|Lato|Merriweather|Oswald|Roboto+Condensed|Source+Serif+Pro|Teko|Yanone+Kaffeesatz|Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('nav.navbar')
    @include('nav.adminmenu')

    <div id="app">
        
        @yield('content')
    </div>
    @include('nav.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
