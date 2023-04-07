@extends('../plantilla/plantilla')

@section('title', 'CPanel Howeb')

@section('main')

    @if (auth()->user()->admin)
        <div class="mt-[5.5rem] bg-slate-800 grid grid-cols-2">

            <div class="card p-6 rounded-lg shadow-md bg-white m-[2rem]">
                <h2 class="text-xl font-bold mb-4">Usuarios</h2>
                <p class="mb-4">Actualmente hay <span class="font-bold">{{ $countUsers }} usuarios registrados</span>.</p>
                <a href="{{ route('users') }}" class="text-[#C79A25] px-4 py-2 rounded-md">Ver usuarios</a>
            </div>

            <div class="card p-6 rounded-lg shadow-md bg-white m-[2rem]">
                <h2 class="text-xl font-bold mb-4">Reservas</h2>
                <p class="mb-4">Cantidad de reservas: <span class="font-bold">? reservas</span>.</p>
            </div>

        </div>
        <div class="bg-slate-800 grid grid-cols-1 pb-[10rem]">
            <div class="card p-6 rounded-lg shadow-md bg-white m-[2rem]">
                <h2 class="text-xl font-bold mb-4 text-center">Buscador de Usuarios</h2>
                <form action="{{ route('search') }}" method="get">

                    <div class="flex items-center justify-center mt-6">
                        <div class="relative w-full max-w-md">
                            <div class="absolute inset-y-0 left-0 pl-[0.5rem] flex items-center pointer-events-none">
                                <img class="h-5 w-7" src="{{ asset('/img/landing/icons/logoSinFondo.png') }}"
                                    alt="svg-buscador">
                            </div>
                            <input
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-orange-300 focus:shadow-outline-blue sm:text-sm transition duration-150 ease-in-out"
                                placeholder="Buscar" name="username" type="search">
                        </div>
                    </div>

                </form>
                <div>
                    @if (session('users') && !session('users')->isEmpty())

                        <ul class="divide-y divide-gray-200">
                            @foreach (session('users') as $user)
                                <li
                                    class="flex items-center p-4 m-4 hover:bg-slate-200 rounded transition-all ease-in-out duration-200">
                                    <a href="{{ route('user', ['id' => $user->id]) }}">
                                        <div class="flex justify-center items-center gap-5">
                                            <img class="w-8 h-8 rounded-full" src="{{ asset('img/landing/avatar.png') }}"
                                                alt="User image">
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">{{ $user->name }}</p>
                                                <p class="text-sm text-gray-500">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </a>

                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="bg-white  rounded-lg p-4">
                            <p class="text-gray-500 text-lg mb-4">No se ha encontrado ningún resultado en la búsqueda
                                realizada.</p>
                        </div>

                    @endif
                </div>
            </div>

        </div>
    @else
        @include('page/notAllowed')
    @endif



@endsection
