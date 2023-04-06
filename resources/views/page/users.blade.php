@extends('../plantilla/plantilla')

@section('title', 'Login Howeb')

@section('main')

    <div class="pb-[3rem] flex justify-center">
        @if (auth()->user()->admin)
            <div class="container m-[5.5rem]">
                <h1 class="text-2xl font-bold mb-4">Lista de Usuarios</h1>

                <ul class="divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <li class="p-4 hover:bg-slate-200 rounded transition-all ease-in-out duration-200">
                            <a href="{{ route('user', ['id' => $user->id]) }}">
                                <p class="text-gray-900">{{ $user->name }}</p>
                                <p class="text-gray-600">{{ $user->email }}</p>
                            </a>

                        </li>
                    @endforeach
                </ul>

                <div class="my-4">
                    {{ $users->links() }}
                </div>
                <div class="flex justify-center items-center my-[2rem]">
                    <a href="{{ route('cpanel') }}"
                        class=" flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-300 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Volver
                    </a>
                </div>

            </div>
        @else
            @include('page/notAllowed')
        @endif
    </div>



@endsection
