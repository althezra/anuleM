<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class AdminArtistController extends Controller
{
    public function getArtistsData()
{
    $artists = Artist::with('user')->latest()->get();
    return response()->json($artists);
}
    // Menampilkan halaman Admin Artist
    public function index()
    {
        // Ambil data dari database (terbaru & ada data user-nya)
        $artists = Artist::with('user')->latest()->get();

        // Kirim data ke view
        return view('app.admin.contributors.artists.index', compact('artists'));
    }



    // Update Artist (ketika Admin mengedit)
    public function update(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $artist->update($request->all());

        return redirect()->back()->with('success', 'Artist updated successfully');
    }

    // Delete Artist (ketika Admin menghapus)
    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();

        return redirect()->back()->with('success', 'Artist deleted successfully');
    }
}
