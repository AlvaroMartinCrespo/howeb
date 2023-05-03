@extends('plantilla/plantilla')

@section('title', 'Howeb Hotels')

@section('main')


    <section id="inicio-landing"
        class="w-full h-screen bg-[url('{{ asset('/img/landing/playa.jpg') }}')] rounded-b-xl h-screen">

        <div class="h-full flex pt-[15rem] items-center flex-col">
            <h1 class="text-white font-bold"><span class='text-8xl'>Playas.
                </span><span class='text-[#efb810] text-8xl'>Hoteles. </span>
            </h1>
            <span id="lettersLanding"
                class='text-white font-bold text-9xl h-[5rem] underline underline-offset-8 rotate-6 skew-x-12 decoration-4 decoration-[#efb810] py-10'></span>
            <div id="button" class="flex justify-center items-center transform transition-all ease-in-out duration-1000">
                @if (auth()->check())
                    <a class="transition-all ease-in-out duration-500 border-2 font-bold border-white text-white bg-transparent px-6 py-4 rounded-lg hover:bg-white hover:text-black"
                        href="{{ route('home') }}">Perfil</a>
                @else
                    <a class="transition-all ease-in-out duration-500 border-2 font-bold border-white text-white bg-transparent px-6 py-4 rounded-lg hover:bg-white hover:text-black"
                        href="{{ route('login') }}">Iniciar Sesión</a>
                @endif

            </div>
        </div>

    </section>

    <hr class="w-48 h-1 mx-auto my-4 bg-yellow-200 border-0 rounded md:my-10 dark:bg-gray-700">

    <section class="w-full p-[2rem]">

        <div id="particles-js" class="absolute w-auto h-full"></div>


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
                    class="accomodation w-[30rem] bg-gray-800 mx-auto rounded-md shadow-md overflow-hidden transition-all ease-in-out duration-300 hover:scale-105 z-30">
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



    <section class="bg-[#E5E7EB] p-[5rem] rounded-t-3xl mt-[13rem]">
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

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

        <div class="grid grid-rows-1">

            <div class="grid grid-cols-1 gap-10 justify-items-center">

                <div data-aos="fade-right" class="opacity-0 transition-all easy-in-out duration-200 w-[80%]">

                    <figure class="md:flex bg-white rounded-xl p-8 md:p-0 shadow-lg">
                        <img class="h-full mx-auto rounded-ss-xl"
                            src="{{ asset('img/landing/experts/expertoQuevedo.png') }}" alt="" width="384"
                            height="512">
                        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                            <p class="text-lg font-medium">
                                “Me encanta esta aplicación de reserva de alojamientos. Es fácil de usar y tiene una amplia
                                selección de alojamientos disponibles en cualquier ciudad que desee visitar.”
                            </p>
                            <figcaption class="font-medium">
                                <div class="text-orange-500">
                                    Pedro Luis Domínguez Quevedo
                                </div>
                            </figcaption>
                        </div>
                    </figure>

                </div>

                <div data-aos="fade-right"
                    class="opacity-0 transition-all easy-in-out duration-200 flex justify-center items-center w-[70%]">

                    <figure class="md:flex bg-white rounded-xl p-8 md:p-0 shadow-lg">
                        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                            <p class="text-lg font-medium">
                                “Recientemente visité la página de reserva de alojamientos "Howeb.com" y quedé gratamente
                                sorprendida por la amplia variedad de opciones de alojamiento que ofrece en todo el mundo.”
                            </p>
                            <figcaption class="font-medium">
                                <div class="text-orange-500">
                                    Rosalía Vila Tobella
                                </div>
                            </figcaption>
                        </div>
                        <img class="w-60 h-auto mx-auto rounded-ee-xl"
                            src="{{ asset('img/landing/experts/rosaliaExpert.jpg') }}" alt="" width="384"
                            height="512">
                    </figure>

                </div>

                <div data-aos="fade-left"
                    class="opacity-0 transition-all easy-in-out duration-200 flex justify-center items-center w-[70%]">

                    <figure class="md:flex bg-white rounded-xl p-8 md:p-0 shadow-lg">
                        <img class="w-48 mx-auto rounded-ss-xl" src="{{ asset('img/landing/experts/orslokExperto.jpg') }}"
                            alt="" width="384" height="512">
                        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                            <p class="text-lg font-medium">
                                “Con esta aplicación, puedo encontrar y reservar un alojamiento en cuestión de minutos.”
                            </p>
                            <figcaption class="font-medium">
                                <div class="text-orange-500">
                                    Germán García Carro
                                </div>
                            </figcaption>
                        </div>
                    </figure>

                </div>

                <div data-aos="fade-left"
                    class="opacity-0 transition-all easy-in-out duration-200 flex justify-center items-center w-[80%]">

                    <figure class="md:flex bg-white rounded-xl p-8 md:p-0 shadow-lg">
                        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                            <p class="text-lg font-medium">
                                “No puedo decir suficientes cosas buenas sobre esta aplicación. La interfaz es súper
                                intuitiva y
                                fácil de usar.”
                            </p>
                            <figcaption class="font-medium">
                                <div class="text-orange-500">
                                    Benito Antonio Martinez Ocasio
                                </div>
                            </figcaption>
                        </div>
                        <img class="h-auto w-48 mx-auto rounded-ee-xl"
                            src="{{ asset('img/landing/experts/BadBunnyExpert.jpg') }}" alt="" width="384"
                            height="512">
                    </figure>

                </div>
            </div>

        </div>


    </section>

@endsection

{{-- Particles --}}
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
{{-- <script src="http://threejs.org/examples/js/libs/stats.min.js"></script> --}}
<script src="{{ asset('js/landing.js') }}" type="module"></script>
