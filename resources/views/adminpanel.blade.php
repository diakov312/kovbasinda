@extends('layouts.app1')

@section('fonts')
    @parent
@endsection

@section('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
    @parent
@endsection

@section('navbar')
    @if (Route::has('login'))
        @auth
            <nav id="nav">
                <ul class="container">
                    <li><a href="/">About me</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/hobbies">Hobbies</a></li>
                    <li><a href="/#contact">Contact</a></li>
                    <li><a href="/adminpanel">Admin</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </nav>
        @endauth
    @endif
@endsection

@section('content')
    @if (Route::has('login'))
        @auth
            @section('home')
            @endsection

            @section('portfolio')
                <div class="wrapper style3">
                    <article id="portfolio">
                        <header>
                            <h2>Панель администратора.</h2>
                        </header>
                        <div class="container">

                            {{--Portfolio form--}}
                            <section class="box style1">
                                <h3>Добавить портфолио.</h3>
                                <br>
                                <form action="{{route('admin.add_portfolio.store')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Название работы</span>
                                        </div>
                                        <input name="nameWork" type="text" class="form-control"
                                               placeholder="Page name" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <br>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Краткое описание работы</span>
                                        </div>
                                        <textarea name="preliminaryDescriptionWork" class="form-control" aria-label="Text information"></textarea>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Подробное описание работы</span>
                                        </div>
                                        <textarea name="fullDescriptionWork" class="form-control" aria-label="Text information"></textarea>
                                    </div>
                                    <br>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="categorySelect">Категоория работы</label>
                                        </div>
                                        <select name="categoryWork" class="custom-select" id="categorySelect">
                                            <option value="1" selected>Front-end</option>
                                            <option value="2">Back-end</option>
                                            <option value="3">Full-stack</option>
                                        </select>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="imageWork" class="custom-file-input" id="imagePage">
                                        <label class="custom-file-label" for="imagePage">Картинка работы</label>
                                    </div>
                                    <br><br>
                                    <button type="submit">Добавить портфолио</button>
                                </form>
                            </section>

                            {{--Hobby form--}}
                            <section class="box style1">
                                <h3>Добавить хобби.</h3>
                                <br>
                                <form action="{{route('admin.add_hobby.store')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Название хобби</span>
                                        </div>
                                        <input name="nameHobby" type="text" class="form-control"
                                               placeholder="Hobby name" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <br>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Краткое описание хобби</span>
                                        </div>
                                        <textarea name="preliminaryDescriptionHobby" class="form-control" aria-label="Text information"></textarea>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Подробное описание хобби</span>
                                        </div>
                                        <textarea name="fullDescriptionHobby" class="form-control" aria-label="Text information"></textarea>
                                    </div>
                                    <br>
                                    <div class="custom-file">
                                        <input type="file" name="imageHobby" class="custom-file-input" id="imageHobby">
                                        <label class="custom-file-label" for="imageHobby">Картинка хобби</label>
                                    </div>
                                    <br><br>
                                    <button type="submit">Добавить хобби</button>
                                </form>
                            </section>
                        </div>
                        <footer>
                            {{--<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
                            <a href="#contact" class="button big scrolly">Get in touch with me</a>--}}
                        </footer>
                    </article>
                </div>
            @endsection

            @section('work')
            @endsection

            @section('contact')
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

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous">

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous">

    </script>
    @parent
@endsection