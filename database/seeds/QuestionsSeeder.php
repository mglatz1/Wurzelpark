<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'text' => 'Was frisst das Eichhörnchen?',
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild01.jpg',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Was frisst das Eichhoernchen.mp3',
            'number' => 1,
            'level' => 1,
            'language' => "de",
            'station_id' => "1",
        ]);
    }
}

