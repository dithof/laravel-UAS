@extends('layouts.main')
@section('content')

<h1 class="mb-4">Halaman Blog Posts</h1>
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