@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="twPc-div">
            <a class="twPc-bg twPc-block"></a>

            <div>
                <div class="twPc-button">
                    <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
                    <a href="{{ url('/user/'.$userData->id) }}" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow @<span>{{ $userData->name }}</span></a>
                    <!-- Twitter Button -->
                </div>

                <a title="{{ $userData->name }}" href="{{ url('/user/'.$userData->id) }}" class="twPc-avatarLink">
                    <img alt="{{ $userData->name }}" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSktI9ybmlq4UoIh8l3lI3OGqYatZMS8TAXx7168AZ3T3d9GtJuaNtGReE" class="twPc-avatarImg">
                </a>

                <div class="twPc-divUser">
                    <div class="twPc-divName">
                        <a href="{{ url('/user/'.$userData->id) }}">{{ $userData->name }}</a>
                    </div>
                    <span>
                        <a href="{{ url('/user/'.$userData->id) }}">@<span>{{ $userData->name }}</span></a>
                    </span>
                </div>

                <div class="twPc-divStats">
                    <ul class="twPc-Arrange">
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan" title="{{ $userData->pictures->count() }} Images">
                                <span class="twPc-StatLabel twPc-block">Images</span>
                                <span class="twPc-StatValue">{{ $userData->pictures->count() }}</span>
                            </a>
                        </li>
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan/following" title="0 Following">
                                <span class="twPc-StatLabel twPc-block">Following</span>
                                <span class="twPc-StatValue">0</span>
                            </a>
                        </li>
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan/followers" title="0 Followers">
                                <span class="twPc-StatLabel twPc-block">Followers</span>
                                <span class="twPc-StatValue">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <h1>Feed</h1>

        @include('partials.myFeed')

    </div>
</div>
@endsection

@section('custom_styles')
<style>
.twPc-div {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    height: 200px;
}
.twPc-bg {
    background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 95px;
    width: 100%;
}
.twPc-block {
    display: block !important;
}
.twPc-button {
    margin: -35px -10px 0;
    text-align: right;
    width: 100%;
}
.twPc-avatarLink {
    background-color: #fff;
    border-radius: 6px;
    display: inline-block !important;
    float: left;
    margin: -30px 5px 0 90px;
    max-width: 100%;
    padding: 1px;
    vertical-align: bottom;
}
.twPc-avatarImg {
    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    height: 72px;
    width: 72px;
}
.twPc-divUser {
    margin: 15px 0 0;
}
.twPc-divName {
    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}
.twPc-divName a {
    color: inherit !important;
}
.twPc-divStats {
    margin-left: 100px;
    padding: 10px 0;
}
.twPc-Arrange {
    box-sizing: border-box;
    display: table;
    margin: 0;
    min-width: 100%;
    padding: 0;
    table-layout: auto;
}
ul.twPc-Arrange {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.twPc-ArrangeSizeFit {
    display: table-cell;
    padding: 0;
    vertical-align: top;
}
.twPc-ArrangeSizeFit a:hover {
    text-decoration: none;
}
.twPc-StatValue {
    display: block;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.15s ease-in-out 0s;
}
.twPc-StatLabel {
    color: #8899a6;
    font-size: 10px;
    letter-spacing: 0.02em;
    overflow: hidden;
    text-transform: uppercase;
    transition: color 0.15s ease-in-out 0s;
}
.twitter-follow-button {
    color: #fff;
    padding: 10px;
    background-color: #000011;
    font-size: 13pt;
    border: 1px solid transparent;
    border-radius: 25px;
}
</style>
@endsection