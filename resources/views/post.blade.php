@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->title }}</h1>
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
        {!! $post->body !!}
    </article>
    <a href="/posts" class="d-block mt-3">Kembali ke daftar blog</a>
@endsection