<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RecordLabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordLabelController extends Controller
{
    // Get all record labels (include owner info)
    public function index()
    {
        $labels = RecordLabel::with('user')->latest()->get();

        return response()->json($labels, 200);
    }

    // Store new record label
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $recordLabel = RecordLabel::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'website' => $request->website,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            // 'status' => 'Pending'
        ]);

        // Load user relation before returning to frontend
        return response()->json($recordLabel->load('user'), 201);
    }

    // Show record label by ID
    public function show($id)
    {
        $recordLabel = RecordLabel::find($id);

        if (!$recordLabel) {
            return response()->json(['message' => 'Record Label not found'], 404);
        }

        return response()->json($recordLabel, 200);
    }

    // Update record label
    public function update(Request $request, $id)
    {
        $recordLabel = RecordLabel::find($id);

        if (!$recordLabel) {
            return response()->json(['message' => 'Record Label not found'], 404);
        }

        // Validasi input (nama wajib, sisanya opsional)
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $recordLabel->update($request->only(['name', 'website', 'instagram', 'facebook', 'youtube']));

        return response()->json($recordLabel->load('user'), 200);
    }

    // Delete record label
    public function destroy($id)
    {
        $recordLabel = RecordLabel::find($id);

        if (!$recordLabel) {
            return response()->json(['message' => 'Record Label not found'], 404);
        }

        $recordLabel->delete();

        return response()->json(['message' => 'Record Label deleted successfully'], 200);
    }
}
