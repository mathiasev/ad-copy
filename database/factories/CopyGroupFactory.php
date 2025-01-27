<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CopyGroup>
 */
class CopyGroupFactory extends Factory
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
            'name' => $this->faker->catchPhrase(),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['draft', 'approved', 'scheduled', 'in-market', 'complete', 'rejected']),
            'channel_id' => 1,
            'created_by_id' => 1
        ];
    }
}
