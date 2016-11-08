@extends('layouts.admin')

@section('content')
    <div id="legend">
        <legend class=""> Кейсы</legend>
    </div>
    <a class="btn btn-primary" href="{{url('admin/case/create')}}"> Создать кейс</a>
    <div class="row col-md-10">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Имя</th>
                <th>Цена</th>
                <th>Процент</th>
                <th>Функции</th>
            </tr>
            </thead>
            @foreach($cases as $case)
                <tbody>
                <tr>
                    <th scope="row">{{$case->id}}</th>
                    <td>{{$case->name}}</td>
                    <td>{{$case->price}} pуб.</td>
                    <td>{{$case->percent}} %</td>
                    <td>
                        <a class="btn btn-success btn-xs" href="{{url('admin/edit/case/'. $case->id)}}">
                            Редактировать
                        </a>
                        <a class="btn btn-danger  btn-xs" href="{{url('admin/delete/case/'. $case->id)}}">
                            Удалить
                        </a>
                        <a class="btn btn-warning btn-xs" href="{{url('admin/case/'.$case->id)}}">
                            Предметы
                        </a>
                        <a class="btn btn-info  btn-xs" href="{{url('admin/case/'.$case->id.'/chances')}}">
                            Шансы
                        </a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        </fieldset>
    </div>

@stop
