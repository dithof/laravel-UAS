@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->title }}</h1>
        <p> Adithya <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts" class="d-block mt-3">Kembali ke daftar blog</a>
@endsection