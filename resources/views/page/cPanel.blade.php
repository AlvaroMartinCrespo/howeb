@extends('../plantilla/plantilla')

@section('title', 'CPanel Howeb')

@section('main')

    @if (auth()->user()->admin)
        <div class="mt-[5.5rem] bg-gray-900 grid grid-cols-3">

            <div class="card p-6 rounded-lg shadow-md bg-gray-800 m-[2rem]">
                <h2 class="text-xl font-bold mb-4 text-white">Usuarios</h2>
                <p class="mb-4 text-white">Actualmente hay <span class="font-bold">{{ $countUsers }} usuarios
                        registrados</span>.</p>
                @if ($countUsers > 0)
                    <a href="{{ route('users') }}"
                        class="text-yellow-500 px-4 py-2 rounded-md bg-gray-700 hover:bg-gray-500 transition-all ease-in-out duration-300">Ver
                        usuarios</a>
                @endif

            </div>

            <div class="card p-6 rounded-lg shadow-md bg-gray-800 m-[2rem]">
                <h2 class="text-xl font-bold mb-4 text-white">Gestión de Alojamientos</h2>
                <p class="mb-4 text-white">Actualmente hay<span class="font-bold"> {{ $countAccomodations }}
                        alojamientos
                        registrados</span></p>
                @if ($countAccomodations > 0)
                    <a href="{{ route('listAccomodation') }}"
                        class="text-yellow-500 px-4 py-2 rounded-md bg-gray-700 hover:bg-gray-500 transition-all ease-in-out duration-300">Ver
                        alojamientos</a>
                @endif

            </div>

            <div class="card p-6 rounded-lg shadow-md bg-gray-800 m-[2rem]">
                <h2 class="text-xl font-bold mb-4 text-white">Reservas</h2>
                <p class="mb-4 text-white">Cantidad de reservas: <span class="font-bold">{{ $countReservations }}
                        reservas</span>.</p>
                @if ($countReservations > 0)
                    <a href="{{ route('listReservation') }}"
                        class="text-yellow-500 px-4 py-2 rounded-md bg-gray-700 hover:bg-gray-500 transition-all ease-in-out duration-300">Ver
                        reservas</a>
                @endif
            </div>

        </div>
        <div class="bg-gray-900 pb-[16rem] grid grid-cols-1">
            <div class="card p-6 rounded-lg shadow-md bg-gray-800 m-[2rem]">
                <h2 class="text-xl font-bold mb-4 text-center text-gray-200">Buscador de Usuarios</h2>
                <form action="{{ route('search') }}" method="get">
                    <div class="flex items-center justify-center mt-6">
                        <div class="relative w-80">
                            <div class="absolute inset-y-0 left-0 pl-2 flex items-center pointer-events-none">
                                <img class="h-5 w-7" src="{{ asset('/img/landing/icons/logoSinFondo.png') }}"
                                    alt="svg-buscador">
                            </div>
                            <input
                                class="block w-full pl-10 pr-3 py-2 border border-gray-700 rounded-md leading-5 bg-gray-800 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-orange-300 focus:shadow-outline-blue sm:text-sm transition duration-150 ease-in-out text-gray-200"
                                placeholder="Buscar" name="username" type="search">
                        </div>
                    </div>
                </form>
                <div>
                    @if (session('users') && !session('users')->isEmpty())
                        <ul class="">
                            @foreach (session('users') as $user)
                                <li
                                    class="flex items-center p-4 m-4 hover:mx-0 hover:bg-gray-700 rounded transition-all ease-in-out duration-200">
                                    <a href="{{ route('user', ['id' => $user->id]) }}">
                                        <div class="flex justify-center items-center gap-5">
                                            <img class="w-8 h-8 rounded-full" src="{{ asset('img/landing/avatar.png') }}"
                                                alt="User image">
                                            <div>
                                                <p class="text-sm font-medium text-gray-200">{{ $user->name }}</p>
                                                <p class="text-sm text-gray-400">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="bg-gray-800 rounded-lg p-4">
                            <p class="text-gray-400 text-lg mb-4">No se ha encontrado ningún resultado en la búsqueda
                                realizada.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @else
        {{-- If a client try to enter in this page show this view of error --}}
        @include('page/notAllowed')
    @endif

@endsection
