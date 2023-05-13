@extends('../plantilla/plantilla')

@section('title', 'Lista de Reservas')

@section('main')

    {{-- Option 2 --}}
    <div class="pb-[3rem] bg-gray-900 text-white mt-[4rem] h-screen">
        @if (auth()->user()->admin)
            <div class="container mx-auto md:p-[7rem] pt-[5rem]">

                <div class="grid md:grid-cols-8 grid-cols-1 grid-rows-1 bg-slate-800 rounded-lg p-10">

                    <span class="md:col-span-1"></span>
                    <div class="md:col-span-6 col-span-1">
                        <h1 class="text-center font-bold text-2xl">Lista de Reservas</h1>
                        <ul class="divide-y divide-gray-700 p-5">
                            @foreach ($reservations as $reservation)
                                <li class="p-5 hover:bg-gray-600 rounded transition-all ease-in-out duration-200">
                                    <a class="flex justify-left items-center gap-11"
                                        href="{{ route('infoReservation', ['id' => $reservation->id]) }}">
                                        <p class="text-gray-100 text-lg w-32"><b>ID:</b>
                                            {{ $reservation->id }}
                                        </p>
                                        <span class="text-gray-100 w-36"><b>ID User:</b>
                                            {{ $reservation->id_user }}</span>
                                        <span class="text-gray-100 w-36"><b>ID Aloj.:</b>
                                            {{ $reservation->id_accomodation }}</span>
                                        <span class="text-gray-100 w-52"><b>Fecha Entrada:</b>
                                            {{ $reservation->start_date }}</span>
                                        <span class="text-gray-100 w-48"><b>Fecha Salida:</b>
                                            {{ $reservation->end_date }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <span class="md:col-span-1"></span>

                </div>

            </div>
        @else
            {{-- If a client try to enter in this page show this view of error --}}
            @include('page/notAllowed')
        @endif
    </div>

    {{-- Option 1 --}}
    {{-- <section class="bg-gray-900 text-white mt-[5.5rem]">

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
                                            <p class="text-gray-100 text-lg w-32"><b>ID Reserva:</b>
                                                {{ $reservation->id }}
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
                                    class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-300 hover:bg-orange-400">
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

    </section> --}}

@endsection
