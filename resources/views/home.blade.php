<!DOCTYPE html>
<html data-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gym ADM</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="base-100">
        @yield('content')
    </body>
</html>
