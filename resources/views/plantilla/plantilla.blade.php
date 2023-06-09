<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/img/landing/icons/logoSinFondo.png') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>

</head>

<body>

    <nav id="nav-landing"
        class="z-40 transition-all ease-in-out duration-400 bg-white fixed p-3 w-full hover:rounded-none hover:opacity-100 hover:p-3 hover:bg-slate-100 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class=" h-full flex items-center justify-center align-items-center">
                    <span class="h-full text-white font-bold"><img class="h-full"
                            src="{{ asset('/img/landing/icons/logoSinFondo.png') }}" alt="logo-hov"></span>
                    <div class="hidden md:block">
                        <a href="{{ route('landing') }}"
                            class="ml-10 box-content w-25 text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400 font-bold">Inicio</a>
                        <a href="{{ route('accomodations') }}"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400 font-bold">Alojamientos</a>
                        <a href="{{ route('aboutUs') }}"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400 font-bold">Sobre
                            Nosotros</a>
                        @auth
                            @if (auth()->user()->admin)
                                <a href="{{ route('cpanel') }}"
                                    class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400 font-bold">Control
                                    Panel</a>
                            @endif
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
                            {{-- If user is admin --}}
                            @if (auth()->user()->admin)
                                <li>
                                    <a href="{{ route('cpanel') }}"
                                        class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Control
                                        Panel</a>
                                </li>
                            @endif
                            <li>
                                <form
                                    class="bg-gray-200 hover:bg-gray-400 w-full h-full block whitespace-no-wrap rounded-b shadow-lg m-0"
                                    action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="w-full h-full p-3" type="submit">Logout</button>
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

<script src="{{ asset('js/navbar.js') }}"></script>

</html>
