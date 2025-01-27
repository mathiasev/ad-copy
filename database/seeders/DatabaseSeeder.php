<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Channel;
use App\Models\Client;
use App\Models\CopyGroup;
use App\Models\CopyVariation;
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

        Channel::factory()->create([
            'name' => 'Facebook ads',
            'description' => 'Facebook',
            'settings' => '',
            'created_by_id' => 1,
        ]);
        Client::factory()->count(10)->has(
            Campaign::factory(4)->has(
                CopyGroup::factory()->count(4)->has(
                    CopyVariation::factory()->count(4)
                )
            )
        )->create();
    }
}
