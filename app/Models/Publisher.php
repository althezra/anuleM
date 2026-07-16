<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    // Tambahkan 'user_id' dan 'status' di sini
    protected $fillable = [
        'user_id',
        'name',
        'website',
        'instagram',
        'facebook',
        'youtube',
        'status',
    ];

    public function releases()
    {
        return $this->hasMany(Release::class);
    }

    // Tambahkan ini agar Admin bisa mengambil nama User pembuat Artist
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
