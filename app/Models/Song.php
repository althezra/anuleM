<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Track;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'album',
        'file_path',
        'duration',
        'bitrate',
        'sample_rate',
        'format',
        'bit_depth',
        'channels',
    ];

    // Relasi ke Track
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
