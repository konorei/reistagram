@extends('layouts.app')

@section('content')
<div class="contents row">
  <div class="container">
  {{ Form::open(['url' => "tweets/$tweet->id", 'method' => 'PATCH']) }}
    <h3>編集する</h3>

    <input placeholder="Image Url" type="text" name="image" value="{{$tweet->image}}" autofocus="true">
    <textarea cols="30" name="text" placeholder="text" rows="10">{{$tweet->text}}</textarea>
    <input type="submit" value="SENT">
  {{ Form::close() }}
  </div>
</div>
@endsection