<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $user = User::find(1);
        return [
            'user_id' => $user,
            'title' => $this->faker->words(rand(4, 5), true),
            'description' => $this->faker->words(rand(8, 9), true),
            'priority' => $this->faker->randomElement(['high', 'low']),
            'due_date' => $this->faker->date,
            'completed' => $this->faker->boolean,
        ];
    }
}
