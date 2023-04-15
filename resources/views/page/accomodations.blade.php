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

            <hr class="border-2 border-orange-200 rounded mt-[2rem]">

            <div class="grid grid-cols-2 mt-[5rem]">

                <img src="" alt="">

                <p>En nuestra empresa, nos esforzamos por brindarle una experiencia vacacional inolvidable. Queremos que
                    nuestros huéspedes se sientan cómodos y como en casa. Por esta razón, ofrecemos una amplia selección de
                    alojamientos que se adaptan a todos los gustos y necesidades. Ya sea que busque una cabaña acogedora en
                    la montaña, una villa de lujo frente al mar o un apartamento en la ciudad, estamos seguros de que
                    encontrará la opción perfecta para sus vacaciones. Además, nos aseguramos de que nuestros alojamientos
                    estén equipados con todas las comodidades necesarias para que nuestros huéspedes disfruten de una
                    estadía confortable y placentera. ¡Esperamos poder recibirte pronto y hacerte sentir como en casa!</p>

            </div>

        </div>

    </section>

    <section class="container mx-auto my-[2rem]">

        <h2 class="text-3xl font-bold mb-10">Seccion de Alojamientos</h2>

        <hr class="border-2 border-orange-200 rounded mt-[2rem] mb-[2rem]">

        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-7">

            {{-- ForEach de los alojamientos --}}
            @foreach ($accomodations as $accomodation)
                <div data-aos="zoom-in-up"
                    class="max-w-sm rounded overflow-hidden shadow-lg transition-all ease-in-out duration-300 hover:scale-105">
                    <div>
                        <img class="w-96 h-80" src="{{ $accomodation->image }}" alt="{{ $accomodation->name }}">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $accomodation->name }}</div>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-700 text-base flex justify-center flex-col items-center">
                                    <svg width="20" height="20">
                                        <polygon points="10,0 14,6 20,7 15,12 16,20 10,16 4,20 5,12 0,7 6,6"
                                            fill="#FFD700" />
                                    </svg>
                                    <span class=" text-yellow-800 font-bold">{{ $accomodation->stars }}</span>
                                </p>
                                <a href="#"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Mostrar precio
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </section>



@endsection