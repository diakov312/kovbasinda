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

@section('home')
@endsection

@section('work')
@endsection

@section('portfolio')
    <div class="wrapper style3" style="height: 100vh">
        <article id="portfolio">
            <header>
                <h2>Ваше сообщение отправлено.</h2>
            </header>
            <div class="container">
                <section class="box style1">
                    <header>
                        <h3>Спасибо за то что проявили ко мне интерес. Я постараюсь связаться с вами как можно скорее!</h3>
                    </header>
                </section>
            </div>
        </article>
    </div>
@endsection

@section('contact')
@endsection

@section('scripts')
    @parent
@endsection