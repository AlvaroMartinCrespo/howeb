@extends('../plantilla/plantilla')

@section('title', 'Lista de Reservas')

@section('main')

    @if (auth()->user()->admin)
        <div class="bg-gray-100 mt-[5.5rem] h-screen">
            <div class="container mx-auto px-10 py-6">
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-bold">Factura de Reserva de Alojamiento</h1>
                    <img src="{{ asset('img/landing/icons/logoSinFondo.png') }}" alt="Logo"
                        class="w-24 h-24 object-contain" />
                </div>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div>
                        <h2 class="text-lg font-bold mb-2">Datos del Cliente</h2>
                        <div class="flex items-center gap-5">
                            <div>
                                <img class="w-[5rem] rounded-2xl" src="{{ asset('img/landing/avatar.png') }}"
                                    alt="user-{{ $user->id }}">
                            </div>
                            <div>
                                <p class="mb-1"><span class="font-bold">Nombre:</span> {{ strtoupper($user->name) }}</p>
                                <p class="mb-1"><span class="font-bold">Email:</span> {{ strtoupper($user->email) }}</p>
                            </div>
                        </div>

                    </div>
                    <div>
                        <h2 class="text-lg font-bold mb-2">Detalles de la Reserva</h2>
                        <p class="mb-1"><span class="font-bold">Número de Reserva:</span> {{ $reservation->id }}</p>
                        <p class="mb-1"><span class="font-bold">Fecha de Entrada:</span> {{ $reservation->start_date }}
                        </p>
                        <p class="mb-1"><span class="font-bold">Fecha de Salida:</span> {{ $reservation->end_date }}</p>
                    </div>
                </div>
                <table class="w-full mb-8">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="py-2 px-4 text-left">#</th>
                            <th class="py-2 px-4 text-left">Descripción</th>
                            <th class="py-2 px-4 text-right">Entrada - Salida</th>
                            <th class="py-2 px-4 text-right">Precio</th>
                            <th class="py-2 px-4 text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b">1</td>
                            <td class="py-2 px-4 border-b">{{ $accomodation->name }}</td>
                            <td class="py-2 px-4 border-b text-right">{{ $reservation->start_date }} -
                                {{ $reservation->end_date }}</td>
                            <td class="py-2 px-4 border-b text-right">{{ $reservation->price }}</td>
                            <td class="py-2 px-4 border-b text-right">{{ $reservation->price }}€</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-center gap-10">
                    <a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        href="{{ url()->previous() }}">Volver</a>
                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        href="{{ route('removeReservation', ['id' => $reservation->id]) }}">Eliminar</a>
                </div>

            </div>
        </div>
    @else
        {{-- If a client try to enter in this page show this view of error --}}
        @include('page/notAllowed')
    @endif

@endsection
