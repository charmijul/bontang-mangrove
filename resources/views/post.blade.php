@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/post-style.css') }}">

    <main>
        <article class="mb-5">
            <h2>{{ $post->title }}</h2>
            {!! $post->body !!}
        </article>

        <a href="/event">Kembali</a>
    </main>
@endsection
