<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinessInformation extends Model
{
    use HasFactory;

    protected $table = 'business_informations';

    protected $fillable = [
        'userOwned', 'country', 'business_role', 'business_name',
        'business_website', 'business_youtube', 'business_instagram',
        'business_facebook', 'business_x', 'business_tiktok'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'userOwned');
    }
}
