@extends('../plantilla/plantilla')

@section('title', 'Login Howeb')

@section('main')

    @if (auth()->user()->admin)
        <div class="bg-[#E5E7EB]">
            @include('page/typepage/adminPage')
        </div>
    @else
        <div class="bg-[#E5E7EB]">
            @include('page/typepage/userPage')
        </div>
    @endif

@endsection
