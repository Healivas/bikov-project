@extends('layouts.admin')



@section('content')
    <div id="legend">
        <legend class=""> Шансы кейса "{{$case->name}}"</legend>
    </div>
    <a class="btn btn-primary" href="{{url('admin/case/'.$case->id.'/create/chance')}}"> Создать шанс</a>
    <div class="row col-md-10">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Шанс</th>
                <th>Цена</th>
                <th>Функции</th>
            </tr>
            </thead>
            @foreach($chances as $chance)
                <tbody>
                <tr>
                    <th scope="row">{{$chance->id}}</th>
                    <td>{{$chance->chance}} %</td>
                    <td>{{$chance->raise}} pуб.</td>
                    <td>
                        <a class="btn btn-success btn-xs" href="{{url('admin/case/edit/chance/'. $chance->id)}}">
                            Редактировать
                        </a>
                        {{--<a class="btn btn-danger  btn-xs" href="{{url('admin/delete/chance/'. $chance->id)}}">--}}
                            {{--Удалить--}}
                        {{--</a>--}}
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        </fieldset>
    </div>

@stop
