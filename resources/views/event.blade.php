@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/event-style.css') }}">

    <main>
        <h1>Event</h1>

        @foreach ($events as $event)
            <article class="mb-5">
                <h2>
                    <a href="event/{{ $event['slug'] }}">{{ $event['title'] }}</a>
                </h2>
                <p>{{ $event['description'] }}</p>
            </article>
        @endforeach
    </main>
@endsection
