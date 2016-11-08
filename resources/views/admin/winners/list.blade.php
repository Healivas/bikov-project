@extends('layouts.admin')


@section('content')
    <div id="legend">
        <legend class=""> Победители </legend>
    </div>
    <div class="row col-md-10">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Дата</th>
                <th>Пользователь</th>
                <th>Сумма</th>
                {{--<th>Процент</th>--}}
                {{--<th>Функции</th>--}}
            </tr>
            </thead>
            @foreach($winners as $win)
                <tbody>
                <tr>
                    <th scope="row">{{$win->id}}</th>
                    <td>{{$win->created_at->format('d/m/Y \в H:i')}}</td>
                    <td>{{$win->user->name}}</td>
                    <td>{{$win->gift->cash}} pуб.</td>
                </tr>
                </tbody>
            @endforeach
        </table>
        </fieldset>
    </div>

@stop
