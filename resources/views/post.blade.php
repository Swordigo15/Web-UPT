@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                
                <p>By <a href="/Post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
                    <a href="/Post?category={{ $post->category->slug }}" 
                        class="text-decoration-none">{{ $post->category->name }}</a></p>

                <p>Views : {{ $post->views += 1 }}</p>

                @if ($post->image)
                    <div style="max-height : 350px; overflow:hidden;">
                        <img src="{{ asset('/storage/'.$post->image) }}" 
                        alt="{{ $post->category->name }}" 
                        class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" 
                        alt="{{ $post->category->name }}" class="img-fluid" >
                @endif
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}                  
                </article>

                <a href="/Post" class="d-block mt-3">< Back</a>
            </div>
        </div>
    </div>

    
@endsection