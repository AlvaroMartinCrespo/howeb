    <nav id="nav-landing"
        class="transition-all ease-in-out duration-400 bg-white p-3 z-10 w-full hover:opacity-100 hover:p-3">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class=" h-full flex items-center justify-center align-items-center">
                    <a href="#" class="h-full text-white font-bold"><img class="h-full"
                            src="{{ asset('/img/landing/icons/logoSinFondo.png') }}" alt="logo-hov"></a>
                    <div class="hidden md:block">
                        <a href="#"
                            class="ml-10 box-content w-25 text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400 ">Inicio</a>
                        <a href="#"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Hoteles</a>
                        <a href="#"
                            class="ml-4 box-border text-black p-2 rounded transition ease-in-out duration-300 hover:border-y-2 hover:border-orange-400">Sobre
                            Nosotros</a>
                    </div>
                </div>
                <div
                    class="relative p-1 rounded-full transition ease-in-out duration-300 hover:bg-orange-200 h-full hidden md:block">
                    <button id="dropdown" class="h-full text-gray-300 hover:text-white"><img
                            class="h-full rounded-full" src="{{ asset('/img/landing/avatar.png') }}"
                            alt="login"></button>
                    <ul id="menu" class="absolute hidden text-gray-700 pt-1 right-[0rem] w-[6rem]">
                        <li><span
                                class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap rounded-t">{{ Auth()->user()->name }}</span>
                        </li>
                        <li>
                            <form
                                class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap rounded-b shadow-lg"
                                action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>

                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <div class="m-5 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Información Personal</h2>
            <p><strong>Nombre:</strong> Juan Pérez</p>
            <p><strong>Correo electrónico:</strong> juan.perez@gmail.com</p>
            <p><strong>Teléfono:</strong> +52 55 1234 5678</p>
            <p><strong>Dirección:</strong> Calle 123, Colonia ABC, Ciudad XYZ</p>
        </div>
        <div class="m-5 bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Cambiar Contraseña</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="new-password">
                        Nueva Contraseña
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="new-password" type="password" placeholder="******************">
                </div>
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Cambiar Contraseña</button>
            </form>
        </div>
    </div>

    <h1>User Page</h1>




    <script src="{{ asset('js/userPage.js') }}"></script>
