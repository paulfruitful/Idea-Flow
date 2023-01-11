<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Idea;
use Illuminate\Database\Seeder;
use \App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $user=User::all()->first();
     Idea::create([
        'title'=>fake()->sentence(6),
        'description'=>fake()->sentences(6),
        'email'=>fake()->unique()->safeEmail(),
        'plan'=>fake()->domainName(),
        'sponsor'=>fake()->randomElement(['Yes','No']),
        'sector'=>fake()->randomElement(['Financial Tech','Health Tech','Educational Tech','Agricultural Tech', 'General Tech']),
        'privacy'=>fake()->randomElement(['Private','Public']),
        'upvote'=>fake()->numberBetween(2,67),
      
     ]);
        
    }
}
