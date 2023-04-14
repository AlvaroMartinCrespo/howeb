@extends('../plantilla/plantilla')

@section('title', 'Login Howeb')

@section('main')

    {{-- Method using containers and columns to make the page responsive. --}}
    <section id="title" class="container mx-auto my-[7rem]">

        <div class="grid grid-cols-1">

            <div class="flex justify-center">
                <h1
                    class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 font-bold text-transparent bg-clip-text text-6xl">
                    Alojamientos</h1>
            </div>

        </div>

    </section>

    <section class="container mx-auto my-[2rem]">

        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-7">

            {{-- ForEach de los alojamientos --}}
            <div class="max-w-sm rounded overflow-hidden shadow-lg transition-all ease-in-out duration-300 hover:scale-105">
                <a href="">
                    <img class="w-full" src="https://via.placeholder.com/600x400" alt="Hotel image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Nombre del Hotel</div>
                        <p class="text-gray-700 text-base">
                            Precio: $100/noche
                        </p>
                    </div>
                </a>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg transition-all ease-in-out duration-300 hover:scale-105">
                <a href="">
                    <img class="w-full" src="https://via.placeholder.com/600x400" alt="Hotel image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Nombre del Hotel</div>
                        <p class="text-gray-700 text-base">
                            Precio: $100/noche
                        </p>
                    </div>
                </a>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg transition-all ease-in-out duration-300 hover:scale-105">
                <a href="">
                    <img class="w-full" src="https://via.placeholder.com/600x400" alt="Hotel image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Nombre del Hotel</div>
                        <p class="text-gray-700 text-base">
                            Precio: $100/noche
                        </p>
                    </div>
                </a>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg transition-all ease-in-out duration-300 hover:scale-105">
                <a href="">
                    <img class="w-full" src="https://via.placeholder.com/600x400" alt="Hotel image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Nombre del Hotel</div>
                        <p class="text-gray-700 text-base">
                            Precio: $100/noche
                        </p>
                    </div>
                </a>
            </div>

        </div>

    </section>



@endsection
