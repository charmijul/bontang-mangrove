@extends('layouts.main')

@section('container')
    {{-- <link rel="stylesheet" href="{{ asset('css/mangrove-style.css') }}"> --}}

    <main>
        <div class="container-fluid">
            <div class="row">

                @include('dashboard.sidebar')

                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    
                    <article class="mb-5">
                        <h2>{{ $mangrove->name }}</h2>
                        <img src="{{ asset('storage/' . $mangrove->image) }}" alt="Mangrove" width="250" height="250">
                        <h4>{{ $mangrove->scientifik_name }}</h4>
                        <p>{{ $mangrove->description }}</p>
                        <p>{{ $mangrove->benefit }}</p>
                        {!! $mangrove->body !!}
                    </article>

                    <a href="/dashboard/event" class="btn btn-success"><span data-feather="arrow-left"></span> Bact to Data Event</a>
                    <a href="/dashboard/event/{{ $mangrove->id }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span> Ubah</a>
                    <form action="/dashboard/event/{{ $mangrove->id }}" method="mangrove" class="d-inline">
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
