@extends('../plantilla/plantilla')

@section('title', $accomodation->name)

@section('main')

    {{-- option 2 --}}
    <div class="bg-[#E5E7EB]">
        <div class="container mx-auto bg-[#E5E7EB]">

            <div class="grid md:grid-cols-6 grid-cols-1 grid-rows-1 pt-[7rem]">

                <div class="md:col-span-1"></div>

                <div class="md:col-span-4 col-span-1 px-10 pb-3 rounded-lg shadow-lg bg-white">
                    <div class="flex justify-between items-center">
                        <a class="m-3 rounded-lg hover:bg-slate-300 transition-all ease-in-out duration-200"
                            href="{{ url()->previous() }}">
                            <svg class="p-2 w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                                <path style="fill:#c99924"
                                    d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z"
                                    data-name="Left" />
                            </svg>
                        </a>
                        <h1 class="text-4xl font-bold text-center">{{ $accomodation->name }}</h1>
                        <span class="w-16"></span>
                    </div>

                    <img class="rounded-lg w-full" src="{{ $accomodation->image }}" alt="{{ $accomodation->name }}">
                    <p class="text-lg p-5 text-center">{{ $accomodation->description }}</p>
                    <div class="grid grid-cols-2 grid-rows-1 justify-items-center">
                        <div class="flex items-center mt-4">
                            <p class="text-xl font-medium mr-2">Calificación del alojamiento:</p>
                            <div class="hotel-rating">
                                @for ($i = 0; $i < $accomodation->stars; $i++)
                                    <span class="star text-yellow-400 text-2xl">&#9733;</span>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-2xl font-bold mb-2">Comodidades</h2>
                            <ul class="list-disc list-inside">
                                <li>Wi-Fi gratuito</li>
                                <li>Gimnasio</li>
                                <li>Recepción 24 horas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center items-center p-7">
                        <a href="{{ route('reservation', ['id' => $accomodation->id]) }}"
                            class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold h-full rounded">
                            Continuar a Reserva
                        </a>
                    </div>
                </div>

                <div class="md:col-span-1"></div>

            </div>

        </div>
    </div>

    {{-- option 2 --}}
    {{-- <div class="bg-[#E5E7EB] h-screen ">
        <section class="container mx-auto p-[7rem]">
            <div class="grid grid-cols-2 gap-8">
                <div class="rounded-lg overflow-hidden">
                    <img class="w-full " src="{{ $accomodation->image }}" alt="{{ $accomodation->name }}">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <h1 class="text-4xl font-bold">{{ $accomodation->name }}</h1>
                    <p class="text-lg">{{ $accomodation->description }}</p>
                    <div class="flex items-center mt-4">
                        <p class="text-xl font-medium mr-2">Calificación del alojamiento:</p>
                        <div class="hotel-rating">
                            @for ($i = 0; $i < $accomodation->stars; $i++)
                                <span class="star text-yellow-400 text-2xl">&#9733;</span>
                            @endfor
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-2xl font-bold mb-2">Comodidades</h2>
                        <ul class="list-disc list-inside">
                            <li>Wi-Fi gratuito</li>
                            <li>Gimnasio</li>
                            <li>Recepción 24 horas</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 mt-10 mb-10">
                <div class="flex justify-center items-center">
                    <a href="{{ url()->previous() }}"
                        class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
                        Volver
                    </a>
                </div>
                <div class="flex justify-center items-center">
                    <a href="{{ route('reservation', ['id' => $accomodation->id]) }}"
                        class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold h-full rounded">
                        Continuar a Reserva
                    </a>
                </div>
            </div>
            <div>
                <span class="text-xs text-justify">
                    Al hacer clic en el botón 'Continuar a Reserva', aceptas los <a href="{{ route('terms') }}"
                        class=" text-cyan-600">términos y
                        condiciones</a> establecidos por esta plataforma. Estos términos y condiciones, junto con
                    nuestra
                    política de privacidad, rigen el uso de nuestro sitio web o aplicación y cualquier contenido,
                    función,
                    producto o servicio ofrecido en este.
                </span>
            </div>
        </section>
    </div> --}}



@endsection
