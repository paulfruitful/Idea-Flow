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
            'title'=>fake()->company(),
            'description'=>fake()->sentences(6),
            'email'=>fake()->unique()->safeEmail(),
            'plan'=>fake()->randomElement(['Software','Hardware','Combined']),
            'sponsor'=>fake()->randomElement(['true','false']),
            'privacy'=>fake()->randomElement(['true','false']),
            'upvote'=>fake()->numberBetween(2,67),
          

        ];
    }
}
