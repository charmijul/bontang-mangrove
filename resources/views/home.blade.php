@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="css/home-style.css">

    <main>
        <h1>Selamat Datang di Bontang Mangrove Information Center</h1>
        <p>Kami menyediakan informasi tentang hutan mangrove Bontang dan konservasi lingkungan.</p>
        <div class="container-logos">
            <img src="/images/logo-2.png" alt="Bontang Mangrove">
        </div>
        <h2>Tentang Kami</h2>
        <p>Kami adalah pusat informasi hutan mangrove Bontang yang didirikan pada tahun 2020. Kami bertujuan untuk
            meningkatkan kesadaran masyarakat tentang pentingnya konservasi lingkungan dan membantu melestarikan hutan
            mangrove di Bontang.</p>
        <h2>Galeri</h2>
        <div class="row">
            @foreach (scandir(public_path('storage/gallery-images')) as $file)
                @if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    {{-- <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                        data-bs-target="#Mangrove-Modal-{{ $mangrove->id }}">
                        Detail
                    </button> --}}
                    <div class="col">
                        {{-- trigger modal --}}
                        <img src="{{ asset('storage/gallery-images/' . $file) }}" alt="gambar" class="img-thumbnail"
                            data-bs-toggle="modal" data-bs-target="#Images-{{ $loop->iteration }}">
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="Images-{{ $loop->iteration }}">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="border-radius: 10px;">
                                <img src="{{ asset('storage/gallery-images/' . $file) }}" alt="gambar" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- <img src="images/mangrove1.jpg" alt="Mangrove 1" width="400" height="300"> --}}
    </main>
@endsection
