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
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('author');
            $table->string('image');
            $table->integer('upvote');
            $table->text('tags')->nullable();
            $table->text('privacy'); 
            $table->integer('views');
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('problem_reactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->foreignId('problem_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('problem_comments', function (Blueprint $table) {
            $table->id(); 
            $table->string('username');
            $table->longText('comment');
            $table->foreignId('problem_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
};
