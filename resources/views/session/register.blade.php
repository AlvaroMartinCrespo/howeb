@extends('../plantilla/plantilla')

@section('title', 'Register Howeb')

@section('main')


    <div class="min-h-screen bg-blue-100 flex flex-col justify-center sm:py-12">
        <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
            {{-- <h1 class="font-bold text-center text-3xl mb-5">Iniciar sesión</h1> --}}
            <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                <img src="{{ asset('img/landing/icons/logoSinFondo.png') }}" alt="logoSinFondo">
                <div class="px-5 py-7">
                    <form>
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Nombre completo</label>
                        <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            placeholder="Nombre completo" />

                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Correo electrónico</label>
                        <input type="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            placeholder="Correo electrónico" />

                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Contraseña</label>
                        <input type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            placeholder="Contraseña" />

                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Confirmar contraseña</label>
                        <input type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            placeholder="Confirmar contraseña" />

                        <button type="submit"
                            class="transition duration-500 ease-in-out bg-[#243859] transform hover:scale-105 rounded-lg p-3 text-sm text-white w-full">Registrarse</button>

                        <div class="flex flex-col justify-center items-center w-full">
                            <span>or</span>
                            <span><a class="text-[#C79A25]" href="{{ route('login') }}">Login</a></span>
                        </div>

                        <span><a class="text-[#C79A25]" href="{{ route('landing') }}">Volver</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
