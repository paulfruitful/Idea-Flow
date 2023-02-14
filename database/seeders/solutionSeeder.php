<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Solution;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class solutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=User::all();
        $user=$user[1];
        Solution::factory(33)->create([ 
       'user_id'=>$user->id,
       'author'=>$user->username
        ]);
    }
}
