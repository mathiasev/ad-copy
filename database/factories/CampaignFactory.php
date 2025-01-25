<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['draft', 'approved', 'scheduled', 'in-market', 'complete', 'rejected']),
            'created_by_id' => 1,
        ];
    }
}
