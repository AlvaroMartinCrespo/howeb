@extends('../plantilla/plantilla')

@section('title', 'Reserva ' . $accomodation->name)

@section('main')

    <section class="container mx-auto mt-[7rem]">

        <div class="flex items-center justify-center">
            <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
            <span class="border border-green-500 w-16"></span>
            <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
            <span class="border border-green-300 w-16"></span>
            <span class="w-5 h-5 rounded-full bg-gray-300 flex justify-center"></span>
        </div>

        <div class="mt-[1rem] mb-[1rem] flex justify-center">

            <div class="bg-white rounded-lg shadow-md flex p-4 w-100">
                <img class="w-16 h-16 rounded-full mr-4" src="{{ $accomodation->image }}">
                <div>
                    <h2 class="text-lg font-medium text-gray-800">{{ $accomodation->name }}</h2>
                    <p class="text-gray-600">{{ $accomodation->description }}</p>
                </div>
            </div>

        </div>

        <div class="grid grid-rows-2">

            <div class="grid grid-cols-1">

                <div class="max-w-4xl mx-auto py-12 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-extrabold text-center text-orange-600 mb-8">Seleccione Fechas</h1>

                    <form action="{{ route('reservationStep3', ['id' => $accomodation->id]) }}">
                        @csrf

                        <label for="entryDate">
                            <input type="date"
                                class="bg-gray-100 text-gray-800 border border-gray-400 rounded-lg py-2 px-4">
                        </label>

                        <label for="departureDate">
                            <input type="date"
                                class="bg-gray-100 text-gray-800 border border-gray-400 rounded-lg py-2 px-4">
                        </label>

                        <button
                            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Enviar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>



@endsection

<script src="{{ asset('js/reservation.js') }}"></script>
