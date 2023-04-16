@extends('plantilla/plantilla')

@section('title', 'Howeb Hotels')

@section('main')


    <section id="inicio-landing" class="w-full h-[45rem] bg-[url('{{ asset('/img/landing/playa.jpg') }}')]">

        <div class="h-full flex justify-center items-center flex-col">
            <h1 class="text-white font-bold text-6xl left-50 top-50">Playas. <span class="text-orange-300">Hoteles.</span>
                <br><span class="text-7xl ">Diversion.</span>
            </h1>
            <div class="flex justify-center items-center gap-10 mt-20">
                @if (auth()->check())
                    <a class="transition-all ease-in-out duration-500 border border-white text-white bg-transparent px-6 py-4 rounded-lg hover:bg-white hover:text-black""
                        href="{{ route('home') }}">Perfil</a>
                @else
                    <a class="transition-all ease-in-out duration-500 border border-white text-white bg-transparent px-6 py-4 rounded-lg hover:bg-white hover:text-black""
                        href="{{ route('login') }}">Iniciar Sesión</a>
                @endif

            </div>
        </div>

    </section>

    <hr class="w-48 h-1 mx-auto my-4 bg-yellow-200 border-0 rounded md:my-10 dark:bg-gray-700">

    <section class="w-full mt-[2rem] mb-[2rem]">

        <div id="particles-js" class="absolute w-full h-full"></div>


        <div class="w-full flex justify-center flex-col items-center p-5">
            <h1 class="text-6xl z-10"> <span class="font-thin">Los</span><span
                    class="font-bold text-blue-600">Hoteles</span>
            </h1>
            <p class="mt-[2rem] lg:text-3xl z-10"><span class="font-thin">Tendrás las mejores <span
                        class="font-bold">experiencias</span>, en los
                    mejores</span>
                <span class="font-bold z-10">alojamientos,</span> <br> <span class="font-thin">para tus mejores</span>
                <span class="font-bold z-10">vacaciones.</span>
            </p>
        </div>

        <div class=" flex justify-center gap-6 mt-[5rem] px-5">

            @foreach ($randomAccomodations as $accomodation)
                <div
                    class="accomodation w-[30rem] bg-gray-800 mx-auto rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-105">
                    <div class="block w-full">
                        <div class="relative">
                            <img class="w-full h-80 shadow-md opacity-75 transition-all easy-in-out duration-300 hover:opacity-100 "
                                src={{ $accomodation->image }} alt={{ $accomodation->name }}>
                            <div class="absolute bottom-0 left-0 p-4">
                                <h3 class="text-white font-bold text-3xl ">{{ $accomodation->name }}</h3>
                                <p data-id={{ $accomodation->id }}
                                    class="accomodationDescription text-xl bg-slate-600 bg-opacity-50 text-white font-bold transition-all ease-in-out duration-200 opacity-0 rounded p-1 h-0">
                                    {{ $accomodation->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>

    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

    <section class="container mx-auto mt-[18rem] mb-[10rem]">

        <div class="w-full flex justify-center flex-col items-center p-5 mb-[5rem]">
            <h1 class="text-6xl"> <span class="font-thin">Opinión</span><span class="font-bold text-orange-400">Expertos
                </span>
            </h1>
            <p class="mt-[2rem] lg:text-3xl"><span class="font-thin">Tendrás las mejores <span
                        class="font-bold">experiencias</span>, en los
                    mejores</span>
                <span class="font-bold">alojamientos,</span> <br> <span class="font-thin">para tus mejores</span>
                <span class="font-bold">vacaciones.</span>
            </p>
        </div>

        <div class="grid grid-cols-2 gap-10">

            <div data-aos="fade-right" class="opacity-0 transition-all easy-in-out duration-200">

                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 ">
                    <img class="h-full mx-auto" src="{{ asset('img/landing/avatar.png') }}" alt="" width="384"
                        height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <p class="text-lg font-medium">
                            “Me encanta esta aplicación de reserva de alojamientos. Es fácil de usar y tiene una amplia
                            selección de alojamientos disponibles en cualquier ciudad que desee visitar.”
                        </p>
                        <figcaption class="font-medium">
                            <div class="text-orange-500">
                                Nombre de Cliente
                            </div>
                        </figcaption>
                    </div>
                </figure>

            </div>

            <div data-aos="fade-right"
                class="opacity-0 transition-all easy-in-out duration-200 flex justify-center items-center">

                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 ">
                    <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                        src="{{ asset('img/landing/avatar.png') }}" alt="" width="384" height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <p class="text-lg font-medium">
                            “Esta aplicación me ha salvado la vida en varias ocasiones. Viajo mucho por trabajo y siempre
                            necesito reservar un alojamiento de última hora.”
                        </p>
                        <figcaption class="font-medium">
                            <div class="text-orange-500">
                                Nombre de Cliente
                            </div>
                        </figcaption>
                    </div>
                </figure>

            </div>

            <div data-aos="fade-left"
                class="opacity-0 transition-all easy-in-out duration-200 flex justify-center items-center">

                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 ">
                    <img class="w-48 mx-auto" src="{{ asset('img/landing/avatar.png') }}" alt="" width="384"
                        height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <p class="text-lg font-medium">
                            “Con esta aplicación, puedo encontrar y reservar un alojamiento en cuestión de minutos.”
                        </p>
                        <figcaption class="font-medium">
                            <div class="text-orange-500">
                                Nombre de Cliente
                            </div>
                        </figcaption>
                    </div>
                </figure>

            </div>

            <div data-aos="fade-left" class="opacity-0 transition-all easy-in-out duration-200">

                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 ">
                    <img class="h-auto w-48 mx-auto" src="{{ asset('img/landing/avatar.png') }}" alt=""
                        width="384" height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <p class="text-lg font-medium">
                            “No puedo decir suficientes cosas buenas sobre esta aplicación. La interfaz es súper intuitiva y
                            fácil de usar.”
                        </p>
                        <figcaption class="font-medium">
                            <div class="text-orange-500">
                                Nombre de Cliente
                            </div>
                        </figcaption>
                    </div>
                </figure>

            </div>
        </div>
    </section>

@endsection

{{-- Particles --}}
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script src="{{ asset('js/landing.js') }}" type="module"></script>
