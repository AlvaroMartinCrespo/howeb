@extends('../plantilla/plantilla')

@section('title', 'Reserva ' . $accomodation->name)

@section('main')


    <div class="bg-[#E5E7EB] p-5">
        <section class="container mx-auto mt-[7rem]">

            <div class="flex items-center justify-center">
                <span class="w-5 h-5 rounded-full bg-green-500 flex justify-center"></span>
                <span class="border border-gray-300 w-16"></span>
                <span class="w-5 h-5 rounded-full bg-gray-300 flex justify-center"></span>
                <span class="border border-gray-300 w-16"></span>
                <span class="w-5 h-5 rounded-full bg-gray-300 flex justify-center"></span>
            </div>

            <div class="grid grid-rows-1">

                <div class="grid grid-cols-1 h-screen">

                    <div class="max-w-4xl mx-auto py-12 sm:px-6 lg:px-8">
                        <h1 class="text-4xl font-extrabold text-center text-orange-600 mb-8">Formulario de Datos Personales
                        </h1>
                        <form id="formUser" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" novalidate
                            action="{{ route('reservationStep2', ['id' => $accomodation->id]) }}" method="get">
                            @csrf
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2" for="nombre">
                                        Nombre
                                    </label>
                                    <input
                                        class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="nombre" type="text" placeholder="Ingrese su nombre" name="name"
                                        required>
                                    <span id="errorName" class="text-red-500 text-sm font-medium"></span>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2" for="apellidos">
                                        Apellidos
                                    </label>
                                    <input
                                        class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="apellidos" type="text" placeholder="Ingrese sus apellidos" name="lastName"
                                        required>
                                    <span id="errorLastName" class="text-red-500 text-sm font-medium"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2" for="email">
                                        Email
                                    </label>
                                    <input
                                        class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="email" type="email" placeholder="Ingrese su email" name="email"
                                        required>
                                    <span id="errorEmail" class="text-red-500 text-sm font-medium"></span>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2" for="telefono">
                                        Teléfono
                                    </label>
                                    <input
                                        class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="telefono" type="tel" placeholder="Ingrese su número de teléfono"
                                        name="phone" required>
                                    <span id="errorTel" class="text-red-500 text-sm font-medium"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2" for="dni">
                                        DNI
                                    </label>
                                    <input
                                        class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="dni" type="text" placeholder="Ingrese su DNI" name="dni" required>
                                    <span id="errorDni" class="text-red-500 text-sm font-medium"></span>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2" for="direccion">
                                        Dirección
                                    </label>
                                    <input
                                        class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="direccion" type="text" placeholder="Ingrese su dirección" name="address"
                                        required>


                                </div>
                                <div class="grid grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <label class="block text-gray-700 font-bold mb-2" for="cp">
                                            Código Postal
                                        </label>
                                        <input
                                            class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="cp" type="text" placeholder="Ingrese su código postal"
                                            name="cp" required>
                                        <span id="errorCp" class="text-red-500 text-sm font-medium"></span>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-bold mb-2" for="pais">
                                            País
                                        </label>
                                        <input
                                            class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="pais" type="text" placeholder="Ingrese su país" name="country"
                                            required>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-bold mb-2" for="alojamiento">
                                            Alojamiento
                                        </label>
                                        <input
                                            class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 bg-slate-300 leading-tight focus:outline-none focus:shadow-outline"
                                            id="pais" type="text" value="{{ $accomodation->name }}" readonly>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-bold mb-2" for="pais">
                                            Id
                                        </label>
                                        <input
                                            class="focus:border-orange-300 appearance-none border rounded w-full py-2 px-3 text-gray-700 bg-slate-300 leading-tight focus:outline-none focus:shadow-outline"
                                            id="pais" type="text" value="{{ $accomodation->id }}" readonly>
                                    </div>
                                </div>
                                <div class="mt-8 text-center">
                                    <div class="flex justify-center items-center gap-5">
                                        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded
                                focus:outline-none focus:shadow-outline"
                                            href="{{ route('accomodations') }}">Cancelar</a>
                                        <button
                                            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded
                                focus:outline-none focus:shadow-outline"
                                            type="submit">Enviar</button>
                                    </div>
                                </div>
                        </form>
                    </div>

                </div>

            </div>

        </section>
    </div>


@endsection

<script src="{{ asset('js/reservation.js') }}"></script>
<script src="{{ asset('js/validationForm/validationStep1.js') }}"></script>
