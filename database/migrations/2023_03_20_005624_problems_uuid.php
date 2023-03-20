<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('problems',function(Blueprint $table){
           $table->uuid('id')->change();
        });
        
        Schema::table('problem_comments',function(Blueprint $table){
            $table->foreignUuid('problem_id')->change();
        });
       
      
        Schema::table('problem_reactions',function(Blueprint $table){
            $table->foreignUuid('problem_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
