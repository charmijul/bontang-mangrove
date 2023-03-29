@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/registration-style.css') }}">
    <main>
        <div class="row justify-content-center">
            <div class="col-lg-5">
    
                <div class="form-registration">
                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                placeholder="name" required value="{{ old('name') }}">
                            <label for="name"><small>Name</small></label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="email"
                                class="form-control rounded-top @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email"><small>Email</small></label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            <label for="password"><small>Password</small></label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                    </form>
    
                    <small class="d-block text-center mt-3">Already Have Account? <a href="/login">Login</a></small>
                </main>
    
            </div>
        </div>
    </main>
@endsection
