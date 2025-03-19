@extends('layouts.app')

@section('title', 'Edit Note')

@section('content')
    <div class="container">
        <h1>Edit Note</h1>

        <form action="{{ route('notes.update', $note->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $note->title }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="4" required>{{ $note->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
    </div>
@endsection
