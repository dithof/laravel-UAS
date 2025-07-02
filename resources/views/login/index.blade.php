@extends('layouts.main')
@section('content')

<div class="row justify-content-center align-items-center">
    <div class="col-lg-5">
        <main class="form-login w-100 mt-5">
            <h1 class="h3 mb-3 fw-normal text-center mb-4">Login</h1>
            <!-- Alert register berhasil -->
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form action="/login" method="POST">
                @csrf
            <form>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('name')is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}" autofocus/>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="password" name="password" class="form-control @error('name')is-invalid @enderror" id="password" placeholder="Password" />
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-outline-danger w-100" type="submit" style="border-radius: 1rem;">Login</button>
            </form>
            <small class="d-block text-center mt-3">Don't have an account? <a href="/register" class="text-decoration-none">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection