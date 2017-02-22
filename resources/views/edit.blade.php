@extends('layouts.app')

@section('header')
    <title>Edit Note</title>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Note of {{ Auth::user()->name }}</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="/edit_post/{{$notes->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="content" class="col-md-4 control-label">Update Note</label>

                                <div class="col-md-6">

                                    <input id="email" type="text" value="{{$notes->task}}" class="form-control"
                                           name="content" required
                                           autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" name="UpdatePost" class="btn btn-primary">
                                        Update Note
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
