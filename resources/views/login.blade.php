@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
    <main>
        <div class="row justify-content-center">
            <div class="card">

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="form-signin">
                    <h1 style="font-size: 35px;">Login Form</h1>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email " placeholder="name@example" autofocus required value="{{ old('email') }}">
                            <label for="email"><small>Email Address</small></label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                            <label for="password"><small>Password</small></label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>

                    {{-- <small class="d-block text-center mt-3">Do Not Have Account? <a href="/register">Register Now</a></small> --}}
                </div>
            </div>
        </div>
    </main>
@endsection
