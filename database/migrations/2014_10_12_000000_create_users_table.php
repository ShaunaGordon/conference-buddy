<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            // Stuff from Github
            $table->string('github_id')->unique()->nullable();

            // More generic stuff (can come from any given provider)
            $table->string('name');
            $table->string('avatar');
            $table->text('bio')->nullable();
            // Keep this unique so users are unique even if they try signing in with a different service
            $table->string('email')->unique();

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
