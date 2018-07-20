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
                <h2>Мои увлечения.</h2>
            </header>
            <div class="container">
                    {{--<header>
                        <h3>Заголовок про хобби.</h3>
                    </header>--}}
                    <div class="row">
                        @each('hobbies.hobbyBlock', $hobbiesElements, 'currHobby')
                    </div>
            </div>
        </article>
    </div>
@endsection

@section('scripts')
    @parent
@endsection


