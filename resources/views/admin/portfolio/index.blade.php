@extends('layouts.app1')

@section('navbar')
    @if (Route::has('login'))
        @auth
            @parent
            @else
                @include('mainpage.navmain')
                @endauth
            @endif
@endsection

@section('content')
    @if (Route::has('login'))
        @auth
            @section('home')
            @endsection

            @section('work')
            @endsection
        @else
            @section('home')
            @endsection

            @section('work')
            @endsection

            @section('portfolio')
            @endsection

            @section('contact')
            @endsection

            @include('mainpage.contentlogout')
        @endauth
    @endif
@endsection