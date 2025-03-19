@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h2 class="mb-0">Welcome, {{ auth()->user()->name }}!</h2>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('notes.index') }}" class="btn btn-lg btn-primary me-2">
                        <i class="fas fa-book"></i> View Notes
                    </a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
