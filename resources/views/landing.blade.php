@extends('plantilla/plantilla')

@section('title', 'Howeb Hotels')

@section('main')

    {{-- <nav id="nav-landing"
        class="transition-all ease-in-out duration-400 bg-white p-3 fixed z-10 w-full hover:opacity-100 hover:p-3">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class=" h-full flex items-center justify-center align-items-center">
                    <a href="#" class="h-full text-white font-bold"><img class="h-full"
                            src="{{ asset('/img/landing/icons/logoSinFondo.png') }}" alt="logo-hov"></a>
                    <div class="hidden md:block">
                        <a href="#"
                            class="ml-10 box-content w-25 text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400 ">Inicio</a>
                        <a href="#"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Hoteles</a>
                        <a href="#"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Sobre
                            Nosotros</a>
                    </div>
                </div>
                <div
                    class="p-1 rounded-full transition ease-in-out duration-300 hover:bg-orange-200 h-full hidden md:block">
                    <a href="{{ route('login') }}" text-gray-300 hover:text-white"><img class="h-full"
                            src="{{ asset('/img/icons/iconoNoPhoto.png') }}" alt="login"></a>
                </div>

            </div>
        </div>
    </nav> --}}

    <section id="inicio-landing" class="w-full h-[45rem] bg-[url('{{ asset('/img/landing/playa.jpg') }}')]">

        <div class="h-full flex justify-center items-center flex-col">
            <h1 class="text-white font-bold text-6xl left-50 top-50">Playas. <span class="text-orange-300">Hoteles.</span>
                <br><span class="text-7xl ">Diversion.</span>
            </h1>
            <div class="flex justify-center items-center gap-10 mt-20">
                <a class="transition-all ease-in-out duration-500 border border-white text-white bg-transparent px-6 py-4 rounded-lg hover:bg-white hover:text-black""
                    href="{{ route('login', ['hotel' => true]) }}">Mirar Alojamientos</a>
                {{-- <a class="transition-all ease-in-out duration-500 border border-white text-white bg-transparent px-6 py-4 rounded-lg hover:bg-white hover:text-black""
                    href="{{ route('login') }}">Iniciar Sesión</a> --}}
            </div>

        </div>


    </section>

    <hr class="w-48 h-1 mx-auto my-4 bg-yellow-200 border-0 rounded md:my-10 dark:bg-gray-700">

    <section class="w-full mt-[2rem] mb-[2rem]">


        <div class="w-full flex justify-center flex-col items-center p-5">
            <h1 class="text-6xl"> <span class="font-thin">Los</span><span class="font-bold text-blue-600">Hoteles</span>
            </h1>
            <p class="mt-[2rem] lg:text-3xl"><span class="font-thin">Tendrás las mejores <span
                        class="font-bold">experiencias</span>, en los
                    mejores</span>
                <span class="font-bold">alojamientos,</span> <br> <span class="font-thin">para tus mejores</span>
                <span class="font-bold">vacaciones.</span>
            </p>
        </div>

        <div class=" flex justify-center gap-6 mt-[5rem] px-5">

            <div
                class="w-[30rem] bg-gray-800 mx-auto rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-105">
                <a href="#" class="block w-full">
                    <div class="relative">
                        <img class="w-full h-full shadow-md opacity-75 transition-all easy-in-out duration-300 hover:opacity-100 "
                            src="https://via.placeholder.com/600x400" alt="placeholder image">
                        <div class="absolute bottom-0 left-0 p-4">
                            <h3 class="text-white font-bold text-2xl ">Título de la tarjeta</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="w-[30rem] bg-gray-800 mx-auto rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-105">
                <a href="#" class="block w-full">
                    <div class="relative">
                        <img class="w-full h-full shadow-md opacity-75 transition-all easy-in-out duration-300 hover:opacity-100 "
                            src="https://via.placeholder.com/600x400" alt="placeholder image">
                        <div class="absolute bottom-0 left-0 p-4">
                            <h3 class="text-white font-bold text-2xl ">Título de la tarjeta</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="w-[30rem] bg-gray-800 mx-auto rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-105">
                <a href="#" class="block w-full">
                    <div class="relative">
                        <img class="w-full h-full shadow-md opacity-75 transition-all easy-in-out duration-300 hover:opacity-100 "
                            src="https://via.placeholder.com/600x400" alt="placeholder image">
                        <div class="absolute bottom-0 left-0 p-4">
                            <h3 class="text-white font-bold text-2xl ">Título de la tarjeta</h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>


    </section>

    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

    <section class="w-full mb-[10rem]">

        <div class="w-full flex justify-center flex-col items-center p-5 mb-[5rem]">
            <h1 class="text-6xl"> <span class="font-thin">Opiniones</span><span class="font-bold text-orange-400">Clientes
                </span>
            </h1>
            <p class="mt-[2rem] lg:text-3xl"><span class="font-thin">Tendrás las mejores <span
                        class="font-bold">experiencias</span>, en los
                    mejores</span>
                <span class="font-bold">alojamientos,</span> <br> <span class="font-thin">para tus mejores</span>
                <span class="font-bold">vacaciones.</span>
            </p>
        </div>

        <div id="client1"
            class="w-auto bg-gradient-to-r from-blue-100 to-white gap-10 opacity-0 transition-all easy-in-out duration-1000 bg-dark flex justify-left items-center mb-[2rem]">
            <img class="object-cover rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                src="{{ asset('img/landing/avatar.png') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Nombre de cliente.</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Opinion de cliente.</p>
            </div>
        </div>

        <div id="client2"
            class="w-auto bg-gradient-to-r from-blue-100 to-white gap-10 opacity-0 transition-all easy-in-out duration-1000 bg-dark flex justify-left items-center mb-[2rem]">
            <img class="object-cover rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                src="{{ asset('img/landing/avatar.png') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Nombre de cliente.</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Opinion de cliente.</p>
            </div>
        </div>

        <div id="client3"
            class="w-auto bg-gradient-to-r from-blue-100 to-white gap-10 opacity-0 transition-all easy-in-out duration-1000 bg-dark flex justify-left items-center mb-[2rem]">
            <img class="object-cover rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                src="{{ asset('img/landing/avatar.png') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Nombre de cliente</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Opinion de cliente.</p>
            </div>
        </div>

    </section>

@endsection

<script src="{{ asset('js/landing.js') }}" type="module"></script>
