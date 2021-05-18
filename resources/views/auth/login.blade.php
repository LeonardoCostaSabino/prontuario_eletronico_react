<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="lgn-form">
        <form class="box" action="" method="post">
            <h1>Login</h1>
            <input type="text" name="" placeholder="Username">
            <input type="password" name="" placeholder="Password">
            <input type="submit" name="" value="Login">
            <a href="#">Forgot your password?</a>
        </form>
        
    </div>
    
</div>
@endsection
