@extends('layouts.index')

@section('content')

<h1>ブログ一覧</h1>

<ul>
  @foreach($posts as $post)
  <li>{{ $post->title }}</li>
  @endforeach
</ul>

@endsection