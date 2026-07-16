<?php

namespace App\Http\Controllers; // <--- NAMESPACE NYA DI ROOT

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminPublisherController extends Controller
{
    // API Data untuk Admin (opsional, kalau mau dipake di JS admin)
    public function getPublisherData()
    {
        $publishers = Publisher::with('user')->latest()->get();
        return response()->json($publishers);
    }

    // Menampilkan Halaman Utama Admin Publisher
    public function index()
    {
        $publishers = Publisher::with('user')->latest()->get();
        // Pastikan path view-nya bener
        return view('app.admin.contributors.publishers.index', compact('publishers'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $publisher = Publisher::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $publisher->update($request->all());

        return redirect()->back()->with('success', 'Publisher updated successfully');
    }

    // Delete
    public function destroy($id)
    {
        $publisher = Publisher::findOrFail($id);
        $publisher->delete();

        return redirect()->back()->with('success', 'Publisher deleted successfully');
    }
}
