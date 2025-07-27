<?php

namespace Database\Factories;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->sentence(3, true),
            'user_id' => User::factory(),
            'description' => fake()->text(),
            'start_date' => $start = fake()->dateTimeBetween('now', '+1 month'),
            'end_date' => fake()->dateTimeBetween($start, '+2 months'),
        ];
    }
}
