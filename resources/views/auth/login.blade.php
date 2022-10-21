@extends('layouts.frontend.master')

@section('content')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <<-- Outer Row --> --}}
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5"> <div class="card-body" >
                <!-- Nested Row within Card Body -->


            </div>
            <link rel="icon" href="{{ asset('img/logo.png') }}">
            <body style="background-color: rgb(206, 54, 79)">

        <div>
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>

                <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required> @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required> @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'chacked' : '' }}>
                <label class="custom-control-label" for="remember">Remember Me</label>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary btn-user btn-block">Login</button>

    </form>
    <hr>
        @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
        @endif
                <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Create An Account !!!</a>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
