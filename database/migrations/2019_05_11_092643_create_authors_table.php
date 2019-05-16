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
            $table->text('bio');
            $table->string('profile_picture', 200);
            $table->string('cover_photo', 200);
            $table->string('website', 150);
            $table->string('facebook', 150);
            $table->string('twitter', 150);
            $table->string('linkded_in', 150);
            $table->string('youtube', 150);
            $table->string('instagram', 150);
            $table->string('github', 150);
            $table->bigInteger('users_id');
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
        Schema::dropIfExists('authors');
    }
}
