@extends('layouts.app')

@section('header')
    <title>{{ Auth::user()->name }}</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Data</div>
                    <div class="panel-body">

                        <p> Your ID : {{$data->id}}</p>
                        <p> Your Name : {{$data->name}}</p>
                        <p> Your Email : {{$data->email}}</p>
                        <p> Your Committe : {{$data->committe}}</p>
                        <p> Your Position in OSC : {{$data->position}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
