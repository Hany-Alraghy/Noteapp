@extends('layouts.app')

@section('title', 'Add Note')

@section('content')
    <div class="container">
        <h1>Add a New Note</h1>

        <form action="{{ route('notes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Save Note</button>
        </form>
    </div>
@endsection
