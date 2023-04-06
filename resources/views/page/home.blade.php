@extends('../plantilla/plantilla')

@section('title', 'Howeb')

@section('main')

    <div class="bg-[#E5E7EB]">
        <div class="mt-[5.5rem] grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg shadow m-5 flex justify-center items-center flex-col">
                <img class="w-[20rem]" src="{{ asset('img/landing/avatar.png') }}" alt="img-user">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Información Personal</h2>
                <div class="flex justify-start flex-col">
                    <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Correo electrónico:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Usuario Nº:</strong> {{ auth()->user()->id }}</p>
                </div>

            </div>
            <div class="m-5 bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Cambiar Datos</h2>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="new-password">
                            Nueva Contraseña
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="new-password" type="password" placeholder="******************">
                    </div>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">Cambiar Contraseña</button>
                </form>
            </div>
        </div>

        @if (auth()->user()->admin)
        @else
            {{-- foreach --}}
            {{-- sino tiene reservas es un if y aparece que no tiene reservas de hoteles --}}
            <div class=" grid grid-cols-1 md:grid-cols-1 gap-4">
                <div class="bg-white p-4 rounded-lg shadow m-5 ">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Hoteles Reservados</h2>
                    <div class="bg-white rounded-lg shadow-lg">
                        <div class="md:flex">
                            <div class="md:flex-shrink-0">
                                <img src="https://via.placeholder.com/150" alt="Imagen de ejemplo"
                                    class="h-48 w-full object-cover md:w-48">
                            </div>
                            <div class="p-8">
                                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Nombre Hotel
                                </div>
                                <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg mt-[1rem]">
                        <div class="md:flex">
                            <div class="md:flex-shrink-0">
                                <img src="https://via.placeholder.com/150" alt="Imagen de ejemplo"
                                    class="h-48 w-full object-cover md:w-48">
                            </div>
                            <div class="p-8">
                                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Nombre Hotel
                                </div>
                                <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        @endif
    </div>


@endsection
