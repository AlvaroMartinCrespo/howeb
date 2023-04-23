@extends('../plantilla/plantilla')

@section('title', 'Lista de Usuarios')

@section('main')

    @if (session('success'))
        <div id="alertMessage" class="bg-green-500 text-white font-bold p-4 hidden fixed bottom-10 left-10">
            <p>{{ session('success') }}</p>
        </div>
        @php
            session()->forget('success');
        @endphp
    @endif

    <div class="pb-[3rem] flex justify-center bg-gray-900 text-white mt-[4rem] h-screen">
        @if (auth()->user()->admin)
            <div class="container m-[5.5rem]">
                <h1 class="text-2xl font-bold mb-4">Lista de Usuarios</h1>

                <ul class="divide-y divide-gray-700">
                    @foreach ($users as $user)
                        <li class="p-4 hover:bg-gray-800 rounded transition-all ease-in-out duration-200">
                            <a href="{{ route('user', ['id' => $user->id]) }}">
                                <p class="text-gray-100">{{ $user->name }}</p>
                                <p class="text-gray-300">{{ $user->email }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="my-4">
                    {{ $users->links() }}
                </div>
                <div class="flex justify-center items-center my-[2rem]">
                    <a href="{{ route('cpanel') }}"
                        class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-300 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
                        Volver
                    </a>
                </div>
            </div>
        @else
            @include('page/notAllowed')
        @endif
    </div>

@endsection

<script src="{{ asset('js/popUpAlert.js') }}" type="module"></script>
