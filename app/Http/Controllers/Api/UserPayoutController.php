<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PayoutRequest;
use Illuminate\Support\Str;

class UserPayoutController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $requests = PayoutRequest::where('user_id', $user->id)
                    ->orderBy('created_at','desc')
                    ->get()
                    ->map(function ($r) {
                        return [
                            'id' => $r->id,
                            'transaction_id' => $r->transaction_id,
                            'date_requested' => $r->created_at->format('F j, Y'),
                            'amount' => (float) $r->amount,
                            'bank_name' => $r->bank_name,
                            'masked_account' => $r->masked_account,
                            'status' => $r->status,
                        ];
                    });

        return response()->json(['data' => $requests]);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $data = $request->validate([
            'amount' => 'required|numeric|min:1',
            'bank_name' => 'required|string',
            'account_holder_name' => 'required|string',
            'account_number' => 'required|string',
            'swift_code' => 'nullable|string',
        ]);

        $payout = PayoutRequest::create(array_merge($data, [
            'user_id' => $user->id,
            'transaction_id' => 'POUT-' . strtoupper(Str::random(6)),
            'status' => 'pending'
        ]));

        return response()->json([
            'message' => 'Request created',
            'data' => $payout
        ], 201);
    }
}
