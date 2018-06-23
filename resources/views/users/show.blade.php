@extends('layouts.app')

@section('content')
    <div class="contents row" >
        <p>{{ $name }}さんの投稿一覧</p>
        @foreach($tweets as $tweet)
            <div class="content_post" style="background-image: url({{ $tweet->image }});">
                <p>{{$tweet->text}}</p>
                <span class="name">
                    <a href="#"><span>投稿者</span>{{ $name }}</a>
                </span>
            </div>
        @endforeach
        {{ $tweets->render() }}
    </div>
@endsection