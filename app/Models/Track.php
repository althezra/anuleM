<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Release;
use App\Models\Song;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'release_id',
        'song_id',
        'title',
        'track_number',
        'isrc',
        'primary_artist',
        'featured_artist',
        'remixer',
        'other_contributors',
        'lyrics',
        'is_instrumental',
        'is_ai_generated',
        'is_remix',
        'composer',
        'lyricist',
        'songwriter',
        'publisher',
    ];

    // Relasi ke Release
    public function release()
    {
        return $this->belongsTo(Release::class);
    }

    // Relasi ke Song
    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
