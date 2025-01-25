<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => env('DEFAULT_NAME', 'Test User'),
            'email' => env('DEFAULT_EMAIL', 'test@example.com'),
            'password' => Hash::make(env('DEFAULT_PASSWORD', 'password')),
        ]);

        Client::factory()->count(10)->hasCampaigns(4)->create();
    }
}
