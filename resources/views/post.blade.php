@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <article class="mb-5">
                <h2>{{ $post->title }}</h2>
                <p>By: <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <img src="https://www.goodwood.com/globalassets/.road--racing/f1/2025/05-may/mclaren-greatest-moments-f1-75/mclaren-mp44-1988-copy.jpg?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-3" style="width: 100%; height: 200px; object-fit: cover; margin: 0 auto; display: block;">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block">Back to Posts</a>
        </div>
    </div>
</div>

@endsection