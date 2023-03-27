@extends('plantilla/plantilla')

@section('title', 'Howeb Hotels')

@section('main')

    <nav id="nav-landing"
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
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Acerca
                            de</a>
                        <a href="#"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Contacto</a>
                    </div>
                </div>
                <div
                    class="p-1 rounded-full transition ease-in-out duration-300 hover:bg-orange-200 h-full hidden md:block">
                    <a href="#" text-gray-300 hover:text-white"><img class="h-full"
                            src="{{ asset('/img/icons/iconoNoPhoto.png') }}" alt="login"></a>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out"
                        aria-label="Main menu" aria-expanded="false">
                        <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <section id="inicio-landing" class="w-full h-[45rem] bg-[url('{{ asset('/img/landing/playa.jpg') }}')]">

        <div class="h-full flex justify-center items-center flex-col">
            <h1 class="text-white font-bold text-6xl text-black left-50 top-50">Playas. <span
                    class="text-orange-300">Hoteles.</span> <br><span class="text-7xl ">Diversion.</span>
            </h1>
            <div class="flex justify-center items-center gap-10 mt-20">
                <a class="transition-all ease-in-out duration-500 border border-white text-white bg-transparent px-6 py-4 rounded-lg hover:bg-white hover:text-black""
                    href="#">Mirar Alojamientos</a>
                <a class="transition-all ease-in-out duration-500 border border-white text-white bg-transparent px-6 py-4 rounded-lg hover:bg-white hover:text-black""
                    href="#">Iniciar Sesión</a>
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
                class="w-[30rem] mx-auto bg-white rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-110">
                <img class="h-48 w-full object-cover" src="https://via.placeholder.com/640x360" alt="Alojamiento">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Nombre del Alojamiento</h2>
                    <p class="text-gray-600 mb-4">Descripción breve del alojamiento.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700 font-bold text-xl">$100</p>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600 font-semibold text-sm">Ver
                            detalles</a>
                    </div>
                </div>
            </div>
            <div
                class="w-[30rem] mx-auto bg-white rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-110">
                <img class="h-48 w-full object-cover" src="https://via.placeholder.com/640x360" alt="Alojamiento">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Nombre del Alojamiento</h2>
                    <p class="text-gray-600 mb-4">Descripción breve del alojamiento.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700 font-bold text-xl">$100</p>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600 font-semibold text-sm">Ver
                            detalles</a>
                    </div>
                </div>
            </div>
            <div
                class="w-[30rem] mx-auto bg-white rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-110">
                <img class="h-48 w-full object-cover" src="https://via.placeholder.com/640x360" alt="Alojamiento">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Nombre del Alojamiento</h2>
                    <p class="text-gray-600 mb-4">Descripción breve del alojamiento.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700 font-bold text-xl">$100</p>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600 font-semibold text-sm">Ver
                            detalles</a>
                    </div>
                </div>
            </div>

        </div>
        <div class=" flex justify-center gap-6 mt-[5rem] px-5">
            <div
                class="w-[30rem] mx-auto bg-white rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-110">
                <img class="h-48 w-full object-cover" src="https://via.placeholder.com/640x360" alt="Alojamiento">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Nombre del Alojamiento</h2>
                    <p class="text-gray-600 mb-4">Descripción breve del alojamiento.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700 font-bold text-xl">$100</p>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600 font-semibold text-sm">Ver
                            detalles</a>
                    </div>
                </div>
            </div>
            <div
                class="w-[30rem] mx-auto bg-white rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-110">
                <img class="h-48 w-full object-cover" src="https://via.placeholder.com/640x360" alt="Alojamiento">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Nombre del Alojamiento</h2>
                    <p class="text-gray-600 mb-4">Descripción breve del alojamiento.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700 font-bold text-xl">$100</p>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600 font-semibold text-sm">Ver
                            detalles</a>
                    </div>
                </div>
            </div>
            <div
                class="w-[30rem] mx-auto bg-white rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-110">
                <img class="h-48 w-full object-cover" src="https://via.placeholder.com/640x360" alt="Alojamiento">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Nombre del Alojamiento</h2>
                    <p class="text-gray-600 mb-4">Descripción breve del alojamiento.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700 font-bold text-xl">$100</p>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600 font-semibold text-sm">Ver
                            detalles</a>
                    </div>
                </div>
            </div>

        </div>


    </section>

    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

    <section class="w-full mb-[10rem]">

        <div class="w-full flex justify-center flex-col items-center p-5 mb-[5rem]">
            <h1 class="text-6xl"> <span class="font-thin">Opiniones</span><span
                    class="font-bold text-orange-400">Clientes </span>
            </h1>
            <p class="mt-[2rem] lg:text-3xl"><span class="font-thin">Tendrás las mejores <span
                        class="font-bold">experiencias</span>, en los
                    mejores</span>
                <span class="font-bold">alojamientos,</span> <br> <span class="font-thin">para tus mejores</span>
                <span class="font-bold">vacaciones.</span>
            </p>
        </div>

        {{-- <div class="h-64 bg-gray-400">
            <img class="h-full w-full object-cover" src="https://via.placeholder.com/150" alt="Imagen">
        </div> --}}

        <div id="container-personas" class="flex justify-center flex-col gap-4 px-[3rem]">

            <div
                class=" h-full w-full flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                    src="{{ asset('img/landing/avatar.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                        acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </div>

            <div
                class=" h-full flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                    src="{{ asset('img/landing/avatar.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                        acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </div>

            <div
                class=" h-full flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                    src="{{ asset('img/landing/avatar.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                        acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </div>


        </div>


    </section>


@endsection

<script src="{{ asset('js/landing.js') }}" type="module"></script>
