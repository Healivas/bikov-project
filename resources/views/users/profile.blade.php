@extends('layouts.master_profile')



@section('content')
    <main class="content">
        <div class="inner">

            <div class="account">

                <div class="userbox">
                    <div class="l">
                        <img src="{{$user->photo}}" alt="Sarchev Kirill">
                        <h1>{{$user->name}}
                            <a href="https://vk.com/id298587899" target="_blank"> <span
                                        class="flaticon-soc-vk"></span> </a></h1>
                        <div class="u-cases"><span class="flaticon-case"></span> Кейсы: <span
                                    class="n">{{$user->cases->count()}}</span></div>
                        <div class="u-money"><span class="flaticon-money"></span> Выигрыш: <span
                                    class="n">{{$user->balance}}.00 p</span></div>
                    </div>
                    <div class="r">
                        <a href="/" class="btn darkblue"><span class="flaticon-arrow-left"></span> назад к кейсам</a>
                    </div>
                    <div class="cls"></div>
                </div>

                <div class="seperator"></div>

                <h3>Последние 30 призов</h3>

                <div class="cls"></div>
                <div class="history-cases">
                    @foreach($user->gifts as $gift)
                        {{--<div class="cls"></div>--}}
                        <div class="history-case">
                            <a href="{{url('case/'.$gift->gift->cases->id)}}" class="eas case-url">Кейс
                                №{{$gift->gift->cases->id}}</a>
                            <div class="status"><span class="flaticon-check"></span></div>
                            <div class="coin silver">
                                <img src="../templates/site/dist/img/cases/coin-5.svg" alt="5 рублей">
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-10.svg" alt="10 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-5.svg" alt="5 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-1.svg" alt="1 рубль">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-25.svg" alt="25 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-1.svg" alt="1 рубль">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/2.html" class="eas case-url">Кейс №2</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-20.svg" alt="20 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-10.svg" alt="10 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-1.svg" alt="1 рубль">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-40.svg" alt="40 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-35.svg" alt="35 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-10.svg" alt="10 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-1.svg" alt="1 рубль">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/1.html" class="eas case-url">Кейс №1</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-30.svg" alt="30 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/8.html" class="eas case-url">Кейс №8</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-2000.svg" alt="2000 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-400.svg" alt="400 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-40.svg" alt="40 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-80.svg" alt="80 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-250.svg" alt="250 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-300.svg" alt="300 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-60.svg" alt="60 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-300.svg" alt="300 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-60.svg" alt="60 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-90.svg" alt="90 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-40.svg" alt="40 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/5.html" class="eas case-url">Кейс №5</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-100.svg" alt="100 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/4.html" class="eas case-url">Кейс №4</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-500.svg" alt="500 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/2.html" class="eas case-url">Кейс №2</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-100.svg" alt="100 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/2.html" class="eas case-url">Кейс №2</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-15.svg" alt="15 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="history-case">--}}
                    {{--<a href="../case/2.html" class="eas case-url">Кейс №2</a>--}}
                    {{--<div class="status"><span class="flaticon-check"></span></div>--}}
                    {{--<div class="coin silver">--}}
                    {{--<img src="../templates/site/dist/img/cases/coin-40.svg" alt="40 рублей">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="cls"></div>
                </div>
            </div>

            <div class="seperator"></div>

        </div>
    </main>

@stop
