@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">

            @include('partials.picLayout')

            <div class="panel panel-default" style="margin-top: 20px;">
                <div class="panel-heading">Stats</div>

                <div class="panel-body">
                    <p>Likes: 0</p>
                </div>

            </div>

            <div class="panel panel-default" style="margin-top: 20px;">
                <div class="panel-heading">Comments</div>

                <div class="panel-body">
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
