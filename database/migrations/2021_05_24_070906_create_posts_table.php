<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('pic');
            $table->string('title');
            $table->string('abstract');
            $table->text('body');
            $table->string('slug')->unique();
            $table->boolean('active')->default(1);
            $table->boolean('featured')->default(0);

            $table->foreignId("subject_id");
            $table->foreignId("user_id");

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
        Schema::dropIfExists('posts');
    }
}
