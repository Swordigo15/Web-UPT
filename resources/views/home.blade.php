@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/Post">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category')}}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author')}}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                    value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>

        <h3 style="text-align : center;">Latest Post</h3>

        <div class="card mb-3">
            @if ($latest->image)
                <div style="max-height : 480px; overflow:hidden;">
                    <img src="{{ asset('/storage/'.$latest->image) }}" 
                    alt="{{ $latest->category->name }}" 
                    class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $latest->category->name }}" class="card-img-top"
                    alt="{{ $latest->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/Post/{{ $latest->slug }}" class="text-decoration-none text-dark">
                        {{ $latest->title }}
                    </a>
                </h3>
                <p>
                    <small class="text-body-secondary">
                        By
                        <a href="/Post?author={{ $latest->author->username }}"
                            class="text-decoration-none">{{ $latest->author->name }}</a>
                        in
                        <a href="/Post?category={{ $latest->category->slug }}"
                            class="text-decoration-none">{{ $latest->category->name }}</a>
                        {{ $latest->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $latest->excerpt }}</p>
                <a href="/Post/{{ $latest->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

        <hr class="my-3">
        <h3 style="text-align : center;">Most Popular Post</h3>

        <div class="card mb-3">
            @if ($popular->image)
                <div style="max-height : 480px; overflow:hidden;">
                    <img src="{{ asset('/storage/'.$popular->image) }}" 
                    alt="{{ $popular->category->name }}" 
                    class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $popular->category->name }}" class="card-img-top"
                    alt="{{ $popular->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/Post/{{ $popular->slug }}" class="text-decoration-none text-dark">
                        {{ $popular->title }}
                    </a>
                </h3>
                <p>
                    <small class="text-body-secondary">
                        By
                        <a href="/Post?author={{ $popular->author->username }}"
                            class="text-decoration-none">{{ $popular->author->name }}</a>
                        in
                        <a href="/Post?category={{ $popular->category->slug }}"
                            class="text-decoration-none">{{ $popular->category->name }}</a>
                        {{ $popular->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $popular->excerpt }}</p>
                <a href="/Post/{{ $popular->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    </div>
@endsection