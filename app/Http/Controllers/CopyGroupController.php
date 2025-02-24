<?php

namespace App\Http\Controllers;

use App\Models\CopyGroup;
use App\Http\Requests\StoreCopyGroupRequest;
use App\Http\Requests\UpdateCopyGroupRequest;
use App\Models\Campaign;
use Illuminate\Support\Facades\Auth;

class CopyGroupController extends Controller
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
    public function store(StoreCopyGroupRequest $request)
    {
        //
        $copyGroup = CopyGroup::create([...$request->validated(), 'created_by_id' => Auth::id()]);
        return redirect()->route('campaigns.show', [$copyGroup->campaign->client, $copyGroup->campaign]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CopyGroup $copyGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CopyGroup $copyGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCopyGroupRequest $request, CopyGroup $copyGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CopyGroup $copyGroup)
    {
        //
    }
}
