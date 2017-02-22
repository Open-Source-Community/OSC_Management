@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="position" class="col-md-4 control-label">Your Position</label>

                            <div class="col-md-6">

                                <h5><input id="position" type="radio" name="position" value="Head" required autofocus/> Head
                                    <input id="position" type="radio" name="position" value="Member" required autofocus/> Member
                                </h5>
                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('committe') ? ' has-error' : '' }}">
                            <label for="committe" class="col-md-4 control-label">Your Committe</label>

                            <div class="col-md-6">

                                <h5><input id="committe" type="radio" name="committe" value="IT" required autofocus/> IT
                                <input id="committe" type="radio" name="committe" value="Projects" required autofocus/> Projects
                                <input id="committe" type="radio" name="committe" value="HR" required autofocus/> HR
                                <input id="committe" type="radio" name="committe" value="PR" required autofocus/> PR
                                <input id="committe" type="radio" name="committe" value="LR" required autofocus/> LR
                                <input id="committe" type="radio" name="committe" value="Linux" required autofocus/> Linux</h5>
                                <h5><input id="committe" type="radio" name="committe" value="Laravel" required autofocus/> Laravel
                                <input id="committe" type="radio" name="committe" value="Blender" required autofocus/> Blender
                                <input id="committe" type="radio" name="committe" value="CCC" required autofocus/> CCC
                                <input id="committe" type="radio" name="committe" value="FR" required autofocus/> FR
                                <input id="committe" type="radio" name="committe" value="EnglishHeros" required autofocus/> English Heros</5>

                                @if ($errors->has('committe'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('committe') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
