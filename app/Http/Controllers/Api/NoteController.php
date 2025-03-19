<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        return response()->json(['notes' => Auth::user()->notes()->latest()->get()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $note = Auth::user()->notes()->create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return response()->json(['note' => $note, 'message' => 'Note created successfully'], 201);
    }

    public function show($id)
    {
        $note = Auth::user()->notes()->find($id);

        if (!$note) {
            return response()->json(['message' => 'Note not found'], 404);
        }

        return response()->json(['note' => $note]);
    }

    public function update(Request $request, $id)
    {
        $note = Auth::user()->notes()->find($id);

        if (!$note) {
            return response()->json(['message' => 'Note not found'], 404);
        }

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
        ]);

        $note->update($request->only(['title', 'content']));

        return response()->json(['note' => $note, 'message' => 'Note updated successfully']);
    }

    public function destroy($id)
    {
        $note = Auth::user()->notes()->find($id);

        if (!$note) {
            return response()->json(['message' => 'Note not found'], 404);
        }

        $note->delete();

        return response()->json(['message' => 'Note deleted successfully']);
    }
}
