@extends('../plantilla/plantilla')

@section('title', 'Lista de Reservas')

@section('main')

    <section class="bg-gray-900 text-white mt-[5.5rem]">

        <div class="container mx-auto">

            <div class="grid grid-rows-1">

                <div class="grid grid-cols-1">

                    @if (auth()->user()->admin)
                        <div class="p-[2rem] h-screen">
                            <h1 class="text-2xl font-bold mb-4">Lista de Reservas</h1>
                            <ul class="divide-y divide-gray-600">
                                @foreach ($reservations as $reservation)
                                    <li class="p-4 hover:bg-gray-800 rounded transition-all ease-in-out duration-200">
                                        <a class="flex justify-left items-center gap-11"
                                            href="{{ route('infoReservation', ['id' => $reservation->id]) }}">
                                            <p class="text-gray-100 text-lg w-32"><b>ID Reserva:</b> {{ $reservation->id }}
                                            </p>
                                            <span class="text-gray-100 w-36"><b>ID Usuario:</b>
                                                {{ $reservation->id_user }}</span>
                                            <span class="text-gray-100 w-36"><b>ID Alojamiento:</b>
                                                {{ $reservation->id_accomodation }}</span>
                                            <span class="text-gray-100 w-52"><b>Fecha Entrada:</b>
                                                {{ $reservation->start_date }}</span>
                                            <span class="text-gray-100 w-48"><b>Fecha Salida:</b>
                                                {{ $reservation->end_date }}</span>
                                            <span class="text-gray-100 w-36"><b>Precio:</b>
                                                {{ $reservation->price }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="my-4">
                                {{ $reservations->links() }}
                            </div>
                            <div class="flex justify-center items-center my-2rem">
                                <a href="{{ route('cpanel') }}"
                                    class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-300 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Volver
                                </a>
                            </div>
                        </div>
                    @else
                        @include('page/notAllowed')
                    @endif

                </div>

            </div>

        </div>

    </section>

@endsection
