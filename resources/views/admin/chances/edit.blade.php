@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <div id="legend">
                        <legend class="">Редактировать  шанс</legend>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="control-group">
                        <label class="control-label" for="username">Шанс в %</label>
                        <div class="controls">
                            <input type="text" id="chance" name="chance" placeholder="" class="input-xlarge"
                                   value="{{$chance->chance}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Цена</label>
                        <div class="controls">
                            <input type="text" id="price" name="price" placeholder="" class="input-xlarge"
                                   value="{{$chance->raise}}"> руб.
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button class="btn btn-success">Редактировать </button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@stop
