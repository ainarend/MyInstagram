@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Feed</div>

                <div class="panel-body">

                    @include('partials.uploadPic')

                    <hr />

                    @include('partials.myFeed')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
