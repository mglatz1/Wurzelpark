<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizwegInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizweg_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('qrcode');
            $table->text('information');
            $table->text('infotext');
            $table->text('guidebildpfad');
            $table->text('guidebildpfad2');
            $table->text('guideaudiopfad');
            $table->text('guidevideopfad');
            $table->text('guidepdfpfad');
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
        Schema::dropIfExists('quizweg_infos');
    }
}
