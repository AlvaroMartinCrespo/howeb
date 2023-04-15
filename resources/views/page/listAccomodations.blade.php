@extends('../plantilla/plantilla')

@section('title', 'Login Howeb')

@section('main')

    <section class="container mx-auto mt-[7rem]">

        <div class="pb-[3rem] flex justify-center">
            @if (auth()->user()->admin)
                <div class="container m-[5.5rem]">
                    <h1 class="text-2xl font-bold mb-4">Lista de Alojamientos</h1>

                    <ul class="divide-y divide-gray-200">
                        @foreach ($accomodations as $accomodation)
                            <li class="p-4 hover:bg-slate-200 rounded">
                                <a class="flex justify-left items-center gap-11"
                                    href="{{ route('accomodation', ['id' => $accomodation->id]) }}">
                                    <img class="w-24 h-20" src={{ $accomodation->image }} alt={{ $accomodation->name }}>
                                    <p class="text-gray-900">{{ $accomodation->name }}</p>
                                    <p class="text-gray-700 text-base flex justify-center flex-col items-center">
                                        <svg width="20" height="20">
                                            <polygon points="10,0 14,6 20,7 15,12 16,20 10,16 4,20 5,12 0,7 6,6"
                                                fill="#FFD700" />
                                        </svg>
                                        <span
                                            class=" text-yellow-800 font-bold text-center">{{ $accomodation->stars }}</span>
                                    </p>


                                </a>

                            </li>
                        @endforeach
                    </ul>
                    <div class="my-4">
                        {{ $accomodations->links() }}
                    </div>
                    <div class="flex justify-center items-center my-[2rem]">
                        <a href="{{ route('cpanel') }}"
                            class=" flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-300 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Volver
                        </a>
                    </div>

                </div>
            @else
                @include('page/notAllowed')
            @endif
        </div>

    </section>


@endsection
