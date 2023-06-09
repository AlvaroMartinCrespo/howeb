@extends('../plantilla/plantilla')

@section('title', auth()->user()->name)

@section('main')

    {{-- Alerts  --}}
    @if (session('success'))
        <div id="alertMessage" class="bg-green-500 z-50 text-white font-bold p-4 hidden fixed bottom-10 left-10">
            <p>{{ session('success') }}</p>
        </div>
        @php
            session()->forget('success');
        @endphp
    @endif

    @if (session('eliminate'))
        <div id="alertMessage" class="bg-green-500 z-50 text-white font-bold p-4 hidden fixed bottom-10 left-10">
            <p>{{ session('eliminate') }}</p>
        </div>
        @php
            session()->forget('eliminate');
        @endphp
    @endif
    {{-- End Alerts --}}

    <div class="bg-[#E5E7EB]">
        <div class="mt-[5.5rem] grid grid-cols-1 md:grid-cols-2 gap-4 ">
            <div class="bg-white p-4 rounded-lg shadow m-5 flex justify-center items-center flex-col">
                <img class="w-[20rem]" src="{{ asset('img/landing/avatar.png') }}" alt="img-user">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Información Personal</h2>
                <div class="flex justify-start flex-col">
                    <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Correo electrónico:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Usuario Nº:</strong> {{ auth()->user()->id }}</p>
                </div>

            </div>
            <div class="m-5 bg-white p-14 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Cambiar Datos</h2>
                <form action="{{ route('update') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="password" name="password">
                            Contraseña Actual
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="new-password" type="password" name="password" placeholder="******************">
                        @if (session('error'))
                            <span class="text-sm text-red-600">{{ session('error') }}</span>
                            @php
                                session()->forget('error');
                            @endphp
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="new-password">
                            Nueva Contraseña
                        </label>

                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="new-password" type="password" name="newPassword" placeholder="******************">
                        <span class="text-gray-400 text-sm">Si se deja en blanco, no se cambia la contraseña.</span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Nuevo Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" name="email" placeholder="ejemplo@dominio.com">
                        <span class="text-gray-400 text-sm">Si se deja en blanco, no se cambia el Email.</span>
                    </div>

                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">Actualizar Datos</button>

                    @if (session('field'))
                        <span class="text-sm text-red-600">{{ session('field') }}</span>
                        @php
                            session()->forget('field');
                        @endphp
                    @endif
                </form>
            </div>
        </div>
        @if (auth()->user()->reservations !== 0)

            <div class=" grid grid-cols-1 md:grid-cols-1 gap-4">
                <div class="bg-white p-10 rounded-lg shadow m-5">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Alojamientos Reservados</h2>
                    @foreach ($dates as $date)
                        <div class="mb-5">
                            <a href="{{ route('infoReservation', ['id' => $date->id_reservation]) }}"
                                class="bg-white rounded-lg shadow-lg">
                                <div class="md:flex">
                                    <div class="md:flex-shrink-0">
                                        <img src="{{ $date->image }}" alt="Imagen de ejemplo"
                                            class="h-48 w-full object-cover md:w-48">
                                    </div>
                                    <div class="p-8">
                                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                                            {{ $date->name }}
                                        </div>
                                        <p class="mt-2 text-gray-500">{{ $date->description }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class=" grid grid-cols-1 md:grid-cols-1 gap-4">
                <div class="bg-white p-12 rounded-lg shadow m-5 flex justify-center flex-col">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Actualmente no tiene ninguna reserva</h2>
                    <h2>Según sus intereses le recomendamos estos alojamientos:</h2>
                    <div class=" flex justify-center lg:flex-row flex-col gap-6 mt-[5rem] px-5 ">

                        @foreach ($randomAccomodations as $accomodation)
                            <a href="{{ route('accomodation', ['id' => $accomodation->id]) }}"
                                class="accomodation w-[30rem] bg-gray-800 mx-auto rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-105 z-30">
                                <div class="block w-full">
                                    <div class="relative">
                                        <img class="w-full h-80 shadow-md opacity-75 transition-all easy-in-out duration-300 hover:opacity-100 "
                                            src={{ $accomodation->image }} alt={{ $accomodation->name }}>
                                        <div class="absolute bottom-0 left-0 p-4">
                                            <h3 class="text-white font-bold text-3xl ">{{ $accomodation->name }}</h3>
                                            <p data-id={{ $accomodation->id }}
                                                class="accomodationDescription text-xl bg-slate-600 bg-opacity-50 text-white font-bold transition-all ease-in-out duration-200 opacity-0 rounded p-1 h-0">
                                                {{ $accomodation->description }}</p>
                                        </div>
                                    </div>
                                </div>

                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        @endif

    </div>



@endsection

<script src="{{ asset('js/popUpAlert.js') }}" type="module"></script>
