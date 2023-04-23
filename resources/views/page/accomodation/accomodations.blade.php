@extends('../plantilla/plantilla')

@section('title', 'Lista de Alojamientos')

@section('main')

    {{-- Method using containers and columns to make the page responsive. --}}
    <section id="title" class="container mx-auto my-28">
        <div class="grid grid-cols-1">
            <div class="flex justify-center">
                <h1
                    class="text-6xl font-bold bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-transparent h-20">
                    Alojamientos
                </h1>
            </div>
            <hr class="w-48 h-1 mx-auto my-4 rounded bg-yellow-200 border-0 md:my-10 dark:bg-gray-700">
            <div class="grid grid-cols-2 mt-20">
                <img class="p-10" src="https://via.placeholder.com/600x400" alt="placeholder">
                <div>
                    <p class="text-2xl font-bold p-10">
                        Ofrecemos opciones como cabañas acogedoras en la montaña, villas de lujo frente al mar y
                        apartamentos en la ciudad.
                        Estamos seguros de que encontrará la opción perfecta para sus vacaciones.
                    </p>

                    <ul class="list-disc list-inside p-10">
                        <li class="text-xl">Alojamientos equipados con todas las comodidades necesarias.</li>
                        <li class="text-xl">Permanencia confortable y placentera.</li>
                    </ul>

                    <p class="text-xl p-10">
                        Esperamos hacerte sentir como en casa <span class="font-bold">¡No te lo pierdas!</span>
                    </p>

                </div>

            </div>
        </div>
    </section>

    <section class="container mx-auto my-[2rem]">

        <h2 class="text-3xl font-bold mb-10 text-center">Sección de Alojamientos</h2>

        <hr class="w-48 h-1 mx-auto my-4 bg-yellow-200 border-0 rounded md:my-10 dark:bg-gray-700">

        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-7">

            {{-- ForEach --}}
            @foreach ($accomodations as $accomodation)
                <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div>
                        <img class="w-96 h-80" src="{{ $accomodation->image }}" alt="{{ $accomodation->name }}">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $accomodation->name }}</div>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-700 text-base flex justify-center flex-col items-center">
                                    <svg width="20" height="20">
                                        <polygon points="10,0 14,6 20,7 15,12 16,20 10,16 4,20 5,12 0,7 6,6"
                                            fill="#FFD700" />
                                    </svg>
                                    <span class=" text-yellow-800 font-bold">{{ $accomodation->stars }}</span>
                                </p>
                                <a href="{{ route('accomodation', ['id' => $accomodation->id]) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Informacion
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </section>

@endsection
