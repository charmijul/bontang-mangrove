@extends('layouts.main')

@section('container')
    {{-- <link rel="stylesheet" href="{{ asset('css/login-style.css') }}"> --}}
    <main>
        <title>Dashboard | Mangrove</title>

        <!-- Custom styles for this template -->
        {{-- <link href="{{ asset('css/dashboard/event/index.css') }}" rel="stylesheet"> --}}
        <style>
            trix-toolbar [data-trix-button-group="file-tools"]{
                display: none;
            }
        </style>

        <div class="container-fluid">
            <div class="row">

                @include('dashboard.sidebar')

                <div class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h2>Create New Mangrove Data</h2>
                    </div>
                    <div class="col-lg-8">
                        <form method="post" action="/dashboard/mangrove/{{ $mangrove->id }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            {{-- form name --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" required autofocus value="{{ old('name', $mangrove->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- form scientifik_name --}}
                            <div class="mb-3">
                                <label for="scientifik_name" class="form-label">Nama Saintifik</label>
                                <input type="text" class="form-control @error('scientifik_name') is-invalid @enderror"
                                    name="scientifik_name" id="scientifik_name" required autofocus value="{{ old('scientifik_name', $mangrove->scientifik_name) }}">
                                @error('scientifik_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- form description --}}
                            <div class="mb-3">
                                <label for="description" class="form-label">Uraian</label>
                                <input type="hidden" class="form-control @error('description') is-invalid @enderror"
                                    name="description" id="description" required value="{{ old('description', $mangrove->description) }}">
                                    <trix-editor input="description" class="bg-white"></trix-editor>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- form benefit --}}
                            <div class="mb-3">
                                <label for="benefit" class="form-label">Manfaat</label>
                                <input type="hidden" class="form-control @error('benefit') is-invalid @enderror"
                                    name="benefit" id="benefit" required value="{{ old('benefit', $mangrove->benefit) }}">
                                    <trix-editor input="benefit" class="bg-white"></trix-editor>
                                @error('benefit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- form image --}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                @if ($mangrove->image)
                                <input type="hidden" name="oldImage" value="{{ $mangrove->image }}">
                                    <img src="{{ asset('storage/' . $mangrove->image) }}"
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
        document.addEventListener('trix-file-accept', function(){
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
