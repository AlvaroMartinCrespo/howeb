@extends('../plantilla/plantilla')

@section('title', 'Reserva ' . $accomodation->name)

@section('main')

    <div class="bg-[#E5E7EB] p-5">
        <section class="container mx-auto mt-[7rem] p-[2rem]">

            <div class="flex items-center justify-center">
                <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
                <span class="border border-green-500 w-16"></span>
                <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
                <span class="border border-gray-300 w-16"></span>
                <span class="w-5 h-5 rounded-full bg-gray-300 flex justify-center"></span>
            </div>

            <form method="get" action="{{ route('reservationStep3', ['id' => $accomodation->id]) }}">
                @csrf

                @include('page/reservation/DataClient/DataClient')

                <div class="grid grid-row bg-white rounded-lg shadow-lg">

                    <div class="grid grid-cols-1">

                        <div class="max-w-4xl mx-auto py-12 sm:px-6 lg:px-8">
                            <h1 class="text-4xl font-extrabold text-center text-orange-600 mb-8">Seleccione Fechas</h1>
                            <div class="mb-10 flex gap-5 justify-center">
                                <div class="flex flex-col items-center">

                                    <label class="font-bold" for="entryDate">Fecha de Entrada:</label>
                                    <input name="entryDate" type="date"
                                        class="bg-gray-100 text-gray-800 border border-gray-400 rounded-lg py-2 px-4">
                                </div>

                                <div class="flex flex-col items-center">
                                    <label class="font-bold" for="departureDate">Fecha de Salida:</label>
                                    <input name="departureDate" type="date"
                                        class="bg-gray-100 text-gray-800 border border-gray-400 rounded-lg py-2 px-4">
                                </div>

                            </div>

                            @if ($error)
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded m-4">
                                    <strong class="font-bold">Error:</strong>
                                    <span class="block sm:inline">The dates entered are not valid. Please enter valid
                                        dates.</span>
                                </div>
                            @endif

                            @if ($busy)
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded m-4">
                                    <span class="block sm:inline">The room is not available for those dates.</span>
                                </div>
                            @endif

                            <div class="flex justify-center items-center gap-5">
                                <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded
                                focus:outline-none focus:shadow-outline"
                                    href="{{ route('reservation', ['id' => $accomodation->id]) }}">Volver</a>
                                <button
                                    class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded
                                focus:outline-none focus:shadow-outline"
                                    type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>



@endsection

<script src="{{ asset('js/reservation.js') }}"></script>
