<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayoutRequest extends Model
{
    //
    protected $fillable = [
        'user_id',
        'amount',
        'bank_name',
        'account_holder_name',
        'account_number',
        'swift_code',
        'transaction_id',
        'status',
        'admin_note',
        'approved_at'
    ];

    public function  user()
    {
        return $this->belongsTo(User::class);
    }

    // helper mask account number
    public function getMaskedAccountAttribute()
    {
        $num = $this->account_number;
        $len = strlen($num);
        if ($len <= 4) return '****' . $num;
        $last4 = substr($num, -4);
        return '****' . $last4;
    }
}
