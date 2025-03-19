@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reset Password</h2>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="New Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <button type="submit">Reset Password</button>
    </form>
</div>
@endsection
