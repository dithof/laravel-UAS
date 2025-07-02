@extends('layouts.main')
@section('content')

<h1 class="mb-4">{{ $title }}</h1>

@if ($posts->count())
    <div class="card mb-3">
        <img src="https://i.pinimg.com/736x/34/26/03/342603183cf59809a35dc4eae330fadb.jpg" class="card-img-top" alt="{{ $posts[0]->category ? $posts[0]->category->name : 'No Category' }}" style="width: 100%; height: 500px; object-fit: cover; margin: 0 auto; display: block;">
        <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p>
                <small class="text-muted">
                    By: @if($posts[0]->user && $posts[0]->user->username)
                        <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a>
                    @elseif($posts[0]->user)
                        <span class="text-decoration-none">{{ $posts[0]->user->name }}</span>
                    @else
                        <span class="text-muted">Unknown Author</span>
                    @endif
                    in 
                    @if($posts[0]->category)
                        <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    @else
                        <span class="text-muted">No Category</span>
                    @endif
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-outline-primary">Read more...</a>
        </div>
    </div>
@else
    <p class="text-center fs-4">No post found.</p>
@endif

@foreach ($posts as $post)
<article class="mb-3 border-bottom pb-3">
    <h2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <p>By: 
        @if($post->user && $post->user->username)
            <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
        @elseif($post->user)
            <span class="text-decoration-none">{{ $post->user->name }}</span>
        @else
            <span class="text-muted">Unknown Author</span>
        @endif
        in 
        @if($post->category)
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        @else
            <span class="text-muted">No Category</span>
        @endif
    </p>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
</article>
@endforeach

@endsection