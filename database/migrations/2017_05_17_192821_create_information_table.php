<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->text('url');
            $table->string('name');
            $table->text('url_to_image');
            $table->text('url_to_image2');
            $table->text('url_to_audio');
            $table->text('url_to_video');
            $table->text('url_to_pdf');
            $table->text('url_to_youtube');
            $table->timestamps();
        });

        Schema::create('information_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('information_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title');
            $table->text('text');

            $table->unique(['information_id','locale']);
            $table->foreign('information_id')->references('id')->on('information')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_translations');
        Schema::dropIfExists('information');
    }
}
