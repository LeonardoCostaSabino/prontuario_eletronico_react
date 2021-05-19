<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="lgn-form">
        <form class="box" action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Login</h1>
            <!-- Email Input -->
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <!-- Password Input -->
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <!-- Button Login -->
            <input type="submit" name="" value="{{ __('Login') }}">

            <!-- Forgot Password Field -->
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
        </form>
        
    </div>
    
</div>
@endsection
