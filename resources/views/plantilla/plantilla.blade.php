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

    <nav id="nav-landing"
        class="transition-all ease-in-out duration-400 bg-white fixed p-3 z-10 w-full hover:opacity-100 hover:p-3 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class=" h-full flex items-center justify-center align-items-center">
                    <a href="#" class="h-full text-white font-bold"><img class="h-full"
                            src="{{ asset('/img/landing/icons/logoSinFondo.png') }}" alt="logo-hov"></a>
                    <div class="hidden md:block">
                        <a href="{{ route('landing') }}"
                            class="ml-10 box-content w-25 text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400 ">Inicio</a>
                        <a href="#"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Hoteles</a>
                        <a href="#"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Sobre
                            Nosotros</a>
                        @auth
                            @if (auth()->user()->admin)
                                <a href="#"
                                    class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Control
                                    Panel</a>
                            @else
                            @endif
                        @else
                        @endauth

                    </div>
                </div>
                <div
                    class="relative p-1 rounded-full transition ease-in-out duration-300 hover:bg-orange-200 h-full hidden md:block">
                    <button id="dropdown" class="h-full text-gray-300 hover:text-white">
                        @auth
                            <img class="h-full rounded-full" src="{{ asset('/img/landing/avatar.png') }}" alt="login">
                        @else
                            <img class="h-full rounded-full" src="{{ asset('/img/icons/iconoNoPhoto.png') }}"
                                alt="login">
                        @endauth

                    </button>
                    <ul id="menu" class="absolute hidden text-gray-70 pt-1 right-[0rem] w-[6rem]">
                        {{-- If user is logged --}}
                        @auth
                            <li><a href="{{ route('home') }}"
                                    class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap rounded-t">{{ strtoupper(Auth()->user()->name) }}</a>
                            </li>
                            <li>
                                <form
                                    class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap rounded-b shadow-lg"
                                    action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>

                            </li>
                        @else
                            <li><a href="{{ route('login') }}"
                                    class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap rounded">Inicio
                                    Sesión</a>
                            </li>
                        @endauth

                    </ul>
                </div>

            </div>
        </div>
    </nav>

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

<script src="{{ asset('js/navbar.js') }}"></script>

</html>
