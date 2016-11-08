@extends('layouts.master_case')


@section('content')

    <main class="content">
        <div class="inner">


            <div class="case-page">
                <a href="/" class="btn darkblue backtocases">
                    <span class="flaticon-arrow-left"></span> Другие кейсы
                </a>

                <div class="spin-won">
                    <h3>Поздравляем!</h3>
                    <h5>Вы выиграли <span id="spin-win-name">1000р</span></h5>

                    <h4>
                        <a href="../account/index.html">Перейдите в аккаунт</a>, чтобы получить приз
                    </h4>

                    <div id="img" class="icon">
                        {{--<img src="../uploads/cases/coin-.html" alt="1000" id="spin-win-icon">--}}
                    </div>

                    <div class="button">
                        <input type="button" class="btn rounded blue" value="Выиграть еще"
                               onclick="Functions.ClearAnimation();">
                    </div>

                    <div class="c"><a href="/" class="eas">Другие кейсы</a></div>
                    <div class="a-1"></div>
                    <div class="a-2"></div>
                    <div class="a-3"></div>
                    <div class="a-4"></div>
                </div>

                <div class="spin">
                    <div class="name">
                        <h1>Кейс "{{$case->name}}"</h1>
                        <div class="desc">Содержит от <b>1р</b> до <b>50р</b></div>


                        <div class="payed">выдано 151,988р</div>
                    </div>
                    <div class="spin-line"></div>
                    <div class="spin-inner">
                        <div class="roulette">
                            @foreach($case->gifts()->latest('id')->get() as $gift)
                                <img src="../templates/site/dist/img/cases/coin-{{$gift->cash}}.svg"
                                     alt="Призовая обложка">
                            @endforeach
                        </div>
                    </div>
                    <div class="chance">
                        <h3>Увеличитель шанса</h3>
                        <div class="c">

                            @foreach($case->chances as $chance)
                                <p>
                                <div class="lcs_wrap">
                                    <input id="check" type="checkbox" name="chance" value="{{$chance->raise}}"
                                           class="lcs_check"
                                           data-lcs="1">
                                    <div class="lcs_switch  lcs_off lcs_checkbox_switch">
                                        <div class="lcs_cursor"></div>
                                        <div class="lcs_label lcs_label_on">ВКЛ</div>
                                        <div class="lcs_label lcs_label_off">ВЫКЛ</div>
                                    </div>
                                </div>
                                +{{$chance->chance}}% к шансу за <b>{{$chance->raise}}</b>
                                </p>
                            @endforeach

                        </div>
                    </div>
                    <div class="button">
                        <script>
                            window.spin_chance = 0;
                            window.spin_amount = '{{$case->price}}';
                        </script>
                        <button id="button" onclick="info()" class="btn blue rounded">
                            @if(Auth::check() && ( Auth::user()->balance >= $case->price  ) )
                                Открыть кейс за <span><b id="spin-amount">{{$case->price}}</b><span
                                            class="flaticon-ruble"></span></span>
                            @else
                                Недостаточно средств
                            @endif
                        </button>
                        <button id="show" class="btn blue rounded">
                            @if(Auth::check())
                                Пополнить свой счет
                            @else
                                Пройдите авторизацию
                            @endif
                        </button>
                        //доработать передвод
                        @if(Auth::check())
                            <form style="display:none" id="payment" name="payment" method="post"
                                  action="https://sci.interkassa.com/"
                                  enctype="utf-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="add" id="add" value="0">
                                <input type="hidden" name="total" id="total" value="">

                                <input type="hidden" name="ik_int" value="web"/>
                                <input type="hidden" name="ik_am_t" value="payway"/>

                                <input type="hidden" name="ik_pw_via " value="test_interkassa_test_xts">

                                <input type="hidden" name="ik_co_id" value="581de75f3b1eaf203c8b4573"/>
                                <input type="hidden" name="ik_pm_no" value="{{$case->id}}"/>
                                <input id="ik_am" type="hidden" name="ik_am" value="{{$case->price}}.00"/>
                                <input type="hidden" name="ik_cur" value="RUB"/>
                                <input type="hidden" name="ik_desc" value="Кейс '{{$case->name}}' "/>
                                <input id="summa" type="text" name="ik_x_sum" value="" placeholder="Сумма пополнения"/>

                                <input type="hidden" name="ik_suc_u" value="http://chip-cash.com/case/{{$case->id}}"/>
                                <input type="hidden" name="ik_suc_m" value="get"/>
                                <input type="hidden" name="ik_fal_u" value="http://chip-cash.com/reviews"/>
                                <input type="hidden" name="ik_fal_m" value="get"/>
                                <input type="hidden" name="ik_pnd_u"
                                       value="http://chip-cash.com/case/{{$case->id}}/wait"/>
                                <input type="hidden" name="ik_pnd_m" value="get"/>
                                <input id="pay" type="submit" value="Pay">

                            </form>
                        @endif
                    </div>
                    <div class="cls"></div>
                    <script>
                        $('.lcs_switch').on('click', function () {
                            if ($(this).parent().find("div:first").hasClass('lcs_off')) {
                                var v = $(this).parent().find('input').val();
                                var add = $('#add').val(v);
                            } else {
                                $('#add').val('0');
                            }
                        });
                    </script>
                </div>

                <div class="cls"></div>

                <h3 class="title case-page-title">Предметы, которые могут вам выпасть из этого кейса</h3>

                <div class="cls"></div>

                <div class="history-cases MarginTop-40">
                    @foreach($case->gifts as $gift)
                        <div class="history-case">
                            <div class="coin gold">
                                <img src="../templates/site/dist/img/cases/coin-{{$gift->cash}}.svg"
                                     alt="{{$gift->cash}} руб">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="cls"></div>
            </div>

        </div>
    </main>
    <script>
        $('#show').on('click', function () {
            var pay = $('#payment');
            pay.removeAttr('style');
            $(this).hide();
        });
    </script>
    <script>
        $('#pay').on('click', function () {
            var s = $('#summa').val();
            $('#ik_am').val(s + '.00');
        });
    </script>
    <script>
        function info() {
            var price = $('#spin-amount').text();
            $.ajax({
                method: 'post',
                url: '{{url('try/chance')}}',
                data: {id: '{{$case->id}}', price: price},
                success: function (response) {
                    if (!response.balance) {
                        $('.spin-won').show();
                        $('#spin-win-name').text(response.won + 'p');
                        $('#img').append('<img src="../uploads/cases/coin-' + response.won + '.html" alt="' + response.won + '" id="spin-win-icon">');
                        $('#show').hide();
                        $('#button').hide();
                        $('#payment').hide();

                    }
                }
            });
        }
    </script>
@stop
