<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizwegFragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizweg_fragen', function (Blueprint $table) {
            $table->increments('id');
            $table->text('qrcode');
            $table->integer('frage');
            $table->integer('level');
            $table->text('sprache');
            $table->text('fragetext');
            $table->text('fragebildpfad');
            $table->text('frageaudiopfad');
            $table->text('antwort1');
            $table->text('antwort2');
            $table->text('antwort3');
            $table->text('antwort4');
            $table->integer('richtigeantwort');
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
        Schema::dropIfExists('quizweg_fragen');
    }
}
