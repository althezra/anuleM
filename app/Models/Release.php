<?php

namespace App\Models;

use App\Http\Controllers\SongController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'releases';

    // Field yang bisa diisi (dari form)
    protected $fillable = [
        'title',
        'artist_id',
        'label',
        'description',
        'main_language',
        'genre',
        'subgenre',
        'release_language',
        'release_date',
        'release_type',
        'upc_ean',
        'region_availability',
        'publishing_copyright',
        'composition_copyright',
        'cover_art',
        'status',

    ];

    // Relasi Artist
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    // Relasi Track
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
