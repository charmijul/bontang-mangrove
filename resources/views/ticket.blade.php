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
                    <h2>Olahan Mangrove</h2>
                    <ul>
                        <li>Amplang Mangrove: Rp.10.000,-</li>
                        <li>Dodol Mangrove: Rp.15.000,-</li>
                        <li>Manisan Mangrove: Rp.15.000,-</li>
                        <li>Mangrove Ready to Drink: Rp.15.000,-</li>
                        <li>Sirup Ovata: Rp.25.000,-</li>
                    </ul>
                </div>
                <div class="card">
                    <h2>Bibit Mangrove</h2>
                    <ul>
                        <li>Bibit Rhizophora apiculata: Rp. 25.000,-(25 Batang)</li>
                        <li>Bibit Avicennia marina: Rp.45.000,-(25 Batang)</li>
                    </ul>
                </div>
            </div>
            <p style="color: #000000; padding: 15px;" class="">
                <strong>Harga diambil pertanggal 01 Mei 2023.<br></strong>
                <strong>Harga dapat berubah sewaktu-waktu tanpa pemberitahuan terlebih dahulu,</strong><br>
                <strong>Untuk informasi lebih lanjut &amp; pemesanan silahkan hubungi : <a href="https://wa.me/6285349591896" class="">+62-853-4959-1896 (WA)</a></strong>
            </p>
        </section>
    </main>
@endsection
