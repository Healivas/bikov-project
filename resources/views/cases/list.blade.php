@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="inner">

            <div class="cls"></div>
            <div class="cls"></div>
            <div class="cases">
                <div class="cls"></div>
                @include('advertisement.index')

                @foreach($cases as $case)
                    <div class="case-grid" data-case-pricef="10" data-case-pricet="100" data-case-status="1"
                         data-case-type="1">
                        <div class="case ">
                            <a href="{{url('case/'.$case->id)}}" class="mobile-url">Кейс "{{$case->name}}"</a>

                            <div class="hover eas">
                                <div class="light"><a href="{{url('case/'.$case->id)}}" class="btn orange rounded eas">Кейс
                                        "{{$case->name}}"</a>
                                </div>
                            </div>

                            <div class="price">
                                <b>стоимость</b><s>20 <span class="flaticon-ruble"></span></s> {{$case->price}} <span
                                        class="flaticon-ruble"></span>
                            </div>

                            <div class="img">
                                <div class="prize">
                                    @if($case->price == 15)
                                        <img src="templates/site/dist/img/cases/coin-50.svg"
                                             alt="Призовая обложка">
                                    @elseif($case->price == 40)
                                        <img src="templates/site/dist/img/cases/coin-100.svg"
                                             alt="Призовая обложка">
                                    @elseif($case->price == 60 )
                                        <img src="templates/site/dist/img/cases/coin-250.svg" alt="Призовая обложка">
                                    @elseif($case->price == 90 )
                                        <img src="templates/site/dist/img/cases/coin-500.svg" alt="Призовая обложка">
                                    @elseif($case->price == 250 )
                                        <img src="templates/site/dist/img/cases/coin-700.svg" alt="Призовая обложка">
                                    @elseif($case->price == 400 )
                                        <img src="templates/site/dist/img/cases/coin-1000.svg" alt="Призовая обложка">
                                    @elseif($case->price == 500 )
                                        <img src="templates/site/dist/img/cases/coin-1500.svg" alt="Призовая обложка">
                                    @elseif($case->price == 700 )
                                        <img src="templates/site/dist/img/cases/coin-2500.svg" alt="Призовая обложка">
                                    @elseif($case->price == 1000 )
                                        <img src="templates/site/dist/img/cases/coin-3500.svg" alt="Призовая обложка">
                                    @elseif($case->price == 1500 )
                                        <img src="templates/site/dist/img/cases/coin-6000.svg" alt="Призовая обложка">
                                    @elseif($case->price == 3000 )
                                        <img src="templates/site/dist/img/cases/coin-15000.svg" alt="Призовая обложка">
                                    @elseif($case->price == 7000 )
                                        <img src="templates/site/dist/img/cases/coin-30000.svg" alt="Призовая обложка">
                                    @endif

                                </div>
                                <div class="cover">
                                    <img src="templates/site/dist/img/cases/case-cover.png"
                                         alt="Призовая обложка">
                                </div>
                            </div>

                            <div class="payed">

                                <div class="right">выдано 151,988<span class="flaticon-ruble ruble-small"></span></div>

                                <div class="cls"></div>
                            </div>
                            <div class="case-footer">
                                <a href="{{url('case/'.$case->id)}}">Содержит от <b>1<span
                                                class="flaticon-ruble ruble-small"></span></b>
                                    до <b>50<span class="flaticon-ruble ruble-small"></span></b></a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="infobox case-empty">
                    <h3><span class='flaticon-cry'></span> Ой ой ой..</h3>По данным параметрам ничего не найдено<br>Хотите
                    предложить новый формат кейса? <a href='pages/support/index.html'>Напишите нам</a>!
                </div>

                <div class="cls"></div>
                <div style="display:none;">
                    <script type="text/javascript">
                        document.write("<a href='//www.liveinternet.ru/click' " +
                                "target=_blank><img src='//counter.yadro.ru/hit?t11.6;r" +
                                escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
                                ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                                        screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                                ";" + Math.random() +
                                "' alt='' title='LiveInternet: показано число просмотров за 24" +
                                " часа, посетителей за 24 часа и за сегодня' " +
                                "border='0' width='88' height='31'><\/a>")
                    </script>
                </div>
                <div id="seo">
                    <center><h1>Кейсы с деньгами</h1>
                        <a href="chip-cash.com">chip-cash.com</a> - Сервис для веселого заработка денег. На нашем
                        проекте Вы
                        имеете отличные шансы подзаработать! </br>
                        Никто не гарантирует 100% шанс, но вероятность победы достаточно велика. </br>
                        А так же, Вы можете заработать с приглашения своих друзей. Для этого авторизуйтесь и ознакомтесь
                        с
                        разделом партнерская программа в <a href="account">личном кабинете</a>. </br>
                        </br><h2>Пора испытать удачу! Желаем веселых побед!</h2></center>
                </div>
            </div>
        </div>
    </main>

@stop
