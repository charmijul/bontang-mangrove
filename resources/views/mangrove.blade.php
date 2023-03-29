{{-- @dd($mangroves) --}}
@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/mangrove-style.css') }}">
    <main>
        <section>
            <h1>Data Mangrove</h1>
            <div class="container">
                <!-- tambahkan card view lainnya di sini -->
                @foreach ($mangroves as $mangrove)
                    <div class="card">
                        <img src="{{ asset('storage/' . $mangrove->image) }}" alt="Mangrove 1">
                        <div class="card-body">
                            <h2>{{ $mangrove->name }}</h2>
                            <ul>
                                <li>Nama Latin: {{ $mangrove->scientifik_name }}</li>
                                {{-- <li>Uraian: {{ $mangrove->description }}</li>
                                <li>Manfaat: {{ $mangrove->benefit }}</li> --}}
                                <a href="#detail-{{ $mangrove->id }}" class="btn btn-sm btn-info stretched-link"
                                    data-fancybox="mangrove-detail">Detail</a>
                            </ul>
                        </div>
                    </div>
                    <div id="detail-{{ $mangrove->id }}" style="display: none;">
                        <h4>{{ $mangrove->name }}</h4>
                        <p>{{ $mangrove->benefit }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <script>
        $('[data-fancybox="mangrove-detail"]').fancybox({
            smallBtn: true,
            toolbar: false
        });
    </script>
@endsection
