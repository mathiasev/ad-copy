<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Support\Facades\Auth;


class ClientController extends Controller
{

    /** Get Clients for Dashboard */
    public static function dashboard_clients()
    {
        return Client::all();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $client = Client::create([...$request->validated(), 'created_by_id' => Auth::id()]);
        return redirect()->route('clients.show', [$client]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        $deletedCampaigns = $client->campaigns()->where('status', 'archived')->get();
        return view('clients.single', compact(['client', 'deletedCampaigns']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Archive the specified resource from storage.
     */
    public function archive(Client $client)
    {
        $client->delete();
        session()->flash('message', $client->name . " client was deleted successfully.");
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->forceDelete();
        session()->flash('message', $client->name . " client was permanantly deleted successfully.");
        return redirect()->route('clients.index');
    }
}
