@extends('layouts.main')
@section('content')

<h1 class="mb-4">Halaman Blog Posts</h1>
@foreach ($posts as $post)
<article>
    <h2>
        <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
    </h2>
    <h5>By: {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article>
@endforeach