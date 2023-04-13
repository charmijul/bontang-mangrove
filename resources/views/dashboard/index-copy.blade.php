@extends('layouts.main')

@section('container')
    {{-- <link rel="stylesheet" href="{{ asset('css/login-style.css') }}"> --}}
    <main>
        <title>Dashboard</title>

        <!-- Custom styles for this template -->
        <link href="css/dashboard/dashboard-style.css" rel="stylesheet">

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

                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
                    </div>
                    <h2>Galeri</h2>
                    <div class="container">
                        @foreach (scandir(public_path('storage/gallery-images')) as $file)
                            @if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                                <div class="col">
                                    <img src="{{ asset('storage/gallery-images/' . $file) }}" alt="gambar"
                                        class="img-thumbnail" data-toggle="modal" data-target="#gambarModal">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
