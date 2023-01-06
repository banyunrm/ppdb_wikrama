@extends('login')

@section('login')
    <div class="login-box">
        <img src="/img/avatar.png" alt="" class="avatar">
        <h1>Login Here</h1>
        <form action="{{ route('login.auth') }}" method="POST">
            @csrf
            <div class="input-box">
                <span>Email</span>
                <input type="text" name="email" placeholder="Enter Username">
            </div>
            <div class="input-box">
                <span>Password</span>
                <input type="password" name="password" placeholder="Enter Password">
            </div>
            <input type="submit" name="submit" value="Login" class="text-light">
        </form>
    </div>
@endsection
