<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use getID3;

class SongController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'artist' => 'required|string',
            'album' => 'nullable|string',
            'file' => 'required|file|mimes:mp3,wav|max:51200',
        ]);

        $file = $request->file('file');
        $path = $file->store('songs', 'public');

        // Analisis metadata audio dengan getID3
        $getID3 = new getID3;
        $info = $getID3->analyze(storage_path("app/public/{$path}"));

        $duration = (int) ($info['playtime_seconds'] ?? 0);
        $bitrate = (int) ($info['audio']['bitrate'] ?? 0);
        $sampleRate = (int) ($info['audio']['sample_rate'] ?? 0);
        $format = $info['fileformat'] ?? 'unknown';
        $bitDepth = (int) ($info['audio']['bits_per_sample'] ?? 0);
        $channels = (int) ($info['audio']['channels'] ?? 0);

        // Kumpulkan pesan kesalahan
        $errors = [];

        if ($duration < 30) {
            $errors[] = 'Durasi audio harus minimal 30 detik.';
        }

        if ($bitrate < 128000) {
            $errors[] = 'Bitrate harus minimal 128 kbps.';
        }

        if ($sampleRate < 44100) {
            $errors[] = 'Sample rate harus minimal 44100 Hz.';
        }

        if ($bitDepth < 16) {
            $errors[] = 'Bit depth harus minimal 16 bit.';
        }

        if ($channels !== 2) {
            $errors[] = 'Audio harus memiliki 2 channel (stereo).';
        }

        // Jika ada kesalahan spesifikasi
        if (!empty($errors)) {
            Storage::disk('public')->delete($path);
            return response()->json([
                'status' => 'error',
                'message' => 'Audio tidak memenuhi syarat:',
                'errors' => $errors,
            ], 422);
        }

        // Cek duplikasi berdasarkan title + artist
        if (Song::where('title', $request->title)->where('artist', $request->artist)->exists()) {
            Storage::disk('public')->delete($path);
            return response()->json([
                'status' => 'error',
                'message' => 'Lagu dengan judul dengan artis tersebut sudah ada di database.'
            ], 409);
        }

        // Simpan lagu ke database
        $song = Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'album' => $request->album,
            'file_path' => $path,
            'duration' => $duration,
            'bitrate' => $bitrate,
            'sample_rate' => $sampleRate,
            'format' => $format,
            'bit_depth' => $bitDepth,
            'channels' => $channels,
        ]);

        return response()->json([
            'message' => 'Lagu berhasil diunggah.',
            'data' => $song,
        ]);
    }
}
