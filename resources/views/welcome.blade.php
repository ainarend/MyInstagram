@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ config('app.name') }}</h1></div>

                <div class="panel-body">
                    <ul>
                        <li><a href="{{ url('/feed') }}">View your feed</a></li>
                        <li><a href="{{ url('/user') }}/{{Auth::user()->id}}">View your profile</a></li>
                    </ul>

                    <h3>Maybe they are your friends?</h3>
                    <ul>
                    @foreach($friends as $friend)
                        <li><a href="{{ url('/user/'.$friend->id) }}">{{ $friend->name }}</a></li>
                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
