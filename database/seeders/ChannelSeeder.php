<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Channel::factory()->create([
            'name' => 'Facebook ads',
            'description' => 'Facebook',
            'settings' => '{"fields":[{"name":"Headline","type":"text","length":255,"min_count":1,"max_count":1,"required":true},{"name":"Description","type":"textarea","length":255,"min_count":1,"max_count":1,"required":true}]}',
            'created_by_id' => 1,
        ]);
    }
}
