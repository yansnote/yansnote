<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pseudonym', 100);
            $table->string('slug', 100);
            $table->text('bio')->nullable();
            $table->string('profile_picture', 200)->nullable();
            $table->string('cover_photo', 200)->nullable();
            $table->string('website', 150)->nullable();
            $table->string('facebook', 150)->nullable();
            $table->string('twitter', 150)->nullable();
            $table->string('linkded_in', 150)->nullable();
            $table->string('youtube', 150)->nullable();
            $table->string('instagram', 150)->nullable();
            $table->string('github', 150)->nullable();
            $table->bigInteger('users_id')->unsigned();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
