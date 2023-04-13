@extends('layouts.main')

@section('container')
    {{-- <link rel="stylesheet" href="{{ asset('css/login-style.css') }}"> --}}
    <main>
        <title>Dashboard | Event</title>

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/dashboard/dashboard-style.css') }}" rel="stylesheet">

        <div class="container-fluid">
            <div class="row">

                @include('dashboard.sidebar')

                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
                    </div>
                    <h2>Galeri</h2>
                    {{-- form image --}}
                    <div class="mb-3">
                            <form action="/dashboard" method="post" class="d-inline" enctype="multipart/form-data">
                                @csrf
                            <label for="image" class="form-label">Upload New Image</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="addImage" style="display: flex; flex-direction: row; witdh: 100%;">
                                <input class="form-control" type="file" @error('image') is-invalid @enderror
                                    id="image" name="image" onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="gallery">
                        @foreach (scandir(public_path('storage/gallery-images')) as $file)
                            @if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                <div class="col">
                                    {{-- trigger modal --}}
                                    <img src="{{ asset('storage/gallery-images/' . $file) }}" alt="gambar"
                                        class="img-thumbnail" data-bs-toggle="modal"
                                        data-bs-target="#Images-{{ $loop->iteration }}">
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="Images-{{ $loop->iteration }}">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content" style="border-radius: 10px;">
                                            <img src="{{ asset('storage/gallery-images/' . $file) }}" alt="gambar"
                                                width="100%" height="100%">
                                                <form action="/dashboard/{{ $file }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    <button class="badge bg-danger border-0"
                                                        onclick="return confirm('Hapus Data?')"><span
                                                            data-feather="x-circle"></span></button>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
