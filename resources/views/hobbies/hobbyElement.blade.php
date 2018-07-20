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

@section('home')
@endsection

@section('work')
@endsection

@section('portfolio')
    <div class="wrapper style3">
        <article id="portfolio">
            <header>
                <h2>{{ $hobbyElement->name_hobby }}</h2>
            </header>
            <div class="container">
                <div class="row">
                    <div class="12u 12u(mobile)">
                        <article class="box style2">
                            <h5>{{ $hobbyElement->preliminary_description_hobby }}</h5>
                            <img src="{{ $hobbyElement->name_image_hobby }}" alt="" />
                            <p>{{ $hobbyElement->full_description_hobby }}</p>
                        </article>
                    </div>
                </div>
            </div>
            <footer>
                <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
                <a href="#contact" class="button big scrolly">Get in touch with me</a>
            </footer>
        </article>
    </div>
@endsection




