<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>Kovbasin D.A.</title>

    @section('fonts')
        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
              integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        @endsection
    @yield('fonts')

    @section('styles')
        <!-- Styles -->
        <link rel="stylesheet" href="css/main.css" />
    @endsection
    @yield('styles')
</head>
<body>
    @yield('content')
    <!-- Nav -->
    @section('navbar')
        <nav id="nav">
            <ul class="container">
                <li><a href="/">About me</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/hobbies">Hobbies</a></li>
                <li><a href="#contact">Contact</a></li>
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
    @endsection
    @yield('navbar')

    <!-- Home -->
    @section('home')
        @include('mainpage.aboutme')
    @endsection
    @yield('home')

    <!-- Work -->
    @section('work')
        <div class="wrapper style2">
            <article id="work">
                <header>
                    <h2>Резюме.</h2>
                    <p>Ниже вы более подробно можете ознакомиться с моим резюме.</p>
                </header>
                <div class="container">

                        <div class="12u 12u(mobile)" id="myLife">
                            <section class="box style1">
                                <span class="icon featured fa-comments-o"></span>
                                <h3>Биография.</h3>
                                <p>Мое полное имя <b>Ковбасин Дмитрий Алексеевич</b>. Я родился 22 сентября
                                1985 года в Вологодской области, поселок Чагода, Чагодощенского района.
                                На данный момент проживаю в России, город Санкт-Петербург, недалеко
                                от станции метро Купчино. Имеется собственный автомобиль и права категории "B".
                                Являюсь гражданином России. Родной язык русский, так же есть знания английского и </p>
                                французского языков.
                            </section>
                            <section></section>
                        </div>
                        <div class="12u 12u(mobile)" id="myStudies">
                            <section class="box style1">
                                <span class="icon featured fa-university"></span>
                                <h3>Образование.</h3>
                                <h5>ЛЭТИ</h5>
                                <p>В <b>2009г.</b> закончил "Санкт-Петербургский государственный электротехнический
                                универститет "ЛЭТИ" имени В.И. Ульянова (Ленина)", на факультете "Приборостроения и
                                электронно-вычислительной техники", по специальности
                                "Информационно-измерительная техника и технологии"</p>
                                <h5>ПГУПС</h5>
                                <p>В <b>2012г.</b> закончил курсы переподготовки и повышения квалификации в
                                "Петербургском государственном университете путей сообщения "ПГУПС"", по специальности
                                 "Инженерно-геодезические изыскания для строительства зданийи сооружений"</p>
                                <h5>ИТМО</h5>
                                <p>В <b>2018г.</b> закончил курсы переподготовки и повышения квалификации в
                                "Санкт-Петербургском национальном исследовательском университете информационных
                                технологий, механики и оптики"ИТМО"", по специальнсти "Веб-разработчик"</p>
                            </section>
                            <section></section>
                        </div>
                        <div class="12u 12u(mobile)" id="myWork">
                            <section class="box style1">
                                <span class="icon featured fa-briefcase"></span>
                                <h3>Трудовой стаж.</h3>
                                <h5>ООО"НСЖСОФТ"</h5>
                                <p>С августа 2010г. по сентябрь 2011г. работа менеджером по работе с клиентами.
                                 В обязаности входила работа с наполением и версткой сайта, составление технической
                                документации разрабатываемой программы и размещение ее на сайте компании.</p>
                                <h5>Ленгипротранспуть</h5>
                                <p>С сентября 2011г. по апрель 2018г. работа геодезистом. В обязаности входила
                                топографическая съемка и отрисовка железнодорожных строений и прилегающей инфраструктуры.
                                Работа в AutoCAD Robur Rail и других BIM системах.</p>
                                <h5>Волекс</h5>
                                <p>C мая 2018г. по настоящее время работа back-end разработчиком. В обязаности
                                входит работа с сайтами и внутренними системами компании. </p>
                            </section>
                        </div>
                            <section></section>
                        <div class="12u 12u(mobile)" id="mySkills">
                            <section class="box style1">
                                <span class="icon featured fa-briefcase"></span>
                                <h3>Базовые навыки разработки.</h3>
                                <h5>Разработка.</h5>
                                <p>Верстка - знание <b>HTML5</b> и <b>CSS3</b>, понимание структуры DOM дерева. Знаком с
                                <b>bootstrap4</b> и применял его в проектах. Front-end - знание <b>Java Script</b>,
                                    знаком с библиотекой <b>JQuery</b>. Понимание технологии <b>ajax</b>.
                                    Так же приходилось применять и другие библиотеки,
                                 например <b>js-grid</b> и <b>ChartJS</b>. Back-end -
                                знание <b>php</b>, знание фреймворка <b>laravel</b>. Так же приходилось писать
                                    несложные программы на <b>C#</b>.</p>
                                <h5>Другие навыки.</h5>
                                <p>Зание <b>AutoCAD</b> и опыт создания собственных программ под него.
                                Знакомство с <b>BIM</b>, опыт работы с геодезическим и топографическим оборудованием.
                                Опыт лазерного сканирования и обработки данных лазерного сканирования. Коммуникативность,
                                понимаю насколько важно последовательное и правильное общение с коллегами и с вышестоящим
                                руководством.</p>
                            </section>
                        </div>

                </div>
                <footer>
                    <p>Хотите ознакомиться с моими работами?</p>
                    <a href="/portfolio" class="button big scrolly">Посмотреть портфолио</a>
                </footer>
            </article>
        </div>
    @endsection
    @yield('work')

    <!-- Portfolio -->
    @section('portfolio')

    @endsection
    @yield('portfolio')

    <!-- Contact -->
    @section('contact')
        <div class="wrapper style4">
            <article id="contact" class="container 75%">
                <header>
                    <h2>Свяжитесь со мной.</h2>
                    <p>Отправьте мне сообщение на почту.</p>
                </header>
                <div>
                    <div class="row">
                        <div class="12u">
                            <form method="post" action="/sendFeedback">
                                {{ csrf_field() }}
                                <div>
                                    <div class="row">
                                        <div class="6u 12u(mobile)">
                                            <input type="text" name="nameFeedback" id="name" placeholder="Name" />
                                        </div>
                                        <div class="6u 12u(mobile)">
                                            <input type="text" name="emailFeedback" id="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="12u">
                                            <input type="text" name="subjectFeedback" id="subject" placeholder="Subject" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="12u">
                                            <textarea name="messageFeedback" id="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row 200%">
                                        <div class="12u">
                                            <ul class="actions">
                                                <li><input type="submit" value="Отправить" /></li>
                                                <li><input type="reset" value="Очистить" class="alt" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <hr />
                            <h3>Найти меня на ...</h3>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/dkovbasin" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="https://vk.com/id100511" class="icon fa-vk"><span class="label">Github</span></a></li>
                                <li><a href="https://github.com/diakov312" class="icon fa-github"><span class="label">Github</span></a></li>
                                {{--<li><a href="#" class="icon fa-skype"><span class="label">Skype</span></a></li>
                                <li><a href="#" class="icon fa-whatsapp"><span class="label">Skype</span></a></li>--}}
                            </ul>
                            <hr />
                        </div>
                    </div>
                </div>
                <footer>
                    <ul id="copyright">
                        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </footer>
            </article>
        </div>
    @endsection
    @yield('contact')

    @section('scripts')
        <!-- Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.scrolly.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-viewport.min.js"></script>
        <script src="js/util.js"></script>
        <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
        <script src="js/main.js"></script>
    @endsection
    @yield('scripts')

</body>
</html>