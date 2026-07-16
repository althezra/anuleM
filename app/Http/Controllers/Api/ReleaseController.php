<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Release;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReleaseController extends Controller
{
    public function index()
    {
        $releases = Release::with(['artist', 'tracks.song'])->get();

        return response()->json([
            'status' => true,
            'message' => 'Daftar release berhasil diambil.',
            'data' => $releases
        ], 200);
    }

    /**
     * POST /api/releases
     * Simpan release baru (step 1 & 2 dari form).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'                 => 'required|string|max:255',
            'artist_id'             => 'required|exists:artists,id',
            'label'                 => 'nullable|string|max:255',
            'description'           => 'nullable|string',
            'main_language'         => 'nullable|string|max:100',
            'genre'                 => 'nullable|string|max:100',
            'subgenre'              => 'nullable|string|max:100',
            'release_language'      => 'nullable|string|max:100',
            'release_date'          => 'required|date',
            'release_type'          => 'required|in:new,re-release',
            'upc_ean'               => 'nullable|string|max:50',
            'region_availability'   => 'nullable|string|max:100',
            'publishing_copyright'  => 'nullable|string|max:255',
            'composition_copyright' => 'nullable|string|max:255',
            'cover_art'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status'                => 'required|in:draft,released',

            'tracks'                       => 'nullable|array',
            'tracks.*.title'               => 'required_with:tracks|string|max:255',
            'tracks.*.track_number'        => 'nullable|integer',
            'tracks.*.isrc'                => 'nullable|string|max:50',
            'tracks.*.primary_artist'      => 'nullable|string|max:255',
            'tracks.*.featured_artist'     => 'nullable|string|max:255',
            'tracks.*.remixer'             => 'nullable|string|max:255',
            'tracks.*.other_contributors'  => 'nullable|string|max:255',
            'tracks.*.lyrics'              => 'nullable|string',
            'tracks.*.is_instrumental'     => 'nullable|boolean',
            'tracks.*.is_ai_generated'     => 'nullable|boolean',
            'tracks.*.is_remix'            => 'nullable|boolean',
            'tracks.*.composer'            => 'nullable|string|max:255',
            'tracks.*.lyricist'            => 'nullable|string|max:255',
            'tracks.*.songwriter'          => 'nullable|string|max:255',
            'tracks.*.publisher'           => 'nullable|string|max:255',
        ]);

        // Upload cover art jika ada
        if ($request->hasFile('cover_art')) {
            $validated['cover_art'] = $request->file('cover_art')->store('cover_arts', 'public');
        }

        // Buat release baru
        $release = Release::create($validated);

        // Simpan tracks jika ada
        foreach ($request->input('tracks', []) as $trackData) {
            $release->tracks()->create(array_filter($trackData));
        }

        return response()->json([
            'status' => true,
            'message' => 'Release berhasil dibuat.',
            'data' => $release->load('artist', 'tracks.song')
        ], 201);
    }

    /**
     * GET /api/releases/{id}
     * Ambil detail release (dengan artist & tracks).
     */
    public function show($id)
    {
        $release = Release::with(['artist', 'tracks.song'])->findOrFail($id);

        return response()->json([
            'status' => true,
            'message' => 'Detail release berhasil diambil.',
            'data' => $release
        ], 200);
    }

    /**
     * PUT /api/releases/{id}
     * Update release yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        $release = Release::findOrFail($id);

        $validated = $request->validate([
            'title'                 => 'sometimes|string|max:255',
            'artist_id'             => 'sometimes|exists:artists,id',
            'label'                 => 'nullable|string|max:255',
            'description'           => 'nullable|string',
            'main_language'         => 'nullable|string|max:100',
            'genre'                 => 'nullable|string|max:100',
            'subgenre'              => 'nullable|string|max:100',
            'release_language'      => 'nullable|string|max:100',
            'release_date'          => 'sometimes|date',
            'release_type'          => 'sometimes|in:new,re-release',
            'upc_ean'               => 'nullable|string|max:50',
            'region_availability'   => 'nullable|string|max:100',
            'publishing_copyright'  => 'nullable|string|max:255',
            'composition_copyright' => 'nullable|string|max:255',
            'cover_art'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status'                => 'sometimes|in:draft,released',
        ]);

        // Hapus cover lama dan upload baru jika ada file baru
        if ($request->hasFile('cover_art')) {
            if ($release->cover_art) {
                Storage::disk('public')->delete($release->cover_art);
            }
            $validated['cover_art'] = $request->file('cover_art')->store('cover_arts', 'public');
        }

        $release->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Release berhasil diperbarui.',
            'data' => $release->load('artist', 'tracks.song')
        ], 200);
    }

    /**
     * DELETE /api/releases/{id}
     * Hapus release beserta cover art-nya.
     */
    public function destroy($id)
    {
        $release = Release::findOrFail($id);

        if ($release->cover_art) {
            Storage::disk('public')->delete($release->cover_art);
        }

        $release->delete();

        return response()->json([
            'status' => true,
            'message' => 'Release berhasil dihapus.'
        ], 200);
    }
}