<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\problem>
 */
class problemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title'=>fake()->sentence(5),
            'description'=>implode('', fake()->sentences(10)),
            'image'=>fake()->imageUrl(),
            'privacy'=>fake()->randomElement(['true','false']),
            'upvote'=>fake()->numberBetween(5,100),
            'tags'=>implode('',fake()->randomElements(['health','finance','ai']))
        ];
    }
}
