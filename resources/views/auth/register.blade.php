@extends('layouts.backend')
@section('title', 'Admin Login')
@section('description', 'This is where admin login')
@section('main')
<form method="POST" action="{{ route('register') }}" class="pt-3">
    @csrf

    <div class="form-group">
        <input type="text" placeholder="Your name" class="form-control form-control-lg" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>
    <div class="form-group">
        <input placeholder="Email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    </div>
    <div class="form-group">
        <input placeholder="Password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
    </div>
    <div class="form-group">
        <input placeholder="Confirm Password" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="current-password" />
    </div>
    <div class="mt-3">
        <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"> Login</button>

    </div>
    <br>
    <br>


    <div class="text-center mt-4 fw-light">
        Already registered? <a href="{{ route('login') }}" class="text-primary">Login</a>
    </div>
</form>

@endsection