@dd($post)
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By {{ $post->author }} in {{ $post->category->name }}</h5>
        {!! $post->body !!}
    </article>

    <a href="/Post">< Back</a>
@endsection