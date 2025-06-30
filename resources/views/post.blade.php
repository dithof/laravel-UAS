@extends('layouts.main')

<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>

@endsection