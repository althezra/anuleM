<?php

namespace App\Http\Controllers\Api; // <--- INI WAJIB 'Api'

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublisherController extends Controller
{
    // Get all Publishers (JSON)
    public function index()
    {
        // Pake with('user') biar nama user pembuatnya muncul di tabel
        return response()->json(Publisher::with('user')->latest()->get(), 200);
    }

    // Store new Publisher
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $publisher = Publisher::create([
            'user_id' => Auth::id(), // Pakai Auth::id() biar aman
            'name' => $request->name,
            'website' => $request->website,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'status' => 'Pending'
        ]);

        // Load user relasi sebelum dikirim balik ke frontend
        return response()->json($publisher->load('user'), 201);
    }

    // Show Publisher by ID
    public function show($id)
    {
        $publisher = Publisher::find($id);
        if (!$publisher) return response()->json(['message' => 'Not found'], 404);
        return response()->json($publisher, 200);
    }

    // Update Publisher
    public function update(Request $request, $id)
    {
        $publisher = Publisher::find($id);
        if (!$publisher) return response()->json(['message' => 'Not found'], 404);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'website' => 'nullable|url',
        ]);

        $publisher->update($request->all());

        return response()->json($publisher->load('user'), 200);
    }

    // Delete Publisher
    public function destroy($id)
    {
        $publisher = Publisher::find($id);
        if (!$publisher) return response()->json(['message' => 'Not found'], 404);

        $publisher->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
