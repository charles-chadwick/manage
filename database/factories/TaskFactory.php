<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' =>  $this->faker->randomElement(['Health', 'Work', 'Writing']),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'duration' =>  $this->faker->randomElement(['Daily', 'Hourly', 'Weekly', 'Monthly']),
        ];
    }
}
