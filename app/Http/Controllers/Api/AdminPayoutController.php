<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PayoutRequest;
use Carbon\Carbon;

class AdminPayoutController extends Controller
{
    public function index()
    {
        $requests = PayoutRequest::with('user')->orderBy('created_at','desc')->get();
        return response()->json(['data' => $requests]);
    }

    public function show(PayoutRequest $payout_request)
    {
        // route model binding uses {payout_request}
        return response()->json(['data' => $payout_request]);
    }

    public function approve(Request $request, PayoutRequest $payout_request)
    {
        $payout_request->update([
            'status' => 'approved',
            'approved_at' => Carbon::now(),
            'admin_note' => $request->input('admin_note')
        ]);
        return response()->json(['message' => 'Approved', 'data' => $payout_request]);
    }

    public function reject(Request $request, PayoutRequest $payout_request)
    {
        $payout_request->update([
            'status' => 'rejected',
            'admin_note' => $request->input('admin_note')
        ]);
        return response()->json(['message' => 'Rejected', 'data' => $payout_request]);
    }
}
