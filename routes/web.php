<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CopyGroupController;
use App\Http\Controllers\ProfileController;
use App\Models\Campaign;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

Route::get('/dashboard', function () {
    $clients = ClientController::dashboard_clients();
    return view('dashboard', compact('clients'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('campaigns', CampaignController::class)->middleware(['auth', 'verified']);
Route::resource('clients', ClientController::class)->middleware(['auth', 'verified']);
Route::get('/clients/{client}/campaign/{campaign}', [CampaignController::class, 'show'])->name('campaigns.show');

Route::resource('channels', ChannelController::class)->middleware(['auth', 'verified']);
Route::resource('copy-groups', CopyGroupController::class)->middleware(['auth', 'verified']);

Route::get('/settings', [AppController::class, 'SettingsPage'])->name('settings');



require __DIR__ . '/auth.php';
