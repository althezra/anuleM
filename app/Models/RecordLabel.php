<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordLabel extends Model
{
    use HasFactory;

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

    public function user()
    {
        return $this->belongsTo(User::class,);
    }
}
