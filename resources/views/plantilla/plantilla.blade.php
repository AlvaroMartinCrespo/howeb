<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/img/landing/icons/logoSinFondo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>

</head>

<body>
    <main>
        @yield('main')
    </main>
    <footer>

    </footer>
</body>

</html>
