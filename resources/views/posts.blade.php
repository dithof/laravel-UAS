@extends('layouts.main')
@section('content')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts" method="GET">
             @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
        <img src="https://www.goodwood.com/globalassets/.road--racing/f1/2025/05-may/mclaren-greatest-moments-f1-75/mclaren-mp44-1988-copy.jpg?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}" style="width: 100%; height: 500px; object-fit: cover; margin: 0 auto; display: block;">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                   By: <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-outline-primary">Read more...</a>
        </div>
    </div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-2 py-1" style="background-color: rgba(0, 0, 0, 0.5);"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                <img src="https://i.pinimg.com/736x/34/26/03/342603183cf59809a35dc4eae330fadb.jpg?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" style="width: 100%; height: 200px; object-fit: cover; margin: 0 auto; display: block;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                        <small class="text-muted">
                           By: <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4">No post found.</p>
@endif

@endsection