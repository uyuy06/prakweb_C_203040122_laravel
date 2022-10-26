@extends('layouts.main')

@section('container')
        <h1>{{ $post->title }}</h1>

        <p>By.<a href="/authors/{{ $post->user->username }}"  class="text-decoration-none" >{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

    <a href="/posts" class="d-block mt-3" class="text-decoration-none">Back to Posts</a>
@endsection