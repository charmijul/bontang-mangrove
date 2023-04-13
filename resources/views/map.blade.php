@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/map-style.css') }}">

    <main>
        <h1>Map/Lokasi</h1>
        <p>Ini adalah halaman untuk menampilkan peta dan lokasi Bontang Mangrove Information Center.</p>
        <div class="container">
            <div class="text">
                <p class="mbr-text">
                    <strong>Address</strong>
                    <br>
                    <br>Kawasan Ekowisata Budidaya Mangrove CSR PT. BADAK NGL<br>Tanjung Laut Indah, Bontang Selatan<br>Kota
                    Bontang, Kalimantan Timur,
                    14470<br>
                    <br><strong>Contacts</strong>
                    <br>Phone: (021) 2903 3066 / 55<br>
                    Fax: (021) 2903 3077<br>
                    WA: <a href="https://wa.me/6285349591896" class="">+62-853-4959-1896</a>
                </p>
            </div>
            <div class="image">
                <!-- tambahkan peta atau lokasi di sini -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.620783912296!2d117.489712!3d0.114223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a0dbd23e5b307%3A0x38090d0c41805e2d!2sKawasan%20Ekowisata%20Budidaya%20Mangrove%20CSR%20PT.%20BADAK%20NGL!5e0!3m2!1sen!2sid!4v1679388809268!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
@endsection
