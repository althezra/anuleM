<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    // Get all artists
    public function index()
    {
        return response()->json(Artist::all(), 200);
    }

    // Store new artist
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $artist = Artist::create([
        'user_id' => Auth::id(), // Mengambil ID user yang login (via Sanctum/Session)
        'name' => $request->name,
        'website' => $request->website,
        'instagram' => $request->instagram,
        'facebook' => $request->facebook,
        'youtube' => $request->youtube,
        'status' => 'Pending' // Default status untuk dicek admin
    ]);

        return response()->json($artist, 201);
    }

    // Show artist by ID
    public function show($id)
    {
        $artist = Artist::find($id);

        if (!$artist) {
            return response()->json(['message' => 'Artist not found'], 404);
        }

        return response()->json($artist, 200);
    }

    // Update artist
    public function update(Request $request, $id)
    {
        $artist = Artist::find($id);

        if (!$artist) {
            return response()->json(['message' => 'Artist not found'], 404);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $artist->update($request->all());

        return response()->json($artist, 200);
    }

    // Delete artist
    public function destroy($id)
    {
        $artist = Artist::find($id);

        if (!$artist) {
            return response()->json(['message' => 'Artist not found'], 404);
        }

        $artist->delete();

        return response()->json(['message' => 'Artist deleted successfully'], 200);
    }
}
