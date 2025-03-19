@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%; border-radius: 15px;">
        <h3 class="text-center mb-4">User Profile</h3>

        <div class="mb-3">
            <p class="fw-bold">Name: <span class="text-muted">{{ auth()->user()->name }}</span></p>
        </div>

        <div class="mb-4">
            <p class="fw-bold">Email: <a href="mailto:{{ auth()->user()->email }}" class="text-primary">{{ auth()->user()->email }}</a></p>
        </div>

        <div class="d-grid gap-3">
            <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-lg">Edit Profile</a>

            <form action="{{ route('profile.destroy') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-lg">Delete Account</button>
                <a href="{{ route('password.request') }}" class="btn btn-warning">
                    Change Password
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
