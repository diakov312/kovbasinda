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
    <div class="wrapper style3">
        <article id="portfolio">
            <header>
                <h2>Мое портфолио.</h2>
            </header>
                <div class="row">
                    <div class="3u"></div>
                    <div class="2u">
                        <h3>
                            <a href="#frontEnd">Front-end</a>
                        </h3>
                    </div>
                    <div class="2u">
                        <h3>
                            <a href="#backEnd">Back-end</a>
                        </h3>
                    </div>
                    <div class="2u">
                        <h3>
                            <a href="#fullStack">Full-stack</a>
                        </h3>
                    </div>
                    <div class="3u"></div>
                </div>
            <div class="container">
                <section id="frontEnd" class="box style1">
                    <header>
                        <h3>Front-end.</h3>
                    </header>
                    <div class="row">
                        @each('portfolio.portfolioBlock', $elementsFirstCategory, 'currWork')
                    </div>
                </section>
                <section id="backEnd" class="box style1">
                    <header>
                        <h3>Back-end.</h3>
                    </header>
                    <div class="row">
                        @each('portfolio.portfolioBlock', $elementsSecondCategory, 'currWork')
                    </div>
                </section>
                <section id="fullStack" class="box style1">
                    <header>
                        <h3>Full-stack.</h3>
                    </header>
                    <div class="row">
                        @each('portfolio.portfolioBlock', $elementsThirdCategory, 'currWork')
                    </div>
                </section>
            </div>
        </article>
    </div>
@endsection

@section('scripts')
    @parent
@endsection


