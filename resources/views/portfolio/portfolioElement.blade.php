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
                <h2>{{ $workElement->name_work }}</h2>
            </header>
            <div class="container">
                <div class="row">
                    <div class="12u 12u(mobile)">
                        <article class="box style2">
                            <h5>{{ $workElement->preliminary_description_work }}</h5>
                            <img src="{{ $workElement->name_image_work }}" alt="" />
                            <p>{{ $workElement->full_description_work }}</p>
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




