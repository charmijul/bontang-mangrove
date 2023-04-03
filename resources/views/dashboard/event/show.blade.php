@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/post-style.css') }}">

    <main>
        <div class="container-fluid">
            <div class="row">

                @include('dashboard.sidebar')

                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    
                    <article class="mb-5">
                        <h2>{{ $post->title }}</h2>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Event ">
                        {!! $post->body !!}
                    </article>

                    <a href="/dashboard/event" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali ke Data Event</a>
                    <a href="/dashboard/event/{{ $post->slug }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span> Ubah</a>
                    <form action="/dashboard/event/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Hapus Data?')"><span
                                data-feather="x-circle"></span> Hapus</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
