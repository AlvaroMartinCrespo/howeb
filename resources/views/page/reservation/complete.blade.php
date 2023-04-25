@extends('../plantilla/plantilla')

@section('title', 'Procesando reserva')

@section('main')

    <section class="bg-gray-900 text-white w-full h-screen pt-[7rem]">
        <div id="loader" class="flex justify-center items-center h-screen">
            <div class="loader w-12 h-12 rounded-full border-4 border-t-4 border-gray-200"></div>
        </div>
    </section>



@endsection

<script src="{{ asset('js/loader.js') }}"></script>
