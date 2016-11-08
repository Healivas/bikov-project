<!DOCTYPE html>
<html lang="ru">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8"/>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="interkassa-verification" content="1a3426e2321481351474ea1e47ce6c74"/>
    <script src="https://vk.com/js/api/openapi.js?136" type="text/javascript"></script>
    {{--<script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>--}}

    <title>chip-cash.com - Веселая прибыль!</title>

    <link rel="stylesheet" href="templates/site/dist/css/style.min.css"/>

    <!-- SITE SCRIPTS -->
    <script type="text/javascript" src="templates/site/vendor/jquery-2.2.4.min.js"></script>
    {{--<script type="text/javascript" src="templates/site/vendor/socket.io-1.4.5.js"></script>--}}
    {{--<script type="text/javascript" src="templates/site/vendor/smoke.min.js"></script>--}}
    <script type="text/javascript" src="templates/site/vendor/animate.min.js"></script>
    <script type="text/javascript" src="templates/site/vendor/switch.min.js"></script>
    <script type="text/javascript" src="templates/site/vendor/roulette.min.js"></script>

    <!-- SITE AUTH -->
    <script type="text/javascript" src="../ulogin.ru/js/ulogin.js"></script>

    <!-- MAIN SCRIPT SITE -->
    <script type="text/javascript" src="templates/site/dist/js/core.min.js"></script>

    <!-- META SITE -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content=" chip-cash.com - Веселая прибыль! "/>
    <meta name="keywords" content=" chip-cash.com,открытие кейсов,призовые кейсы,дропы,кейсы "/>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!-- FAVICON -->
{{--<link rel="shortcut icon" href="favicon.ico"/>--}}

<!-- PUSH CREW -->
    <script>
        window.js_config = {'ip': '137.74.197.69', 'protocol': 'http'};
        (function (p, u, s, h) {
            p._pcq = p._pcq || [];
            p._pcq.push(['_currentTime', Date.now()]);
            s = u.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '../cdn.pushcrew.com/js/22449da88acb353e5d5b5201d6316697.js';
            h = u.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document);
    </script>
</head>
<body>
@include('header.header')
@yield('content')
<div class="top-users">
    <div class="inner">
        <h3>Самые везучие</h3>
        <div class="cls"></div>
        <div class="top-3">
            @foreach($users as $user)
                <div class="t2">
                    <div class="img">
                        <a href="{{url('profile/'.$user->id)}}">
                            <img src="{{$user->photo}}"
                                 alt="Sarchev Kirill">
                            <img src="../templates/site/dist/img/top-2-3.png" alt="cover" class="back eas">
                        </a>
                    </div>
                    <div class="u-cases"><span class="flaticon-case"></span> {{$user->cases->count()}}</div>
                    <div class="u-money"><span class="flaticon-money"></span> 29,440<span
                                class="flaticon-ruble small-icon"></span></div>
                </div>
            @endforeach

            {{--<div class="t1">--}}
            {{--<div class="img">--}}
            {{--<a href="profile/2663.html">--}}
            {{--<img src="https://pp.vk.me/c836630/v836630323/28ab/XxGr4vPxJuU.jpg"--}}
            {{--alt="Koroleva Nastya">--}}
            {{--<img src="templates/site/dist/img/top-1.png" alt="cover" class="back eas">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="u-cases"><span class="flaticon-case"></span> 26</div>--}}
            {{--<div class="u-money"><span class="flaticon-money"></span> 177,300<span--}}
            {{--class="flaticon-ruble small-icon"></span></div>--}}
            {{--<div class="back-shadow"></div>--}}
            {{--</div>--}}

            {{--<div class="t3">--}}
            {{--<div class="img">--}}
            {{--<a href="profile/717.html">--}}
            {{--<img src="https://pp.vk.me/c615722/v615722956/94c4/qTnwbVJ2-wA.jpg"--}}
            {{--alt="Слепнёв Дима">--}}
            {{--<img src="templates/site/dist/img/top-2-3.png" alt="cover" class="back eas">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="u-cases"><span class="flaticon-case"></span> 656</div>--}}
            {{--<div class="u-money"><span class="flaticon-money"></span> 19,844<span--}}
            {{--class="flaticon-ruble small-icon"></span></div>--}}
            {{--</div>--}}

            <div class="cls"></div>
        </div>


        <div class="top-10">
        </div>
        <div class="cls"></div>
    </div>
</div>

<footer class="footer">
    <div class="inner">
        <div class="l">
            <ul>
                <li><a href="{{url('/')}}" class="eas active">Кейсы</a></li>
                <li><a href="{{url('/faq')}}" class="eas">FAQ</a></li>
                <li><a href="{{url('/guarantees')}}" class="eas">Гарантии</a></li>
                <li><a href="{{url('/reviews')}}" class="eas">Отзывы</a></li>
                <li><a href="pages/support.html" class="eas">Техническая поддержка</a></li>
            </ul>
            <div class="copy">
                Copyright © 2016 chip-cash.com. Все права защищены.<br>Авторизуясь на сайте вы принимаете <a
                        href="pages/terms.html">пользовательское соглашение</a><br>
                По всем вопросам обращаться на email <a>support@chip-cash.com</a><br>

            </div>
        </div>
        <div class="r">
            <h5>Принимаем</h5>
            <div class="cls"></div>
            <div class="img">
                <img src="templates/site/dist/img/payment-methods.png" alt="Принимаем">
            </div>
            <div class="wm-box">
                <a href="http://www.megastock.ru/" target="_blank">
                    <img src="templates/site/dist/img/payment-wm-logo.png" alt="www.megastock.ru" class="wm wm-1"/>
                </a>
                <a href="https://passport.webmoney.ru/asp/certview.asp?wmid=269471717715" target="_blank">
                    <img src="templates/site/dist/img/payment-wm-attestat.png" class="wm"
                         alt="Здесь находится аттестат нашего WM идентификатора 269471717715"
                         style="position: absolute;bottom: 3px;left: -52px; width: 46px;"/>
                </a>
                <a href="http://www.free-kassa.ru/" target="_blank" rel="nofollow">
                    <img src="templates/site/dist/img/payment-freekassa5e1f.png?v=2">
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
            <div class="loader"><img src="templates/site/dist/img/loader.svg" alt=""></div>
            <div class="eas close" onclick="Functions.PopupClose('#withdrawal');"><span
                        class="flaticon-close"></span></div>

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
                        src="templates/site/dist/img/payment-webmoney.svg" alt="WebMoney"><span
                        class="flaticon-check"></span></span>
            <span class="payment-method eas pm-yandex"
                  onclick="Functions.ChangePaymentMethod('yandex','Пример: 41003592336109');"><img
                        src="templates/site/dist/img/payment-yandex.svg" alt="Яндекс Деньги"><span
                        class="flaticon-check"></span></span>
            <span class="payment-method eas pm-qiwi"
                  onclick="Functions.ChangePaymentMethod('qiwi','Пример: 7900123456');"><img
                        src="templates/site/dist/img/payment-qiwi.svg" alt="QIWI"><span
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
        <div class="eas close" onclick="Functions.PopupClose('#deposit');"><span class="flaticon-close"></span>
        </div>
        <h3>Пополнить баланс</h3>

        <div class="info"><b>Баланс начисляется моментально, но иногда процесс может занять 1-2 минуты</b><br>Если
            вы хотите пополнить баланс через VISA, MasterCard, другую банковскую карту, мобильного оператора,
            терминал и так далее, пожалуйста, выберите Interkassa или FreeKassa
        </div>

        <h4>Сумма</h4>

        <div class="cls"></div>

        <div class="amount-l">
            <form name="form-deposit" id="form-deposit" method="post" action="http://chip-cash.com/payment/">
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

        <span class="payment-method eas pm-webmoney active"
              onclick="Functions.ChangePaymentMethod('webmoney');"><img
                    src="templates/site/dist/img/payment-webmoney.svg" alt="Interkassa (WebMoney)"><span
                    class="flaticon-check"></span></span>
        <span class="payment-method eas pm-yandex" onclick="Functions.ChangePaymentMethod('yandex');"><img
                    src="templates/site/dist/img/payment-yandex.svg" alt="Interkassa (Яндекс Деньги)"><span
                    class="flaticon-check"></span></span>
        <span class="payment-method eas pm-qiwi" onclick="Functions.ChangePaymentMethod('qiwi');"><img
                    src="templates/site/dist/img/payment-qiwi.svg" alt="Interkassa (QIWI)"><span
                    class="flaticon-check"></span></span>
        <span class="payment-method eas pm-interkassa" onclick="Functions.ChangePaymentMethod('interkassa');"><img
                    src="templates/site/dist/img/payment-interkassa.svg" alt="Interkassa"><span
                    class="flaticon-check"></span></span>

        <div class="cls"></div>

        <div class="foo">
            <input type="button" class="btn orange rounded" value="Пополнить баланс"
                   onclick="Functions.DepositNow();">
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
