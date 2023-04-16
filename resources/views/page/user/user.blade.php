@extends('../plantilla/plantilla')

@section('title', 'Login Howeb')

@section('main')

    <div class="bg-gray-900 pb-[2rem] pt-[4rem]">
        <div class="m-[5.7rem] rounded bg-gray-800">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-medium text-gray-100">Detalle de usuario</h2>
                    <a href="{{ route('delete', ['id' => $user->id]) }}"
                        class="text-sm text-red-500 hover:text-red-700">Eliminar</a>
                </div>
            </div>
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="bg-gray-700 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-100">
                            Información de usuario
                        </h3>
                    </div>
                    <div class="border-t border-gray-600">
                        <dl>
                            <div class="bg-gray-600 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-400">
                                    Foto Perfil
                                </dt>
                                <dd class="mt-1 text-sm text-gray-100 sm:mt-0 sm:col-span-2">
                                    <img class="rounded w-[4rem] h-[4rem]" src="{{ asset('img/landing/avatar.png') }}"
                                        alt="user-img">
                                </dd>
                            </div>
                            <div class="bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-400">
                                    Nombre completo
                                </dt>
                                <dd class="mt-1 text-sm text-gray-100 sm:mt-0 sm:col-span-2">
                                    {{ $user->name }}
                                </dd>
                            </div>
                            <div class="bg-gray-600 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-400">
                                    Correo electrónico
                                </dt>
                                <dd class="mt-1 text-sm text-gray-100 sm:mt-0 sm:col-span-2">
                                    {{ $user->email }}
                                </dd>
                            </div>
                            <div class="bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-400">
                                    Rol
                                </dt>
                                <dd class="mt-1 text-sm text-gray-100 sm:mt-0 sm:col-span-2">
                                    @if ($user->admin)
                                        Administrador
                                    @else
                                        Usuario
                                    @endif
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center my-[2rem] pb-[2rem]">

                <a href="{{ url()->previous() }}"
                    class=" flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
                    Volver
                </a>

            </div>

        </div>
    </div>




@endsection
