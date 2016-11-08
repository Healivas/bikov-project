@extends('layouts.admin')

@section('content')
    <div id="legend">
        <legend class=""> Пользователи</legend>
    </div>
    {{--<a class="btn btn-primary" href="{{url('admin/case/create')}}"> Создать кейс</a>--}}
    <div class="row col-md-10">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Имя</th>
                <th>Логин</th>
                <th>Баланс</th>
                {{--<th>Функции</th>--}}
            </tr>
            </thead>
            @foreach($users as $user)
                <tbody>
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td><a href="{{url('admin/user/'.$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->vk_id}}</td>
                    <td>{{$user->balance}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
        </fieldset>
    </div>

@stop
