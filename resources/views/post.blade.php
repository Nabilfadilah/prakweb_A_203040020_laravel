
@extends('layouts.main')

@section('container')

    <h2 class="mb-5">{{ $post->title }}</h2>
    {{-- <h5>{{ $post["author"] }}</h5> --}}
    {!! $post->body !!}

    <a href="/blog">Back to Posts</a>

@endsection