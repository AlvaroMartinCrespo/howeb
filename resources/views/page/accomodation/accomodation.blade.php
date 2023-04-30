@extends('../plantilla/plantilla')

@section('title', $accomodation->name)

@section('main')

    {{-- option 1 --}}
    <div class="bg-gray-100 h-full">
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
            <div class="grid grid-cols-2 mt-10">
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
        </section>
    </div>



@endsection
