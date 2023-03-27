@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/ticket-style.css') }}">
    <main>
        <section>
            <h1>Tiket</h1>
            <p>Berikut adalah daftar jenis tiket yang tersedia di Bontang Mangrove Information Center beserta harganya:</p>

            <div class="container">
                <div class="card">
                    <h2>Tiket Masuk</h2>
                    <ul>
                        <li>Tiket Masuk Dewasa: Rp 30.000,-</li>
                        <li>Tiket Masuk Anak-anak (di bawah 12 tahun): Rp 15.000,-</li>
                    </ul>
                </div>
                <div class="card">
                    <h2>Wahana</h2>
                    <ul>
                        <li>Wahana Satu: Rp 10.000,-</li>
                        <li>Wahana Dua: Rp 15.000,-</li>
                        <li>Wahana Tiga: Rp 20.000,-</li>
                    </ul>
                </div>
                <div class="card">
                    <h2>Photoshoot</h2>
                    <ul>
                        <li>Photoshoot Satu: Rp 25.000,-</li>
                        <li>Photoshoot Dua: Rp 35.000,-</li>
                    </ul>
                </div>
                <div class="card">
                    <h2>Lain-lain</h2>
                    <ul>
                        <li>Tiket Museum: Rp 20.000,-</li>
                        <li>Merchandise: Rp 50.000,-</li>
                    </ul>
                </div>
                <div class="card">
                    <h2>Lain-lain</h2>
                    <ul>
                        <li>Tiket Museum: Rp 20.000,-</li>
                        <li>Merchandise: Rp 50.000,-</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
