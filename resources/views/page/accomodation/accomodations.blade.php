@extends('../plantilla/plantilla')

@section('title', 'Lista de Alojamientos')

@section('main')


    <section class=" w-full h-screen bg-[url('{{ asset('/img/palmeras.jpg') }}')] rounded-b-xl">

        <div class="h-full flex justify-center items-center flex-col">
            <h1 id="letters" class="text-white font-bold text-9xl left-50 top-50 transform -rotate-6 skew-x-6">
            </h1>
        </div>

    </section>
    

    <div class="bg-[#E5E7EB]">
        <section class="container mx-auto p-[5rem]">

            <h2 class="text-5xl font-bold mb-10 text-center">Sección<span class="text-blue-400">Alojamientos</span></h2>


            <p class="text-2xl px-10 text-justify">Ofrecemos opciones como <span class="font-bold">cabañas acogedoras en la
                    montaña, villas de lujo frente al mar y apartamentos en la ciudad.</span>
                Estamos seguros de que encontrará la <span class="font-bold">opción perfecta para sus vacaciones.</span></p>



            <hr class="w-48 h-1 mx-auto my-4 bg-yellow-200 border-0 rounded md:my-10 dark:bg-gray-700">

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-7">

                {{-- ForEach --}}
                @foreach ($accomodations as $accomodation)
                    <div data-aos="zoom-in-up" class="max-w-sm rounded-xl overflow-hidden shadow-lg">
                        <div>
                            <img class="w-96 h-80" src="{{ $accomodation->image }}" alt="{{ $accomodation->name }}">
                            <div class="px-6 py-4 bg-white">
                                <div class="font-bold text-xl mb-2">{{ $accomodation->name }}</div>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-700 text-base flex justify-center flex-col items-center">
                                        <svg width="20" height="20">
                                            <polygon points="10,0 14,6 20,7 15,12 16,20 10,16 4,20 5,12 0,7 6,6"
                                                fill="#FFD700" />
                                        </svg>
                                        <span class=" text-yellow-800 font-bold">{{ $accomodation->stars }}</span>
                                    </p>
                                    <a href="{{ route('accomodation', ['id' => $accomodation->id]) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Informacion
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </section>
    </div>



@endsection

<script src="{{ asset('js/accomodations.js') }}"></script>
