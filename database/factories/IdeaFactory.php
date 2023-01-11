<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idea>
 */
class IdeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->sentence(6),
            'description'=>fake()->sentences(6),
            'email'=>fake()->unique()->safeEmail(),
            'plan'=>fake()->domainName(),
            'sponsor'=>'Yes',
            'sector'=>fake()->company(),
            'privacy'=>'public',
            'upvote'=>fake()->numberBetween(2,67)

        ];
    }
}
