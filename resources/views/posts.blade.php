@extends('layouts.main')
@section('content')

<h1 class="mb-4"></h1>
@foreach ($posts as $post)
<article>
    <h2>
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
    </h2>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach