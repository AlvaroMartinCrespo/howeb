<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register Howeb</title>
</head>

<body>
    <div class="h-screen bg-blue-100 flex flex-col justify-center sm:py-12">
        <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
            <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                <img src="{{ asset('img/landing/icons/logoSinFondo.png') }}" alt="logoSinFondo">
                <div class="px-5 py-7">
                    <form action="{{ route('register-validate') }}" method="post">
                        @csrf
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Nombre completo</label>
                        <input name="name" type="text"
                            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            placeholder="Nombre completo" />

                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Correo electrónico</label>
                        <input name="email" type="email"
                            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            placeholder="Correo electrónico" />
                        {{-- If the passwords already exists, an error will be thrown. --}}
                        @if (isset($errorEmail))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative mb-6">
                                <span class="block sm:inline">{{ $errorEmail }}</span>
                            </div>
                        @endif

                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Contraseña</label>
                        <input name="password" type="password"
                            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" placeholder="Contraseña" />

                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Confirmar contraseña</label>
                        <input name="repeatPassword" type="password"
                            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            placeholder="Confirmar contraseña" />
                        {{-- If the passwords do not match, an error will be thrown. --}}
                        @if (isset($errorPassword))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative mb-6">
                                <span class="block sm:inline">{{ $errorPassword }}</span>
                            </div>
                        @endif

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
</body>

</html>
