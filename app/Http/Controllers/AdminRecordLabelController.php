<?php

namespace App\Http\Controllers;

use App\Models\RecordLabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRecordLabelController extends Controller
{
    /**
     * GET /api/record-labels
     * Mengambil data label milik user yang sedang login.
     */
    public function index()
    {
        // Tampilkan halaman admin Record Labels (load semua labels untuk admin)
        $labels = RecordLabel::with('user')->latest()->get();

        return view('app.admin.contributors.record_labels.index', compact('labels'));
    }

    /**
     * POST /api/record-labels
     * Membuat data label baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'website'   => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook'  => 'nullable|url',
            'youtube'   => 'nullable|url',
        ]);

        // Isi user_id dengan ID admin yang membuatnya (atau atur sesuai kebutuhan)
        $validated['user_id'] = Auth::id();

        $label = RecordLabel::create($validated);

        // Jika request AJAX/JSON, kembalikan JSON (compatibility), jika form submit redirect kembali
        if ($request->wantsJson()) {
            return response()->json($label->load('user'), 201);
        }

        return redirect()->back()->with('success', 'Record Label created successfully');
    }

    /**
     * PUT /api/record-labels/{id}
     * Update data label.
     */
    public function update(Request $request, $id)
    {
        // Admin dapat update semua labels
        $label = RecordLabel::findOrFail($id);

        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'website'   => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook'  => 'nullable|url',
            'youtube'   => 'nullable|url',
        ]);

        $label->update($validated);

        // Jika AJAX, kembalikan JSON, jika tidak redirect kembali
        if ($request->wantsJson()) {
            return response()->json($label->load('user'));
        }

        return redirect()->back()->with('success', 'Record Label updated successfully');
    }

    /**
     * DELETE /api/record-labels/{id}
     * Hapus data label.
     */
    public function destroy($id)
    {
        $label = RecordLabel::findOrFail($id);
        $label->delete();

        if (request()->wantsJson()) {
            return response()->json(['message' => 'Label deleted successfully']);
        }

        return redirect()->back()->with('success', 'Record Label deleted successfully');
    }
}
