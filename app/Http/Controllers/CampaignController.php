<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Models\Channel;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
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
    public function create(Request $request)
    {
        //
        if ($request->has('client')) {
            $client = Client::where('slug', $request->input('client'))->firstOrFail();
            return view('campaigns.create', ['client' => $client->id]);
        }

        return view('campaigns.create', ['client' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCampaignRequest $request)
    {
        $campaign = Campaign::create([...$request->validated(), 'created_by_id' => Auth::id()]);
        return redirect()->route('campaigns.show', [$campaign->client, $campaign]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client, Campaign $campaign)
    {
        //
        $channels = Channel::all();
        return view('campaigns.single', compact(['campaign', 'channels']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCampaignRequest $request, Campaign $campaign)
    {
        $campaign->update($request->validated());
        session()->flash('message', $campaign->name . ' campaign was updated successfully.');
        return redirect()->route('campaigns.show', [$campaign->client, $campaign]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function archive(Campaign $campaign)
    {
        //
        $campaign->delete();
        session()->flash('message', $campaign->name . ' campaign was deleted successfully.');
        return redirect()->route('clients.show', $campaign->client);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        //
        $campaign->forceDelete();
        session()->flash('message', $campaign->name . ' campaign was permanantly deleted successfully.');
        return redirect()->route('clients.show', $campaign->client);
    }
}
