@extends('layouts.admin')

@section('content')
    <div id="legend">
        <legend class="">Предметы Кейса "{{$case->name}}"</legend>
    </div>
    <a class="btn btn-primary" href="{{url('admin/case/'.$case->id.'/create/gift')}}"> Создать приз</a>
    <div class="row col-md-10">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Приз</th>
                {{--<th>Case</th>--}}
                <th>Functions</th>
            </tr>
            </thead>
            @foreach($case->gifts as $gift)
                <tbody>
                <tr>
                    <th scope="row">{{$gift->id}}</th>
                    <td>{{$gift->cash}} p.</td>
                    {{--<td>{{$gift->cases->name}}</td>--}}
                    <td>
                        <a class="btn btn-success btn-xs" href="{{url('admin/edit/gift/'. $gift->id)}}">
                            Редактировать
                        </a>
                        <a class="btn btn-danger  btn-xs" href="{{url('admin/delete/gift/'. $gift->id)}}">
                            Удалить
                        </a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        </fieldset>
    </div>

@stop
