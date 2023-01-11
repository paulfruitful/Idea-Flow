<?php

namespace Database\Factories;

use App\Models\Idea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idea>
 */
class IdeaFactory extends Factory
{
    protected $model= Idea::class;
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
            'sponsor'=>fake()->randomElement(['Yes','No']),
            'sector'=>fake()->randomElement(['Financial Tech','Health Tech','Educational Tech','Agricultural Tech', 'General Tech']),
            'privacy'=>fake()->randomElement(['Private','Public']),
            'upvote'=>fake()->numberBetween(2,67),
          

        ];
    }
}
