@extends('layouts.app')

@section('content')
<div class="container">
    <div class="lgn-form">
        <form class="box" action="index.html" method="post">
            <h1>Login</h1>
            <input type="text" name="" placeholder="Username">
            <input type="password" name="" placeholder="Password">
            <input type="submit" name="" value="Login">
            <div class="footer">
                <a href="#">Forgot your password?</a>
            </div>
        </form>
        
    </div>
    
</div>
@endsection
