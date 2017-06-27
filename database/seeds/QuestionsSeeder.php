<?php

use Carbon\Carbon;
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
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild01.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => "1",
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '1',
            'locale' => 'de',
            'text' => 'Was frisst das Eichhörnchen?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Was frisst das Eichhoernchen.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '1',
            'locale' => 'en',
            'text' => 'What does the squirrel eat?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/What does the squirrel eat.mp3'
        ]);

        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild10.jpg',
            'number' => 2,
            'level_id' => 1,
            'station_id' => "1",
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '2',
            'locale' => 'de',
            'text' => 'Was frisst der Frosch?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Was frisst der Frosch.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '2',
            'locale' => 'en',
            'text' => 'What does the frog eat?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/What does the frog eat.mp3'
        ]);

        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild01.jpg',
            'number' => 1,
            'level_id' => 2,
            'station_id' => "1",
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '3',
            'locale' => 'de',
            'text' => 'Wenn das Eichhörnchen von Ast zu Ast springt steuert es ...?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Wenn das Eichhoernchen von Ast zu Ast.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '3',
            'locale' => 'en',
            'text' => 'By jumping from branch to branch, the squirrel steers with?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/By jumping from branch to branch.mp3'
        ]);

        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station02/Bild10.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => "2",
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '4',
            'locale' => 'de',
            'text' => 'Was hat die Schnecke am Kopf?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station02/Was hat die Schnecke am Kopf.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '4',
            'locale' => 'en',
            'text' => 'What\'s at top of a snail?',
            'url_to_audio' => ''
        ]);

        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station03/Rinde Fichte.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => "3",
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '5',
            'locale' => 'de',
            'text' => 'Welche Farbe hat die Rinde der Fichte?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station03/Welche Farbe hat die Rinde der Fichte.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '5',
            'locale' => 'en',
            'text' => 'What color does the bark of a spruce have?',
            'url_to_audio' => '',
        ]);

        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station03/Moos.jpg',
            'number' => 2,
            'level_id' => 1,
            'station_id' => "3",
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '6',
            'locale' => 'de',
            'text' => 'Findet man Moose auf Steinen?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station03/Findet man Moose auf Steinen.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => '6',
            'locale' => 'en',
            'text' => 'Is it possible that moss grows on stones?',
            'url_to_audio' => '',
        ]);
    }
}

