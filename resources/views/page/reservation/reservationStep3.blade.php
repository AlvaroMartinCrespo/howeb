@extends('../plantilla/plantilla')

@section('title', 'Reserva ' . $accomodation->name)

@section('main')

    <section class="container mx-auto mt-[7rem]">

        <div class="flex items-center justify-center">
            <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
            <span class="border border-green-500 w-16"></span>
            <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
            <span class="border border-green-500 w-16"></span>
            <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
        </div>

        <div class="grid grid-rows-2">

            <div class="grid grid-cols-1">

                <div class="mt-[2rem] mb-[2rem] ">

                    <h1 class="text-4xl font-extrabold text-center text-orange-600 mb-8">Datos Cliente</h1>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block">Nombre</label>
                            <input type="text" value="Juan" class="bg-gray-100 px-4 py-2 rounded-lg w-full" disabled>
                        </div>
                        <div>
                            <label class="font-bold mb-2 block">Apellidos</label>
                            <input type="text" value="Pérez López" class="bg-gray-100 px-4 py-2 rounded-lg w-full"
                                disabled>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block">Email</label>
                            <input type="email" value="juan.perez@example.com"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" disabled>
                        </div>
                        <div>
                            <label class="font-bold mb-2 block">Teléfono</label>
                            <input type="tel" value="123456789" class="bg-gray-100 px-4 py-2 rounded-lg w-full"
                                disabled>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block">DNI</label>
                            <input type="text" value="12345678A" class="bg-gray-100 px-4 py-2 rounded-lg w-full"
                                disabled>
                        </div>
                        <div>
                            <label class="font-bold mb-2 block">Dirección</label>
                            <input type="text" value="Calle Mayor 1" class="bg-gray-100 px-4 py-2 rounded-lg w-full"
                                disabled>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block">Código Postal</label>
                            <input type="text" value="28001" class="bg-gray-100 px-4 py-2 rounded-lg w-full" disabled>
                        </div>
                        <div>
                            <label class="font-bold mb-2 block">País</label>
                            <input type="text" value="España" class="bg-gray-100 px-4 py-2 rounded-lg w-full" disabled>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block mt-[2rem]">Alojamiento</label>
                            <div class="bg-white rounded-lg shadow-md flex p-4 w-100">
                                <img class="w-16 h-16 rounded-full mr-4" src="{{ $accomodation->image }}">
                                <div>
                                    <h2 class="text-lg font-medium text-gray-800">{{ $accomodation->name }}</h2>
                                    <p class="text-gray-600">{{ $accomodation->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1">

                <h1 class="text-4xl font-extrabold text-center text-orange-600 mb-8">Introduzca Datos</h1>

                <div class="bg-white h-100 flex justify-center items-center">

                    <div class="space-y-16">
                        <div
                            class="w-96 h-56 m-auto bg-red-100 rounded-xl relative text-white shadow-2xl transition-transform transform hover:scale-110">

                            <img class="relative object-cover w-full h-full rounded-xl"
                                src="https://i.imgur.com/kGkSg1v.png">

                            <div class="w-full px-8 absolute top-8">
                                <div class="flex justify-between">
                                    <div>
                                        <p class="font-light">
                                            Nombre
                                            </h1>
                                        <p id="cardName" class="font-medium tracking-widest">
                                            JOHN
                                        </p>
                                        <p id="cardLastName" class="font-medium tracking-widest">
                                            DOE
                                        </p>
                                    </div>
                                    <img class="w-14 h-14" src="https://i.imgur.com/bbPHJVe.png" />
                                </div>
                                <div class="pt-1">
                                    <p class="font-light">
                                        Número de Tarjeta
                                        </h1>
                                    <p id="cardNumber" class="font-medium tracking-widest">
                                        ################
                                    </p>
                                </div>
                                <div class="pt-6 pr-6">
                                    <div class="flex justify-between">
                                        <div>
                                            <p class="font-light text-xs">
                                                Cad.
                                                </h1>
                                            <p id="cardExpirationDate" class="font-medium tracking-wider text-sm">
                                                MM/AA
                                            </p>
                                        </div>

                                        <div>
                                            <p class="font-light text-xs">
                                                CVV
                                                </h1>
                                            <p id="cardCVV" class="font-bold text-center text-sm">
                                                ···
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-[2rem] shadow-sm">

                    <div class="flex justify-center items-center gap-4 mb-[2rem]">

                        <label class="block text-gray-700 font-bold mb-2" for="cp">
                            Nombre
                        </label>
                        <input id="inputName" maxlength="16"
                            class="appearance-none border rounded w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="cp" type="text" placeholder="John">

                        <label class="block text-gray-700 font-bold mb-2" for="cp">
                            Apellido
                        </label>
                        <input id="inputLastName" maxlength="16"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="cp" type="text" placeholder="Doe">

                    </div>

                    <div class="flex justify-center items-center gap-5">

                        <label class="w-100 block text-gray-700 font-bold " for="inputCardNumber">
                            Número de Tarjeta
                        </label>
                        <input id="inputCardNumber" maxlength="16"
                            class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="#### #### #### ####">

                        <label class="w-100 block text-gray-700 font-bold " for="inputCVV">
                            CVV
                        </label>
                        <input id="inputCVV" maxlength="3"
                            class="text-center appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder=". . .">

                    </div>



                    <label class="block text-gray-700 font-bold mb-2 mt-[2rem]" for="expiration">Caducidad</label>
                    <label for="entryDate">
                        <input id="inputExpirationDate" type="month"
                            class="bg-gray-100 text-gray-800 border border-gray-400 rounded-lg py-2 px-4">
                    </label>
                </div>

            </div>

        </div>

    </section>



@endsection

<script src="{{ asset('js/reservation.js') }}"></script>
