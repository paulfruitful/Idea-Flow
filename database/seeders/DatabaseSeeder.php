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
     Idea::factory(13)->create([ 
    'user_id'=>$user->id,
    'author'=>$user->username,
     'email'=>$user->email
     ]);
     $this->call(
[
    solutionSeeder::class
]
     );
        
    }
}
