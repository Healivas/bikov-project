<!DOCTYPE html>
<html lang="ru">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8"/>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <title> Гарантии | chip-cash.com - Веселая прибыль!</title>

    <link rel="stylesheet" href="../templates/site/dist/css/style.min.css"/>

    <script src="https://vk.com/js/api/openapi.js?136" type="text/javascript"></script>
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <!-- SITE SCRIPTS -->
    <script type="text/javascript" src="../templates/site/vendor/jquery-2.2.4.min.js"></script>
    {{--<script type="text/javascript" src="../templates/site/vendor/socket.io-1.4.5.js"></script>--}}
    {{--<script type="text/javascript" src="../templates/site/vendor/smoke.min.js"></script>--}}
    <script type="text/javascript" src="../templates/site/vendor/animate.min.js"></script>
    <script type="text/javascript" src="../templates/site/vendor/switch.min.js"></script>
    <script type="text/javascript" src="../templates/site/vendor/roulette.min.js"></script>

    <!-- SITE AUTH -->
    <script type="text/javascript" src="../../ulogin.ru/js/ulogin.js"></script>

    <!-- MAIN SCRIPT SITE -->
    <script type="text/javascript" src="../templates/site/dist/js/core.min.js"></script>

    <!-- META SITE -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content=" Гарантии "/>
    <meta name="keywords" content=" Гарантии "/>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon.ico"/>

    <!-- PUSH CREW -->
    <script>
        window.js_config = {'ip': '137.74.197.69', 'protocol': 'http'};
        (function (p, u, s, h) {
            p._pcq = p._pcq || [];
            p._pcq.push(['_currentTime', Date.now()]);
            s = u.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '../../cdn.pushcrew.com/js/22449da88acb353e5d5b5201d6316697.js';
            h = u.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document);
    </script>
</head>
<body>

<div class="wrapper">
    <header class="header">
        <div class="inner">
            <div class="logo">
                <a href="/">
                    <img src="../templates/site/dist/img/logo.png" alt="chip-cash.com">
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
                        $('#st-users').animateNumber({number: 2880, numberStep: csns}, 700);
                        $('#st-cases').animateNumber({number: 12515, numberStep: csns}, 1000);
                    });
                </script>
            </div>
            <div class="u-menu">
                <ul class="so-auth" id="uLogin"
                    data-ulogin="display=buttons;fields=first_name,last_name,email,verified_email;verify=1;optional=photo_big,bdate,sex;providers=vkontakte;hidden=;redirect_uri=http://chip-cash.com/auth">
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
                    <li><a href="{{url('/content')}}" class="eas"><span class="flaticon-gift"></span>Конкурс
                            "Ютюбер"</a></li>
                    <li><a href="{{url('faq')}}" class="eas">FAQ</a></li>
                    <li><a href="{{url('/guarantees')}}" class="eas active">Гарантии</a></li>
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


    <main class="content">
        <div class="inner">

            <h1 class="title">Гарантии</h1>
            <div class="cls"></div>
            <div class="static">
                <div class="cls">&nbsp;</div>
                <div class="b3 b3-1">
                    <h3><img src="../templates/site/dist/img/faq-b1.png" alt="Безопасно"> Безопасно</h3>
                    Мы используем 256 битный сертификат, который защищает ваши транзакции и авторизации на сайте. С нами
                    вы
                    будете в безопасности!
                </div>
                <div class="b3 b3-2">
                    <h3><img src="../templates/site/dist/img/faq-b2.png" alt="Честно"> Честно</h3>
                    Система chip-cash основана на билетном алгоритме, который определяет число с учетом коэффицента и
                    случайной
                    генерации числа.
                </div>
                <div class="b3 b3-3">
                    <h3><img src="../templates/site/dist/img/faq-b3.png" alt="Моментально"> Моментально</h3>
                    Вы получите свой выигрыш моментально на баланс системы. Также вы можете обменять цифровой товар на
                    эквивалент в деньгах - тоже моментально!
                </div>
                <div class="cls">&nbsp;</div>
                <div class="h-title">
                    <h1>Что мы имеем?</h1>
                </div>
                <div class="cls">&nbsp;</div>
                <div class="guarantee-list">
                    <div class="l">1</div>
                    <div class="r">
                        <h4>Персональный аттестат WebMoney</h4>
                        Персональный аттестат выдается участнику системы WebMoney Transfer после проверки его
                        персональных
                        (паспортных) данных одним из Регистраторов - участников партнерской программы Центра аттестации.
                    </div>
                </div>
                <div class="guarantee-list">
                    <div class="l">2</div>
                    <div class="r">
                        <h4>Идентифицированный Яндекс кошелек</h4>
                        Нами была проведена процедура идентификации в Яндексе. Наши персональные данные, включая
                        паспорт,
                        адрес прописки были нотариально завершены и переданы сотрудникам Яндекса.
                    </div>
                </div>
                <div class="guarantee-list">
                    <div class="l">3</div>
                    <div class="r">
                        <h4>Договоры с процессинговыми сервисами</h4>
                        Были подписаны и доставлены договоры, по проведению интернет транзакций на персонализированные
                        счета
                        FunCash. Данная процедура предусматривается многими процессинговыми сервисами и были пройдены
                        нами.
                    </div>
                </div>
                <div class="cls">&nbsp;</div>
                <h3 class="h3left">Остались сомнения?</h3>
                <div class="guarantee-note">
                    <div class="l"><span class="flaticon-cry">&nbsp;</span></div>
                    <div class="r">Уважаемый друг, мы никого не заставляем принять участие в проекте. Все вы делаете по
                        доброй воле и желанию. Нам важен сам факт поднятия проекта, так как и мы зарабатываем на этом.
                        Не
                        будем честными, не будем порядочными - не бывать проекту. Если уж вы очень сомнительный человек,
                        перейдите на главную, проследите в Live ленте призов последние выигрыши. Вы свободно можете
                        связаться с любым участником проекта (надеюсь будут добрые и ответят) и спросить лично, что к
                        чему.<br><br>Если у вас остались какие-то вопросы или недопонимания, свободно <a
                                href="support/index.html">пишите
                            нам</a>, будем рады ответить!
                    </div>
                </div>
                <div class="cls">&nbsp;</div>
            </div>
            <div class="cls"></div>

        </div>
    </main>


    <footer class="footer">
        <div class="inner">
            <div class="l">
                <ul>
                    <li><a href="{{url('/')}}" class="eas">Кейсы</a></li>
                    <li><a href="{{url('/faq')}}" class="eas">FAQ</a></li>
                    <li><a href="{{url('/guarantees')}}" class="eas active">Гарантии</a></li>
                    <li><a href="{{url('/reviews')}}" class="eas">Отзывы</a></li>
                    <li><a href="support.html" class="eas">Техническая поддержка</a></li>
                </ul>
                <div class="copy">
                    Copyright © 2016 chip-cash.com. Все права защищены.<br>Авторизуясь на сайте вы принимаете <a
                            href="terms.html">пользовательское соглашение</a><br>
                    По всем вопросам обращаться на email <a>support@chip-cash.com</a><br>

                </div>
            </div>
            <div class="r">
                <h5>Принимаем</h5>
                <div class="cls"></div>
                <div class="img">
                    <img src="../templates/site/dist/img/payment-methods.png" alt="Принимаем">
                </div>
                <div class="wm-box">
                    <a href="http://www.megastock.ru/" target="_blank">
                        <img src="../templates/site/dist/img/payment-wm-logo.png" alt="www.megastock.ru"
                             class="wm wm-1"/>
                    </a>
                    <a href="https://passport.webmoney.ru/asp/certview.asp?wmid=269471717715" target="_blank">
                        <img src="../templates/site/dist/img/payment-wm-attestat.png" class="wm"
                             alt="Здесь находится аттестат нашего WM идентификатора 269471717715"
                             style="position: absolute;bottom: 3px;left: -52px; width: 46px;"/>
                    </a>
                    <a href="http://www.free-kassa.ru/" target="_blank" rel="nofollow">
                        <img src="../templates/site/dist/img/payment-freekassa5e1f.png?v=2">
                    </a>
                </div>
                <div class="cls"></div>
            </div>
            <div class="cls"></div>
        </div>
    </footer>
</div>

<div id="withdrawal" class="popup">
    <div class="popup-container" style="top: 50%;">
        <form name="form-withdrawal" id="form-withdrawal" method="post">
            <div class="loader"><img src="../templates/site/dist/img/loader.svg" alt=""></div>
            <div class="eas close" onclick="Functions.PopupClose('#withdrawal');"><span class="flaticon-close"></span>
            </div>

            <h3>Вывод средств</h3>

            <div class="info"><b>Вывод средств осуществляется в течении 24 часов.</b><br>Однако, в среднем мы
                обрабатываем платежи значительно быстро и 3-5 раза в день.<br>Минимальная сумма к выводу <b>100р</b>
            </div>

            <div class="amount-l">
                <h4>Сумма</h4>
                <input type="text" name="amount" class="inp" maxlength="5" value="100"
                       onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57"
                       onchange="if (this.value < 100) this.value=100">
                <input type="hidden" name="type" id="withdrawal-type-field" value="webmoney">
            </div>

            <div class="amount-r amount-r2">
                <h4>Номер кошелька</h4>
                <input type="text" name="purse" class="inp PurseHolder" maxlength="16"
                       placeholder="Пример: R23884920195">
            </div>

            <div class="cls"></div>
            <h4>Куда хотите вывести?</h4>
            <div class="cls"></div>
            <span class="payment-method eas pm-webmoney active"
                  onclick="Functions.ChangePaymentMethod('webmoney','Пример: R23884920195');"><img
                        src="../templates/site/dist/img/payment-webmoney.svg" alt="WebMoney"><span
                        class="flaticon-check"></span></span>
            <span class="payment-method eas pm-yandex"
                  onclick="Functions.ChangePaymentMethod('yandex','Пример: 41003592336109');"><img
                        src="../templates/site/dist/img/payment-yandex.svg" alt="Яндекс Деньги"><span
                        class="flaticon-check"></span></span>
            <span class="payment-method eas pm-qiwi"
                  onclick="Functions.ChangePaymentMethod('qiwi','Пример: 7900123456');"><img
                        src="../templates/site/dist/img/payment-qiwi.svg" alt="QIWI"><span
                        class="flaticon-check"></span></span>

            <div class="cls"></div>

            <div class="foo foo-2">
                <input type="button" class="btn blue rounded" value="Вывести средства"
                       onclick="Functions.WithdrawNow();">
            </div>
        </form>
    </div>
    <div class="popup-overlay" onclick="Functions.PopupClose('#withdrawal');"></div>
</div>

<div id="deposit" class="popup">
    <div class="popup-container" style="top: -300%;">
        <div class="eas close" onclick="Functions.PopupClose('#deposit');"><span class="flaticon-close"></span></div>
        <h3>Пополнить баланс</h3>

        <div class="info"><b>Баланс начисляется моментально, но иногда процесс может занять 1-2 минуты</b><br>Если вы
            хотите пополнить баланс через VISA, MasterCard, другую банковскую карту, мобильного оператора, терминал и
            так далее, пожалуйста, выберите Interkassa или FreeKassa
        </div>

        <h4>Сумма</h4>

        <div class="cls"></div>

        <div class="amount-l">
            <form name="form-deposit" id="form-deposit" method="post" action="http://funcash.ru/payment/">
                <input type="text" name="amount" class="inp" maxlength="5" value="100"
                       onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57"
                       onchange="if (this.value < 10) this.value=10; if (this.value > 15000) this.value=15000">
            </form>
        </div>

        <div class="amount-r">
            Максимальная сумма за раз: <b>15000р</b><br>Минимальная сумма: <b>10р</b>
        </div>

        <div class="cls"></div>

        <h4>Выберите платежную систему</h4>

        <div class="cls"></div>

        <span class="payment-method eas pm-webmoney active" onclick="Functions.ChangePaymentMethod('webmoney');"><img
                    src="../templates/site/dist/img/payment-webmoney.svg" alt="Interkassa (WebMoney)"><span
                    class="flaticon-check"></span></span>
        <span class="payment-method eas pm-yandex" onclick="Functions.ChangePaymentMethod('yandex');"><img
                    src="../templates/site/dist/img/payment-yandex.svg" alt="Interkassa (Яндекс Деньги)"><span
                    class="flaticon-check"></span></span>
        <span class="payment-method eas pm-qiwi" onclick="Functions.ChangePaymentMethod('qiwi');"><img
                    src="../templates/site/dist/img/payment-qiwi.svg" alt="Interkassa (QIWI)"><span
                    class="flaticon-check"></span></span>
        <span class="payment-method eas pm-interkassa" onclick="Functions.ChangePaymentMethod('interkassa');"><img
                    src="../templates/site/dist/img/payment-interkassa.svg" alt="Interkassa"><span
                    class="flaticon-check"></span></span>

        <div class="cls"></div>

        <div class="foo">
            <input type="button" class="btn orange rounded" value="Пополнить баланс" onclick="Functions.DepositNow();">
        </div>
    </div>
    <div class="popup-overlay" onclick="Functions.PopupClose('#deposit');"></div>
</div>

<!-- VK BUTTON -->
<a class="vk-button" href="http://vk.com/chip-cash.com" rel="nofollow" target="_blank">
    <span class="flaticon-soc-vk"></span> Мы Вконтакте
</a>

</body>
<script language="javascript">
    VK.init({
        apiId: 5707736
    });
    function authInfo(response) {
        if (response.session) {
            var id = response.session.mid;
        }
        VK.Api.call('users.get', {uids: id, fields: 'sex,photo_200_orig,email'}, function (r) {
            if (r.response) {
                console.log(r.response);
                var first = r.response[0].first_name;
                var last = r.response[0].last_name;
                var full = first + ' ' + last;
                var id = r.response[0].uid;
                var photo = r.response[0].photo_200_orig;
                console.log(photo);

            }
            $.ajax({
                method: 'POST',
                url: '{{url('login/auth')}}',
                data: {id: id, photo: photo, full_name: full},
                success: function (response) {

                }
            });
        });
    }
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>
</html>
