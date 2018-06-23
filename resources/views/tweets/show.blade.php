@extends('layouts.app')

@section('content')
<div class="contents row">
  <div class="content_post" style="background-image: url({{ $tweet->image }});">
    <div class="more">
      <span><img src='/images/arrow_top.png'></span>
      <ul class="more_list">
        <li><a href="/tweets/{{$tweet->id}}">詳細</a></li>
        @if (Auth::user()->id == $tweet->user->id)
          <li>
            <a href="/tweets/{{$tweet->id}}/edit">編集</a>
          </li>
          <li>
            <a href="/tweets/{{$tweet->id}}">削除</a>
          </li>
        @endif
      </ul>
    </div>

    <p>{{$tweet->text}}</p>
    <span class="name">
      <a href="/users/{{ $tweet->user_id }}"><span>投稿者</span>{{ $tweet->user->name }}</a>
    </span>
  </div>
</div>
@endsection