
@extends('layout.main')

@section('konten')
@foreach ($posts as $post)
    <a href="/blog/{{ $post['slug'] }}"><h1>{{ $post['title'] }}</h1></a>
    <p>{{ $post['author'] }}</p>
    <p>{{ $post['content'] }}</p>

@endforeach
    
@endsection