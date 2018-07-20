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
                <h2>Не хватает прав доступа.</h2>
            </header>
            <div class="container">
                <section class="box style1">
                    <header>
                        <h3>К сожалению у вас недостаточно прав доступа для данной операции.
                            Пожалуйста обратитесь к администратору сайта, для получения больших прав доступа.
                        </h3>
                    </header>
                </section>
            </div>
        </article>
    </div>
@endsection

@section('contact')
    @parent
@endsection

@section('scripts')
    @parent
@endsection