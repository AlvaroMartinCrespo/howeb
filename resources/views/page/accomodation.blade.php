@extends('../plantilla/plantilla')

@section('title', 'Alojamiento')

@section('main')

    <section class="container mx-auto mt-28">
        <div class="grid grid-cols-2 gap-8">
            <div class="rounded overflow-hidden">
                <img src="{{ $accomodation->image }}" alt="{{ $accomodation->name }}" class="w-full">
            </div>
            <div class="grid grid-cols-1 gap-4">
                <h1 class="text-4xl font-bold">{{ $accomodation->name }}</h1>
                <p class="text-lg">{{ $accomodation->description }}</p>
                <div class="flex items-center">
                    <p class="text-xl font-medium mr-2">Calificación del alojamiento:</p>
                    <div class="hotel-rating">
                        @for ($i = 0; $i < $accomodation->stars; $i++)
                            <span class="star text-yellow-400 text-2xl">&#9733;</span>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 mt-[5rem]">

            <div class="flex justify-center items-center">
                <a class=" flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    href="{{ url()->previous() }}">Volver</a>
            </div>

            <div class="flex justify-center items-center">
                <a href="">Continuar a Reserva</a>
            </div>



        </div>
    </section>

@endsection
