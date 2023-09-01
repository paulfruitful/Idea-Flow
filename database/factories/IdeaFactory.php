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
            'description'=>implode('', fake()->sentences(10)),
            'tagline'=>fake()->sentence(),
            'image'=>fake()->imageUrl(),
            'email'=>fake()->unique()->safeEmail(),
            'plan'=>fake()->randomElement(['hardware','software']),
            'sponsor'=>fake()->randomElement(['true','false']),
            'privacy'=>fake()->randomElement(['true','false']),
            'upvote'=>fake()->numberBetween(5,100),
            'tags'=>fake()->randomElements(['AI','Health','Fashion','Entertainment','Agriculture','Real Estate','Finance'])
          

        ];
    }
}
