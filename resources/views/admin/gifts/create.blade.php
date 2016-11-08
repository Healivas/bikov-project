@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <div id="legend">
                        <legend class="">Создание приза</legend>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="control-group">
                        <label class="control-label" for="username">Приз</label>
                        <div class="controls">
                            <input type="text" id="cash" name="cash" placeholder="" class="input-xlarge"> руб.
                        </div>
                    </div>
                    {{--<select name="case_id" id="case_id" class="form-control">--}}
                        {{--@foreach( $cases as $case)--}}
                            {{--<option value="{{$case->id}}">{{$case->name}}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success">Создать приз</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@stop
