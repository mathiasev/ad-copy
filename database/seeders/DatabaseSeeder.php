<?php

namespace Database\Seeders;

use App\Models\Channel;
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

        Channel::factory()->create([
            'name' => 'Facebook ads',
            'description' => 'Facebook',
            'settings' => '{"fields":[{"name":"Headline","type":"text","length":255,"min_count":1,"max_count":1,"required":true},{"name":"Description","type":"textarea","length":255,"min_count":1,"max_count":1,"required":true}]}',
            'created_by_id' => 1,
        ]);
    }
}
