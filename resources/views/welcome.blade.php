@extends('layouts.app1')

@section('fonts')
    @parent
@endsection

@section('styles')
    @parent
@endsection

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
            @include('mainpage.contentlogin')
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

@section('scripts')
    @parent
@endsection




