{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')

<h1>Halaman Blog Post</h1>

{{-- <h1>Halaman Posts</h1> --}}

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>

            <p>{{ $post->excerpt }}</p>

            {{-- <h5>By: {{ $post["author"] }}</h5> --}}
        </article>
    @endforeach

@endsection

