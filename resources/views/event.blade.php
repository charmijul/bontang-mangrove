@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/event-style.css') }}">

    <main>
        <h1>Event</h1>

        @if ($events->count())
            <div class="card mb-3">
                <img src="{{ asset('storage/' . $events[0]->image) }}" class="card-img-top" alt="Event {{ $events[0]->title }}">
                <div class="card-body">
                    <h5 class="card-title text-center"><a href="event/{{ $events[0]->slug }}" class="text-decoration-none text-dark fs-3">{{ $events[0]->title }}</a></h5>
                    <p class="card-text text-center"><small class="text-muted">Last updated {{ $events[0]->updated_at }}</small></p>
                    <p class="card-text">{{ $events[0]->excerpt }}</p>

                    <a href="event/{{ $events[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
                </div>
            </div>
        
            
        <div class="container">
            <div class="row">
                @foreach ($events->skip(1) as $event)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="Event {{ $event->title }}">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="event/{{ $event->slug }}" class="text-decoration-none text-dark fs-3">{{ $event->title }}</a></h5>
                            <p class="card-text text-center"><small class="text-muted">Last updated {{ $event->updated_at }}</small></p>
                            <p class="card-text">{{ $event->excerpt }}</p>
                          <a href="event/{{ $event->slug }}" class="btn btn-primary">Read more...</a>
                        </div>
                      </div>
                </div>
                @endforeach
                @foreach ($events as $event)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="Event {{ $event->title }}">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="event/{{ $event->slug }}" class="text-decoration-none text-dark fs-3">{{ $event->title }}</a></h5>
                            <p class="card-text text-center"><small class="text-muted">Last updated {{ $event->updated_at }}</small></p>
                            <p class="card-text">{{ $event->excerpt }}</p>
                          <a href="event/{{ $event->slug }}" class="btn btn-primary">Read more...</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
            @else
            <p class="text-center fs-4">No Event Found</p>
        @endif
    </main>
@endsection
