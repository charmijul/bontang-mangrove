@extends('layouts.main')

@section('container')
    {{-- <link rel="stylesheet" href="{{ asset('css/login-style.css') }}"> --}}
    <main>
        <title>Dashboard | mangrove</title>

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/dashboard/mangrove/index.css') }}" rel="stylesheet">

        {{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="#">Sign out</a>
                </div>
            </div>
        </header> --}}

        <div class="container-fluid">
            <div class="row">

                @include('dashboard.sidebar')

                <div class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        {{-- <h1 class="h2">Data mangrove</h1> --}}
                    </div>
                    <h2>Data mangrove</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    {{-- <th scope="col">Slug</th> --}}
                                    <th scope="col">Scientifik Name</th>
                                    <th scope="col">Image</th>
                                    {{-- <th scope="col">Body</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mangroves as $mangrove)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mangrove->name }}</td>
                                        <td>{{ $mangrove->scientifik_name }}</td>
                                        <td><img src="{{ asset('storage/' . $mangrove->image) }}" width="100px" height="100px" alt="Mangrove "></td>
                                        <td class="action">
                                            <a href="/dashboard/mangrove/{{ $mangrove->id }}" class="badge bg-info"><span
                                                    data-feather="eye"></span></a>
                                            <a href="/dashboard/mangrove/{{ $mangrove->id }}/edit"
                                                class="badge bg-warning"><span data-feather="edit"></span></a>
                                            <form action="/dashboard/mangrove/{{ $mangrove->id }}" method="post"
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
