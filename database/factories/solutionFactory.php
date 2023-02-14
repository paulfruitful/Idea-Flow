<?php

namespace Database\Factories;

use App\Models\Solution;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\solution>
 */
class solutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Solution::class;
    public function definition()
    {
        return [
            //
            'title'=>fake()->company(),
            'description'=>implode('', fake()->sentences(10)),
            'tagline'=>fake()->sentence(),
            'demo'=>fake()->url(),
            'type'=>fake()->randomElement(['hardware','software']),
            'sector'=>fake()->randomElement(['finance','health','agriculture','fashion','AI']),
            'image'=>fake()->imageUrl(),
            'monetizable'=>fake()->randomElement(['true','false']),
            'privacy'=>fake()->randomElement(['true','false']),
            'upvote'=>fake()->numberBetween(5,100),
          

        ];
    }
}
