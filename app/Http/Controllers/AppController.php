<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //


    public function SettingsPage()
    {
        $channels = Channel::all();
        return view('settings', compact('channels'));
    }
}
