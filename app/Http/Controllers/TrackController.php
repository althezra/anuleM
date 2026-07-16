<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Song;
use App\Models\Release;

class TrackController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'release_id' => 'required|exists:releases,id',
            'song_id' => 'required|exists:songs,id',
            'title' => 'required|string',
            'track_number' => 'required|integer',
            'isrc' => 'nullable|string',
            'primary_artist' => 'required|string',
            'featured_artist' => 'nullable|string',
            'remixer' => 'nullable|string',
            'other_contributors' => 'nullable|string',
            'lyrics' => 'nullable|string',
            'is_instrumental' => 'boolean',
            'is_ai_generated' => 'boolean',
            'is_remix' => 'boolean',
            'composer' => 'nullable|string',
            'lyricist' => 'nullable|string',
            'songwriter' => 'nullable|string',
            'publisher' => 'nullable|string',
        ]);

        // Ambil file audio dari Song
        $song = Song::findOrFail($validated['song_id']);

        // Simpan track ke database
        $track = Track::create([
            'release_id' => $validated['release_id'],
            'song_id' => $song->id,
            'title' => $validated['title'],
            'track_number' => $validated['track_number'],
            'isrc' => $validated['isrc'] ?? null,
            'primary_artist' => $validated['primary_artist'],
            'featured_artist' => $validated['featured_artist'] ?? null,
            'remixer' => $validated['remixer'] ?? null,
            'other_contributors' => $validated['other_contributors'] ?? null,
            'lyrics' => $validated['lyrics'] ?? null,
            'is_instrumental' => $validated['is_instrumental'] ?? false,
            'is_ai_generated' => $validated['is_ai_generated'] ?? false,
            'is_remix' => $validated['is_remix'] ?? false,
            'composer' => $validated['composer'] ?? null,
            'lyricist' => $validated['lyricist'] ?? null,
            'songwriter' => $validated['songwriter'] ?? null,
            'publisher' => $validated['publisher'] ?? null,
        ]);

        return response()->json([
            'message' => 'Track berhasil dibuat!',
            'data' => $track
        ], 201);
    }
}
