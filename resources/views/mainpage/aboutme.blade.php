@section('myMainInf')
    <article class="container">
        <div class="row" id="top">
            <div class="4u 12u(mobile)">
                <span class="image fit"><img src="css/images/MyPresentFoto.jpg" alt="" /></span>
            </div>
            <div class="8u 12u(mobile)">
                <header>
                    <h1>Здравствуйте. Меня зовут <br><br><strong>Дмитрий Ковбасин</strong>.</h1>
                </header>
                <p>И этот сайт предназначен для отображюения моих знаний, увлечений, реализованных проектов и
                    моего развития как разработчика.</p>
                @if (Route::has('login'))
                    @auth
                        <span>Я рад приветствовать вас на моем сайте. Этот ресурс предназначен для отображения
                            информации обо мне и моих профессиональных навыках и опыте.
                            Если вы здесь, то, скорее всего, я вас интересую как разработчик,
                            или работник. Надеюсь, вы найдете здесь всю информацию, которая вас интересует.</span>
                        <br>
                        <a href="#myLife">Моя биография.</a>
                        <a href="#myStudies">Моё образование.</a>
                        <a href="#myWork">Моя работа.</a>
                        <a href="#mySkills">Мои навыки.</a>
                    @else
                        <span>Зарегестрировавшись, вы можете увидеть больше информации обо мне и посмотреть как
                            организованна панель администратора.
                        </span>
                        <br>
                        <br>
                        <a href="{{ route('register') }}" class="button big scrolly">Зарегестрироваться.</a>
                    @endauth
                @endif
            </div>
        </div>
    </article>
@show