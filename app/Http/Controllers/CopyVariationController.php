<?php

namespace App\Http\Controllers;

use App\Models\CopyVariation;
use App\Http\Requests\StoreCopyVariationRequest;
use App\Http\Requests\UpdateCopyVariationRequest;
use Illuminate\Support\Facades\Auth;

class CopyVariationController extends Controller
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
    public function store(StoreCopyVariationRequest $request)
    {
        //
        $copyVariation = CopyVariation::create([...$request->validated(), 'created_by_id' => Auth::id()]);
        return redirect()->route('campaigns.show', [$copyVariation->copyGroup->campaign->client, $copyVariation->copyGroup->campaign]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CopyVariation $copyVariation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CopyVariation $copyVariation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCopyVariationRequest $request, CopyVariation $copyVariation)
    {
        //
        $copyVariation->update($request->validated());
        return redirect()->route('campaigns.show', [$copyVariation->copyGroup->campaign->client, $copyVariation->copyGroup->campaign]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CopyVariation $copyVariation)
    {
        //
    }
}
