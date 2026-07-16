<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Song;
use Illuminate\Support\Facades\Storage;

class MusicRecognitionController extends Controller
{
    public function recognize(Request $request)
    {
        $request->validate([
            'audio' => 'required|file|mimes:mp3,wav|max:51200',
        ]);

        $file = $request->file('audio');
        $tempPath = $file->store('temp', 'public');

        // Kirim ke AudD untuk dikenali
        $audioPath = storage_path("app/public/{$tempPath}");
        $response = Http::attach('file', file_get_contents($audioPath), 'audio.mp3')
            ->post('https://api.audd.io/', [
                'api_token' => env('AUDD_API_KEY'),
                'return' => 'apple_music,spotify',
            ]);

        // Hapus file sementara
        Storage::disk('public')->delete($tempPath);

        $data = $response->json();

        if (!isset($data['result'])) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tidak dapat mengenali lagu.',
            ], 422);
        }

        $title = $data['result']['title'] ?? null;
        $album = $data['result']['album'] ?? null;

        if (!$title || !$album) {
            return response()->json([
                'status' => 'error',
                'message' => 'Informasi judul atau album tidak ditemukan.',
            ], 422);
        }

        // Cek apakah lagu dengan judul dan album tersebut sudah ada
        $existing = Song::where('title', $title)
            ->where('album', $album)
            ->exists();

        if ($existing) {
            return response()->json([
                'status' => 'exists',
                'message' => 'Lagu dengan judul dan album ini sudah ada dalam database.',
                'data' => [
                    'title' => $title,
                    'album' => $album,
                ]
            ]);
        }

        return response()->json([
            'status' => 'not_found',
            'message' => 'Lagu belum pernah dirilis. Aman untuk didaftarkan.',
            'data' => [
                'title' => $title,
                'album' => $album,
            ]
        ]);
    }
}
