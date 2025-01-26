<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Http\Requests\StoreChannelRequest;
use App\Http\Requests\UpdateChannelRequest;
use Illuminate\Support\Facades\Auth;

class ChannelController extends Controller
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
    public function store(StoreChannelRequest $request)
    {
        //
        $channel = Channel::create([...$request->validated(), 'created_by_id' => Auth::id()]);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Channel $Channel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Channel $channel)
    {
        //
        return view('channels.edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChannelRequest $request, Channel $channel)
    {
        //
        $channel->update($request->validated());
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Channel $Channel)
    {
        //
    }
}
