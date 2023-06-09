@extends('../plantilla/plantilla')

@section('title', 'Reserva ' . $accomodation->name)

@section('main')

    <div class="bg-[#E5E7EB] p-5">
        <section class="container mx-auto mt-[7rem] p-[2rem]">
            <form id="formCard" novalidate action="{{ route('complete', ['id' => $accomodation->id]) }}" method="get">
                @csrf
                <div class="flex items-center justify-center">
                    <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
                    <span class="border border-green-500 w-16"></span>
                    <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
                    <span class="border border-green-500 w-16"></span>
                    <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
                </div>

                <div class="grid grid-rows-2">

                    <div class="grid grid-cols-1 mb-10">

                        @include('page/reservation/DataClient/DataClient')

                        <div class="bg-gray-100 p-4">
                            <h2 class="text-xl font-bold mb-2">Precio total</h2>
                            <p class="text-gray-700 text-lg">El precio total de tu reserva es:</p>
                            <input name="price" class="w-[3.3rem] text-3xl font-bold text-indigo-500 bg-gray-100"
                                value="{{ $price }}" readonly /> <span
                                class="text-3xl font-bold text-indigo-500">€</span>
                        </div>

                    </div>

                    <div class="grid grid-cols-1">

                        <h1 class="text-4xl font-extrabold text-center text-orange-600 mb-8">Introduzca Datos</h1>

                        <div class="h-100 flex justify-center items-center">

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
                                                #### #### #### ####
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

                        <div class="grid md:grid-cols-8 grid-cols-1 grid-rows-1 mt-[2rem]">
                            <span class="md:col-span-1"></span>
                            <div
                                class="flex flex-col md:col-span-6 col-span-1 shadow-md p-7 rounded-lg bg-gray-100 items-center justify-items-center md:grid md:grid-cols-2">
                                <div class="md:order-1 order-1 md:p-0 p-4">
                                    <p class="font-bold text-xl order-1 md:order-1">Datos Personales</p>
                                </div>
                                <div class="md:order-2 order-3 md:p-0 p-4">
                                    <p class="font-bold text-xl sm:order-3">Datos Bancarios</p>
                                </div>
                                <div class="md:order-3 order-2 md:p-0 p-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="cp">
                                        Nombre
                                    </label>
                                    <input id="inputName" maxlength="16"
                                        class="focus:border-blue-300 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="nameCard" type="text" placeholder="John" required>
                                    <span id="errorNameCard" class="text-red-500 text-sm font-medium"></span>

                                    <label class="block text-gray-700 font-bold mb-2" for="cp">
                                        Apellido
                                    </label>
                                    <input id="inputLastName" maxlength="16"
                                        class="focus:border-blue-300 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="lastNameCard" type="text" placeholder="Doe" required>
                                    <span id="errorLastNameCard" class="text-red-500 text-sm font-medium"></span>
                                </div>
                                <div class="md:order-4 order-4 md:p-0 p-4">
                                    <label class="w-100 block text-gray-700 font-bold " for="inputCardNumber">
                                        Número de Tarjeta
                                    </label>
                                    <input id="inputCardNumber" maxlength="19"
                                        class="focus:border-blue-300  appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="#### #### #### ####" required>
                                    <span id="errorCardNumber" class="text-red-500 text-sm font-medium"></span>
                                    <label class="w-100 block text-gray-700 font-bold " for="inputCVV">
                                        CVV
                                    </label>
                                    <input id="inputCVV" maxlength="3"
                                        class="focus:border-blue-300 text-center appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder=". . ." required>
                                    <span id="errorCvv" class="text-red-500 text-sm font-medium"></span>
                                    <label class="block text-gray-700 font-bold" for="expiration">Caducidad</label>
                                    <label for="entryDate">
                                        <input id="inputExpirationDate" type="month"
                                            class="bg-gray-100 text-gray-800 border border-gray-400 rounded-lg py-2 px-4"
                                            required>
                                        <span id="errorDate" class="text-red-500 text-sm font-medium"></span>
                                    </label>
                                </div>

                                <div class="md:col-span-2 flex justify-center items-center gap-5 order-last">
                                    <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded
                                focus:outline-none focus:shadow-outline"
                                        href="{{ route('reservation', ['id' => $accomodation->id]) }}">Volver</a>
                                    <button
                                        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded
                                focus:outline-none focus:shadow-outline"
                                        type="submit">Completar proceso</button>
                                </div>
                            </div>
                            <span class="md:col-span-1"></span>
                        </div>

                        {{-- <div class="mt-[2rem] shadow-md border p-7 rounded-lg bg-gray-100 ">

                            <div class="flex justify-center items-center gap-4 mb-[2rem]">

                                <label class="block text-gray-700 font-bold mb-2" for="cp">
                                    Nombre
                                </label>
                                <input id="inputName" maxlength="16"
                                    class="focus:border-blue-300 appearance-none border rounded w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="nameCard" type="text" placeholder="John" required>
                                <span id="errorNameCard" class="text-red-500 text-sm font-medium"></span>

                                <label class="block text-gray-700 font-bold mb-2" for="cp">
                                    Apellido
                                </label>
                                <input id="inputLastName" maxlength="16"
                                    class="focus:border-blue-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="lastNameCard" type="text" placeholder="Doe" required>
                                <span id="errorLastNameCard" class="text-red-500 text-sm font-medium"></span>

                            </div>

                            <div class="flex justify-center items-center gap-5">

                                <label class="w-100 block text-gray-700 font-bold " for="inputCardNumber">
                                    Número de Tarjeta
                                </label>
                                <input id="inputCardNumber" maxlength="19"
                                    class="focus:border-blue-300  appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="#### #### #### ####" required>
                                <span id="errorCardNumber" class="text-red-500 text-sm font-medium"></span>
                                <label class="w-100 block text-gray-700 font-bold " for="inputCVV">
                                    CVV
                                </label>
                                <input id="inputCVV" maxlength="3"
                                    class="focus:border-blue-300 text-center appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder=". . ." required>
                                <span id="errorCvv" class="text-red-500 text-sm font-medium"></span>

                            </div>



                            <label class="block text-gray-700 font-bold mb-2 mt-[2rem]" for="expiration">Caducidad</label>
                            <label for="entryDate">
                                <input id="inputExpirationDate" type="month"
                                    class="bg-gray-100 text-gray-800 border border-gray-400 rounded-lg py-2 px-4" required>
                                <span id="errorDate" class="text-red-500 text-sm font-medium"></span>
                            </label>
                            <div class="flex justify-center items-center gap-5">
                                <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded
                                focus:outline-none focus:shadow-outline"
                                    href="{{ route('reservation', ['id' => $accomodation->id]) }}">Volver</a>
                                <button
                                    class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded
                                focus:outline-none focus:shadow-outline"
                                    type="submit">Completar proceso</button>
                            </div>
                        </div> --}}

            </form>

    </div>
    </div>
    </section>
    </div>

@endsection

<script src="{{ asset('js/reservation.js') }}"></script>
<script src="{{ asset('js/validationForm/validationStep3.js') }}"></script>
