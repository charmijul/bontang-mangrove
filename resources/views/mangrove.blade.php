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
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                                        data-bs-target="#Mangrove-Modal-{{ $mangrove->id }}">
                                        Detail
                                    </button>
                            </ul>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="Mangrove-Modal-{{ $mangrove->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $mangrove->image) }}" alt="Mangrove 1">
                                    <div class="card-body">
                                        <h2>{{ $mangrove->name }}</h2>
                                        <ul>
                                            <li><b>Nama Latin: </b>{{ $mangrove->scientifik_name }}</li>
                                            <li><b>Uraian: </b>{{ $mangrove->description }}</li>
                                            <li><b>Manfaat: </b>{{ $mangrove->benefit }}</li>
                                    </div>
                                </div>
                                {{-- <div class="modal-header">
                                    <h5 class="modal-title" id="Mangrove-ModalLabel">{{ $mangrove->name }}</h5>
                                </div>
                                <div class="modal-body">
                                    <li>Uraian: {{ $mangrove->description }}</li>
                                    <li>Manfaat: {{ $mangrove->benefit }}</li>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
@endsection
