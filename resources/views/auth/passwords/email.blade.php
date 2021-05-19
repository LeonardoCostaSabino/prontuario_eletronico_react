<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="lgn-form">
        <form class="box" action="{{ route('password.email') }}" method="POST">
            @csrf
            <h1>Reset Password</h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Email Input -->
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <!-- Button Submit -->
            <input type="submit" name="" value="{{ __('Send Password Reset Link') }}">
        </form>
    </div>
</div>
@endsection
