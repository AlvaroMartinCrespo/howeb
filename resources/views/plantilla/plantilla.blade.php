<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/img/landing/icons/logoSinFondo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>

</head>

<body>
    <main>
        @yield('main')
    </main>

    <footer>

        <div id="container-footer" class="bg-gray-200 py-4">
            <div class="container px-4 mx-auto text-center text-sm flex justify-center items-center">
                <img class="w-[5rem]" src="{{ asset('/img/landing/icons/logoSinFondo.png') }}" alt="logoSinFondo">
                <p class="text-black">Todos los derechos reservados &copy; 2023 Howeb.com</p>
            </div>
        </div>
    </footer>

</body>

</html>
