<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizwegUserFrage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizweg_user_frage', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('station');
            $table->integer('quizweg_fragen_id');
            $table->integer('gegebeneantwort');
            $table->integer('score');
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
        Schema::dropIfExists('quizweg_user_frage');
    }
}
