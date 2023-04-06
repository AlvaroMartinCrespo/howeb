@extends('../plantilla/plantilla')

@section('title', 'CPanel Howeb')

@section('main')

    @if (auth()->user()->admin)
        <div class="mt-[5.5rem] bg-slate-800 grid grid-cols-2">

            <div class="card p-6 rounded-lg shadow-md bg-white m-[2rem]">
                <h2 class="text-xl font-bold mb-4">Usuarios</h2>
                <p class="mb-4">Actualmente hay <span class="font-bold">20 usuarios registrados</span>.</p>
                <a href="#" class="text-[#C79A25] px-4 py-2 rounded-md">Ver usuarios</a>
            </div>

            <div class="card p-6 rounded-lg shadow-md bg-white m-[2rem]">
                <h2 class="text-xl font-bold mb-4">Reservas</h2>
                <p class="mb-4">Cantidad de reservas: <span class="font-bold">500 reservas</span>.</p>
                {{-- <a href="#" class="btn px-4 py-2 rounded-md">Ver ventas</a> --}}
            </div>


            {{-- ¿Cantidad de hoteles? --}}
            {{-- <div class="card p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-4">Cantidad de hoteles</h2>
            </div> --}}
        </div>
        <div class="bg-slate-800 grid grid-cols-1">
            <div class="card p-6 rounded-lg shadow-md bg-white m-[2rem]">
                <h2 class="text-xl font-bold mb-4 text-center">Buscador de Usuarios</h2>
                <form action="" method="post">

                    <div class="flex items-center justify-center mt-6">
                        <div class="relative w-full max-w-md">
                            <div class="absolute inset-y-0 left-0 pl-[0.5rem] flex items-center pointer-events-none">
                                <img class="h-5 w-7" src="{{ asset('/img/landing/icons/logoSinFondo.png') }}"
                                    alt="svg-buscador">
                            </div>
                            <input
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-orange-300 focus:shadow-outline-blue sm:text-sm transition duration-150 ease-in-out"
                                placeholder="Buscar" type="search">
                        </div>
                    </div>

                </form>
                <div class="">
                    <ul class="divide-y divide-gray-200">
                        <li class="flex items-center py-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="user-image.jpg" alt="User image">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">John Doe</p>
                                <p class="text-sm text-gray-500">johndoe@example.com</p>
                            </div>
                            <div class="ml-auto">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400">
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span>Delete</span>
                                </button>
                            </div>
                        </li>
                        <!-- ... more list items ... -->
                    </ul>
                </div>
            </div>

        </div>
    @else
        <div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <div class="mt-6">
                        <div class="relative">
                            <div class="text-center">
                                <h3 class="text-lg font-medium text-gray-900">Acceso denegado</h3>
                                <p class="mt-2 text-sm text-gray-500">
                                    Lo siento, no tienes acceso a esta página.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ url()->previous() }}"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif






@endsection
