<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        
        <header>
            <img src="/img/logo.png" class="logo" alt="wineclub logo">
        </header>

        @yield('content')

        <footer>Copyright 2021 Wine Club</footer>
    </body>
</html>