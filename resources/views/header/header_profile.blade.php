<header class="header">
    <div class="inner">
        <div class="logo">
            <a href="/">
                <img src="../templates/site/dist/img/logo.png" alt="FUNCASH.RU">
            </a>
        </div>
        <div class="stat">
            <div class="o o-1">Онлайн
                <div id="st-online">0</div>
            </div>
            <div class="l"></div>
            <div class="o">Пользователей
                <div id="st-users">0</div>
            </div>
            <div class="l"></div>
            <div class="o">Открыто кейсов
                <div id="st-cases">0</div>
            </div>
            <div class="cls"></div>
            <script>
                $(document).ready(function () {
                    var csns = $.animateNumber.numberStepFactories.separator(',');
                    $('#st-online').animateNumber({number: 1, numberStep: csns}, 500);
                    $('#st-users').animateNumber({number: 2881, numberStep: csns}, 700);
                    $('#st-cases').animateNumber({number: 12515, numberStep: csns}, 1000);
                });
            </script>
        </div>
        <div class="u-menu">
            <ul class="so-auth" id="uLogin"
                data-ulogin="display=buttons;fields=first_name,last_name,email,verified_email;verify=1;optional=photo_big,bdate,sex;providers=vkontakte;hidden=;redirect_uri=http://funcash.ru/auth">
                @if(Auth::guest())
                    <li id="log" onclick="VK.Auth.login(authInfo);"
                        class="btn sexy gradient-blue icon-r flaticon-vk" data-uloginbutton="vkontakte">
                        <b>Войти через</b> <span class="flaticon-soc-vk"></span></li>
                @else
                    <li id="log" class="btn sexy gradient-blue icon-r flaticon-vk" data-uloginbutton="vkontakte">
                        <a href="{{url('profile/'.Auth::user()->id)}}"> {{ Auth::user()->name}}</a> <span
                                class="flaticon-soc-vk"></span></li>
                @endif

            </ul>
            <div class="cls"></div>
        </div>
        <nav class="nav">
            <div class="nav-button">
                <span class="flaticon-menu"></span>
            </div>
            <ul>
                <li><a href="{{url('/')}}" class="eas">Кейсы</a></li>
                <li><a href="{{url('/content')}}" class="eas"><span class="flaticon-gift"></span> Конкурс
                        "Ютюбер"</a></li>
                <li><a href="{{url('/faq')}}" class="eas">FAQ</a></li>
                <li><a href="{{url('/guarantees')}}" class="eas">Гарантии</a></li>
                <li><a href="{{url('/reviews')}}" class="eas">Отзывы</a></li>
            </ul>
        </nav>
        <div class="cls"></div>
    </div>
</header>
<div class="sub-header">
    <div class="inner">

        <div class="live">
            <div class="name">Live призы</div>
            <div class="prize" id="live-prize-box">
                <br><br>Загрузка...<br><br><br>
            </div>
            <div class="cls"></div>
        </div>
        <div class="cls"></div>
    </div>
</div>
