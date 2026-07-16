<?php

namespace App\Http\Controllers;

use App\Models\BusinessInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class BusinessInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country' => 'required|string|max:255',
            'business_role' => 'required|integer',
            'business_name' => 'required|string|max:255',
            'business_website' => 'nullable|url',
            'business_youtube' => 'nullable|url',
            'business_instagram' => 'nullable|url',
            'business_facebook' => 'nullable|url',
            'business_x' => 'nullable|url',
            'business_tiktok' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('status', 'validation-failed')->with('message', 'Error! Your data has not been saved.')->with('code', 400);
        }

        $user = Auth::user();

        BusinessInformation::updateOrCreate(
            ['userOwned' => $user->id],
            $request->except('_token') + ['userOwned' => $user->id]
        );

        return Redirect::route('profile.edit')->with('status', 'data-saved')->with('code', 200);
    }


    /**
     * Display the specified resource.
     */
    public function show(BusinessInformation $business_information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessInformation $business_information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessInformation $business_information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessInformation $business_information)
    {
        //
    }
}
