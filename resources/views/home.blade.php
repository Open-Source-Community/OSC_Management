@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Tasks</div>
                    <div class="panel-body">

                        @foreach($user_data as $post)
                            <p>
                                {{ $post->task_member }} is required ( {{$post->task}} ) Created Task
                                in {{$post->created_at}}

                                @if($post->user_id == Auth::user()->id)

                                    <a href="tasks/{{ $post->id }}/delete" class="pull-right" style="margin-left: 10px">Delete</a>
                                    <a href="tasks/{{ $post->id }}/edit" class="pull-right"> Edit </a>

                                @endif

                                @if(Auth::user()->position == 'Member' && Auth::user()->name == $post->task_member)

                                    {{--<a href="/aa" class="pull-right" onclick="{{action('HomeController@insert_done')}}"--}}

                                    <a href="/inprogress/{{$post->id}}/{{$post->task_member}}/{{$post->task}}"
                                       class="pull-right">
                                        InProgress</a>

                            </p>

                            @endif

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->position == 'Head' || Auth::user()->position == 'ViceHead')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ Auth::user()->name }}</div>

                        <div class="panel-body">

                            <form class="form-horizontal" role="form" method="post" action="/add">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Add New Tasks</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" name="content" required
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
                                        <select name="task_to_member">
                                            @foreach($user_data2 as $post)

                                                @if($post->position == 'Member')

                                                    <option value="{{$post->name}}">{{$post->name}}</option>

                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" name="AddPost" class="btn btn-primary">
                                            Add Task
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">In Progress</div>

                    <div class="panel-body">
                        @foreach($user_data3 as $post)

                            <p>
                                {{ $post->member }} in progress {{$post->taskk}}

                                @if((Auth::user()->position == 'Head' || Auth::user()->position == 'ViceHead') && $post->user_committe == Auth::user()->committe)

                                    <a href="tasks_inprogress/{{ $post->id }}/delete" class="pull-right">Delete</a>

                                @endif

                                @if(Auth::user()->position == 'Member' && Auth::user()->name == $post->member)

                                    <a href="/done/{{$post->id}}/{{$post->member}}/{{$post->taskk}}" class="pull-right">
                                        Done</a>
                                @endif
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Done</div>

                    <div class="panel-body">

                        @foreach($user_data4 as $post)

                            <p>
                                {{ $post->member }} done {{$post->taskk}}

                                @if((Auth::user()->position == 'Head' || Auth::user()->position == 'ViceHead') && $post->user_committe == Auth::user()->committe)

                                    <a href="tasks_done/{{ $post->id }}/delete" class="pull-right">Delete</a>

                                @endif
                            </p>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
