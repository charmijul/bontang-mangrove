@extends('layouts.main')

@section('container')
    {{-- <link rel="stylesheet" href="{{ asset('css/login-style.css') }}"> --}}
    <main>
        <title>Dashboard | Event</title>

        <!-- Custom styles for this template -->
        {{-- <link href="{{ asset('css/dashboard/event/index.css') }}" rel="stylesheet"> --}}
        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>

        <div class="container-fluid">
            <div class="row">

                @include('dashboard.sidebar')

                <div class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h2>Edit Event Post</h2>
                    </div>
                    <div class="col-lg-8">
                        <form method="post" action="/dashboard/event/{{ $event->slug }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            {{-- form title --}}
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" id="title" required autofocus
                                    value="{{ old('title', $event->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- form slug --}}
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    name="slug" id="slug" required value="{{ old('slug', $event->slug) }}" readonly>
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- form body --}}
                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <input type="hidden" class="form-control @error('body') is-invalid @enderror"
                                    name="body" id="body" required value="{{ old('body', $event->body) }}">
                                <trix-editor input="body" class="bg-white"></trix-editor>
                                @error('body')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- form image --}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                @if ($event->image)
                                <input type="hidden" name="oldImage" value="{{ $event->image }}">
                                    <img src="{{ asset('storage/' . $event->image) }}"
                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif
                                <input class="form-control" type="file" @error('image') is-invalid @enderror
                                    id="image" name="image" onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/event/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });

        document.addEventListener('trix-file-accept', function() {
            e.preventDefault();
        });

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
