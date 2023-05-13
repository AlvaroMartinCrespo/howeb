@extends('../plantilla/plantilla')

@section('title', 'Lista de Alojamientos')

@section('main')

    {{-- Option 3 --}}
    @if (auth()->user()->admin)
        <div class="pt-[3rem] bg-gray-900 text-white">
            <div class="container mx-auto md:p-[7rem] pt-[5rem]">
                <div class="grid md:grid-cols-6 grid-cols-1 grid-rows-1 items-center">
                    <span class="col-span-1"></span>
                    <div class="col-span-4 bg-slate-800 rounded-lg p-10">

                        <h1 class="text-center text-2xl font-bold mb-4">Lista de Alojamientos</h1>
                        <ul class="divide-y divide-gray-600">
                            @foreach ($accomodations as $accomodation)
                                <li class="p-4 hover:bg-gray-600 rounded transition-all ease-in-out duration-200">
                                    <a class="flex justify-left items-center gap-11"
                                        href="{{ route('accomodation', ['id' => $accomodation->id]) }}">
                                        <img class="w-24 h-20" src="{{ $accomodation->image }}"
                                            alt="{{ $accomodation->name }}">
                                        <p class="text-gray-100 w-28">{{ $accomodation->name }}</p>
                                        <p class="text-gray-400 text-base flex justify-center flex-col items-center">
                                            <svg width="20" height="20">
                                                <polygon points="10,0 14,6 20,7 15,12 16,20 10,16 4,20 5,12 0,7 6,6"
                                                    fill="#FFD700" />
                                            </svg>
                                            <span
                                                class="text-yellow-300 font-bold text-center">{{ $accomodation->stars }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="my-4">
                            {{ $accomodations->links() }}
                        </div>
                        <div class="flex justify-center items-center my-2rem">
                            <a href="{{ route('cpanel') }}"
                                class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-300 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Volver
                            </a>
                        </div>
                    </div>
                    <span class="col-span-1"></span>

                </div>

            </div>

        </div>
    @else
        @include('page/notAllowed')
    @endif

    {{-- Option 2 --}}
    {{-- <section class="mx-auto mt-[5.5rem] bg-gray-900 text-white p-[3rem]">

        <div class="grid grid-rows-1 w-full h-full">

            <div class="grid grid-cols-1">

                <div class="pb-3">
                    @if (auth()->user()->admin)
                        <div class="">
                            <h1 class="text-2xl font-bold mb-4">Lista de Alojamientos</h1>
                            <ul class="divide-y divide-gray-600">
                                @foreach ($accomodations as $accomodation)
                                    <li class="p-4 hover:bg-gray-800 rounded transition-all ease-in-out duration-200">
                                        <a class="flex justify-left items-center gap-11"
                                            href="{{ route('accomodation', ['id' => $accomodation->id]) }}">
                                            <img class="w-24 h-20" src="{{ $accomodation->image }}"
                                                alt="{{ $accomodation->name }}">
                                            <p class="text-gray-100 w-28">{{ $accomodation->name }}</p>
                                            <p class="text-gray-400 text-base flex justify-center flex-col items-center">
                                                <svg width="20" height="20">
                                                    <polygon points="10,0 14,6 20,7 15,12 16,20 10,16 4,20 5,12 0,7 6,6"
                                                        fill="#FFD700" />
                                                </svg>
                                                <span
                                                    class="text-yellow-300 font-bold text-center">{{ $accomodation->stars }}</span>
                                            </p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="my-4">
                                {{ $accomodations->links() }}
                            </div>
                            <div class="flex justify-center items-center my-2rem">
                                <a href="{{ route('cpanel') }}"
                                    class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-300 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Volver
                                </a>
                            </div>
                        </div>
                    @else
                        @include('page/notAllowed')
                    @endif
                </div>
            </div>

        </div>

    </section> --}}

    {{-- Option 1 --}}
    {{-- <section class="bg-gray-900 text-white w-full h-screen pt-[7rem]">
        <div class="container mx-auto mt-7">
            <div class="pb-3 flex justify-center">
                @if (auth()->user()->admin)
                    <div class="container m-5.5">
                        <h1 class="text-2xl font-bold mb-4">Lista de Alojamientos</h1>
                        <ul class="divide-y divide-gray-600">
                            @foreach ($accomodations as $accomodation)
                                <li class="p-4 hover:bg-gray-800 rounded transition-all ease-in-out duration-200">
                                    <a class="flex justify-left items-center gap-11"
                                        href="{{ route('accomodation', ['id' => $accomodation->id]) }}">
                                        <img class="w-24 h-20" src="{{ $accomodation->image }}"
                                            alt="{{ $accomodation->name }}">
                                        <p class="text-gray-100 w-28">{{ $accomodation->name }}</p>
                                        <p class="text-gray-400 text-base flex justify-center flex-col items-center">
                                            <svg width="20" height="20">
                                                <polygon points="10,0 14,6 20,7 15,12 16,20 10,16 4,20 5,12 0,7 6,6"
                                                    fill="#FFD700" />
                                            </svg>
                                            <span
                                                class="text-yellow-300 font-bold text-center">{{ $accomodation->stars }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="my-4">
                            {{ $accomodations->links() }}
                        </div>
                        <div class="flex justify-center items-center my-2rem">
                            <a href="{{ route('cpanel') }}"
                                class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-300 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Volver
                            </a>
                        </div>
                    </div>
                @else
                    @include('page/notAllowed')
                @endif
            </div>
        </div>
    </section> --}}



@endsection
