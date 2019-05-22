<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 250);
            $table->text('slug', 250);
            $table->text('excerpt')->nullable();
            $table->mediumText('content');
            $table->string('poster', 250)->nullable();
            $table->tinyInteger('published');
            $table->timestamp('published_at')->nullable();
            $table->bigInteger('authors_id')->unsigned();
            $table->timestamps();

            $table->foreign('authors_id')->references('id')->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
