                <div class="mt-[2rem] mb-[2rem] ">

                    <h1 class="text-4xl font-extrabold text-center text-orange-600 mb-8">Datos Cliente</h1>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block">Nombre</label>
                            <input name="name" type="text" value="{{ request()->input('name') }}"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                        </div>
                        <div>
                            <label class="font-bold mb-2 block">Apellidos</label>
                            <input name="lastName" type="text" value="{{ request()->input('lastName') }}"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block">Email</label>
                            <input name="email" type="email" value="{{ request()->input('email') }}"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                        </div>
                        <div>
                            <label class="font-bold mb-2 block">Teléfono</label>
                            <input name="phone" type="tel" value="{{ request()->input('phone') }}"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block">DNI</label>
                            <input name="dni" type="text" value="{{ request()->input('dni') }}"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                        </div>
                        <div>
                            <label class="font-bold mb-2 block">Dirección</label>
                            <input name="address" type="text" value="{{ request()->input('address') }}"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold mb-2 block">Código Postal</label>
                            <input name="cp" type="text" value="{{ request()->input('cp') }}"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                        </div>
                        <div>
                            <label class="font-bold mb-2 block">País</label>
                            <input name="country" type="text" value="{{ request()->input('country') }}"
                                class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                        </div>
                    </div>
                    {{-- For step 3 --}}
                    @if (request()->input('entryDate') && request()->input('departureDate'))
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="font-bold mb-2 block">Fecha de Entrada</label>
                                <input name="entryDate" type="text" value="{{ request()->input('entryDate') }}"
                                    class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                            </div>
                            <div>
                                <label class="font-bold mb-2 block">Fecha de Salida</label>
                                <input name="departureDate" type="text"
                                    value="{{ request()->input('departureDate') }}"
                                    class="bg-gray-100 px-4 py-2 rounded-lg w-full" readonly>
                            </div>
                        </div>
                    @endif
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="font-bold mb-2 block mt-[2rem]">Alojamiento</label>
                            <div class="bg-white rounded-lg shadow-md flex p-4 w-100 items-center">
                                <img class="w-16 h-16 rounded-full mr-4" src="{{ $accomodation->image }}">
                                <div>
                                    <h2 class="text-lg font-medium text-gray-800">{{ $accomodation->name }}</h2>
                                    <p class="text-gray-600">{{ $accomodation->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
