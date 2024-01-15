@extends('layouts.main')

@section('container')
    <h1 class=mb-5>Post Categories</h1>

    @foreach ($categories as $category)
    <ul>
        <li>
            <h2 href="/categories/{{ $category->slug }}">{{ $category->name }}</h2>
        </li>
    </ul>
    @endforeach
@endsection