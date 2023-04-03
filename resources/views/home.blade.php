@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="css/home-style.css">

    <main>
        <h1>Selamat Datang di Bontang Mangrove Information Center</h1>
        <p>Kami menyediakan informasi tentang hutan mangrove Bontang dan konservasi lingkungan.</p>
        <img src="/images/logo-122x140.png" alt="Bontang Mangrove" width="250" height="250">
        <h2>Tentang Kami</h2>
        <p>Kami adalah pusat informasi hutan mangrove Bontang yang didirikan pada tahun 2020. Kami bertujuan untuk
            meningkatkan kesadaran masyarakat tentang pentingnya konservasi lingkungan dan membantu melestarikan hutan
            mangrove di Bontang.</p>
        <h2>Galeri</h2>
        <div class="row">
            @foreach (scandir(public_path('storage/gallery-images')) as $file)
                @if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                    <div class="col">
                        <img src="{{ asset('storage/gallery-images/' . $file) }}" alt="gambar" class="img-thumbnail" data-toggle="modal" data-target="#gambarModal">
                    </div>
                @endif
            @endforeach
        </div>
          
        {{-- <img src="images/mangrove1.jpg" alt="Mangrove 1" width="400" height="300"> --}}
    </main>
@endsection
