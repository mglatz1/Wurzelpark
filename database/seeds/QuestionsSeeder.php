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
            'level_id' => 1,
            'language' => "de",
            'station_id' => "1",
        ]);

        DB::table('questions')->insert([
            'text' => 'Was frisst der Frosch?',
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild10.jpg',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Was frisst der Frosch.mp3',
            'number' => 2,
            'level_id' => 1,
            'language' => "de",
            'station_id' => "1",
        ]);

        DB::table('questions')->insert([
            'text' => 'Wenn das Eichhörnchen von Ast zu Ast springt steuert es ...?',
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild01.jpg',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Wenn das Eichhoernchen von Ast zu Ast.mp3',
            'number' => 1,
            'level_id' => 2,
            'language' => "de",
            'station_id' => "1",
        ]);

        DB::table('questions')->insert([
            'text' => 'Was hat die Schnecke am Kopf?',
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station02/Bild10.jpg',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station02/Was hat die Schnecke am Kopf.mp3',
            'number' => 1,
            'level_id' => 1,
            'language' => "de",
            'station_id' => "2",
        ]);

        DB::table('questions')->insert([
            'text' => 'Welche Farbe hat die Rinde der Fichte?',
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station03/Rinde Fichte.jpg',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station03/Welche Farbe hat die Rinde der Fichte.mp3',
            'number' => 1,
            'level_id' => 1,
            'language' => "de",
            'station_id' => "3",
        ]);

        DB::table('questions')->insert([
            'text' => 'Findet man Moose auf Steinen?',
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station03/Moos.jpg',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station03/Findet man Moose auf Steinen.mp3',
            'number' => 2,
            'level_id' => 1,
            'language' => "de",
            'station_id' => "3",
        ]);
    }
}

