@extends('layouts.main')

@section('container')
    {{-- <link rel="stylesheet" href="{{ asset('css/login-style.css') }}"> --}}
    <main>
        <title>Dashboard | Event</title>

        <!-- Custom styles for this template -->
        {{-- <link href="{{ asset('css/dashboard/event/index.css') }}" rel="stylesheet"> --}}

        <div class="container-fluid">
            <div class="row">

                @include('dashboard.sidebar')

                <div class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        {{-- <h1 class="h2">Data Event</h1> --}}
                    </div>
                    <h2>Data Event</h2>
                    @if (session()->has('success'))
                        <div class="alert alert-success col-lg-10 alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <a href="/dashboard/event/create" class="btn btn-primary mb-3 mt-3">Post a New Event</a>

                            <div class="row mb-3 justify-content-center" style="border-radius: 10px;">
                                <div class="container col-md-6">
                                    <form action="/dashboard/event" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search.." name="search"
                                                value="{{ request('search') }}">
                                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    {{-- <th scope="col">Slug</th> --}}
                                    <th scope="col">Excerpt</th>
                                    {{-- <th scope="col">Body</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($events->count())
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $event->title }}</td>
                                            {{-- <td>{{ $event->slug }}</td> --}}
                                            <td>{!! $event->excerpt !!}</td>
                                            {{-- <td>{{ $event->body }}</td> --}}
                                            {{-- <td>{{ $event->image }}</td> --}}
                                            <td class="action">
                                                <a href="/dashboard/event/{{ $event->slug }}" class="badge bg-info"><span
                                                        data-feather="eye"></span></a>
                                                <a href="/dashboard/event/{{ $event->slug }}/edit"
                                                    class="badge bg-warning"><span data-feather="edit"></span></a>
                                                <form action="/dashboard/event/{{ $event->slug }}" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0"
                                                        onclick="return confirm('Hapus Data?')"><span
                                                            data-feather="x-circle"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="4" class="text-center fs-4">No Event or Post Found</td>
                                </tr>
                                @endif
                                <div class="d-flex justify-content-center">
                                    {{ $events->links() }}
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
