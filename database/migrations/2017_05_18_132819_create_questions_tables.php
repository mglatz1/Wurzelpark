<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('url_to_image');
            $table->integer('number');
            $table->integer('level_id');
            $table->integer('station_id');
            $table->timestamps();
        });

        Schema::create('questions_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->string('locale')->index();

            $table->text('text');
            $table->text('url_to_audio');

            $table->unique(['question_id','locale']);
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions_translations');
        Schema::dropIfExists('questions');
    }
}
