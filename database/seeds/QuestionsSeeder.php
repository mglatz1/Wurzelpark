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
        // id 1
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild01.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 1,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 1,
            'locale' => 'de',
            'text' => 'Was frisst das Eichhörnchen?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Was frisst das Eichhoernchen.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 1,
            'locale' => 'en',
            'text' => 'What does the squirrel eat?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/What does the squirrel eat.mp3'
        ]);

        // id 2
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild10.jpg',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 1,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 2,
            'locale' => 'de',
            'text' => 'Was frisst der Frosch?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Was frisst der Frosch.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 2,
            'locale' => 'en',
            'text' => 'What does the frog eat?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/What does the frog eat.mp3'
        ]);

        // id 3
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild01.jpg',
            'number' => 1,
            'level_id' => 2,
            'station_id' => 1,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 3,
            'locale' => 'de',
            'text' => 'Wenn das Eichhörnchen von Ast zu Ast springt steuert es ...?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Wenn das Eichhoernchen von Ast zu Ast.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 3,
            'locale' => 'en',
            'text' => 'By jumping from branch to branch, the squirrel steers with?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/By jumping from branch to branch.mp3'
        ]);

        // id 4
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild10.jpg',
            'number' => 2,
            'level_id' => 2,
            'station_id' => 1,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 4,
            'locale' => 'de',
            'text' => 'Wie heißen die Eier der Frösche?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Wie heissen die Eier der Froesche.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 4,
            'locale' => 'en',
            'text' => 'How are baby-eggs called?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/How are baby eggs called.mp3'
        ]);

        // id 5
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild01.jpg',
            'number' => 1,
            'level_id' => 3,
            'station_id' => 1,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 5,
            'locale' => 'de',
            'text' => 'Wie heißt der größte Feind des Eichhörnchens?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Wie heisst der groesste Feind.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 5,
            'locale' => 'en',
            'text' => 'What\'s the name of squirrels\' greatest enemy?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Whats the name of the squirrel.mp3'
        ]);

        // id 6
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station01/Bild11.jpg',
            'number' => 2,
            'level_id' => 3,
            'station_id' => 1,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 6,
            'locale' => 'de',
            'text' => 'Wie viele Eier legt ein Frosch?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/Wie viele Eier legt ein Froschweibchen.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 6,
            'locale' => 'en',
            'text' => 'How many eggs does the female frog lay?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station01/How many eggs does the female frog.mp3'
        ]);

        // id 7
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station02/Bild00.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 2,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 7,
            'locale' => 'de',
            'text' => 'Was frisst ein Regenwurm?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station02/Was frist ein Regenwurm.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 7,
            'locale' => 'en',
            'text' => 'What does a earthworm eat?',
            'url_to_audio' => ''
        ]);

        // id 8
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station02/Bild10.jpg',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 2,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 8,
            'locale' => 'de',
            'text' => 'Was hat die Schnecke am Kopf?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station02/Was hat die Schnecke am Kopf.mp3'
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 8,
            'locale' => 'en',
            'text' => 'What\'s at top of a snail?',
            'url_to_audio' => ''
        ]);

        // id 9
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station02/Bild10.jpg',
            'number' => 1,
            'level_id' => 2,
            'station_id' => 2,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 9,
            'locale' => 'de',
            'text' => 'Würde sich eine Schnecke verletzen, wenn sie über eine Rasierklinge kriechen würde?',
            'url_to_audio' => ''
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 9,
            'locale' => 'en',
            'text' => 'Would a snail got hurt by crawling over a razor blade?',
            'url_to_audio' => ''
        ]);

        // id 10
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station02/Bild10.jpg',
            'number' => 2,
            'level_id' => 2,
            'station_id' => 2,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 10,
            'locale' => 'de',
            'text' => 'Wo halten sich Schnecken gerne auf?',
            'url_to_audio' => ''
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 10,
            'locale' => 'en',
            'text' => 'Were do snails live?',
            'url_to_audio' => ''
        ]);

        // id 11
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station03/Rinde Fichte.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 3,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 11,
            'locale' => 'de',
            'text' => 'Welche Farbe hat die Rinde der Fichte?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station03/Welche Farbe hat die Rinde der Fichte.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 11,
            'locale' => 'en',
            'text' => 'What color does the bark of a spruce have?',
            'url_to_audio' => '',
        ]);

        // id 12
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station03/Moos.jpg',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 3,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 12,
            'locale' => 'de',
            'text' => 'Findet man Moose auf Steinen?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station03/Findet man Moose auf Steinen.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 12,
            'locale' => 'en',
            'text' => 'Is it possible that moss grows on stones?',
            'url_to_audio' => '',
        ]);

        // id 13
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station04/SpechtBaum.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 4,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 13,
            'locale' => 'de',
            'text' => 'Warum macht der Specht Löcher in die Bäume?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Warum macht der Specht Loecher.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 13,
            'locale' => 'en',
            'text' => 'Why does the woodpeker make holes in trees?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Why does the woodpeker make holes.mp3',
        ]);

        // id 14
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station04/Ameisenhaufen.jpg',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 4,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 14,
            'locale' => 'de',
            'text' => 'Wo leben die Ameisen?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Wo Leben die Ameisen.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 14,
            'locale' => 'en',
            'text' => 'Where do ants live?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Where do ants live.mp3',
        ]);

        // id 15
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station04/Bild01.jpg',
            'number' => 1,
            'level_id' => 2,
            'station_id' => 4,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 15,
            'locale' => 'de',
            'text' => 'Wie ist die Zunge des Spechtes?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Wie ist die Zunge des Spechtes.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 15,
            'locale' => 'en',
            'text' => 'How is the tongue of the woodpeker?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/How is the tongue of the woodpeker.mp3',
        ]);

        // id 16
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station04/Ameise2.jpg',
            'number' => 2,
            'level_id' => 2,
            'station_id' => 4,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 16,
            'locale' => 'de',
            'text' => 'Welche Ameisen sind für die Fortpflanzung zuständig?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Welche Ameisen sind fuer die Fortpflanzung zustaendig.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 16,
            'locale' => 'en',
            'text' => 'Which ant takes care of the reproduction?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Which ant takes care of the reproduction.mp3',
        ]);

        // id 17
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station04/Bild01.jpg',
            'number' => 1,
            'level_id' => 3,
            'station_id' => 4,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 17,
            'locale' => 'de',
            'text' => 'Wo werden die Eier des Spechts ausgebrütet?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Wo werden die Eier des Spechtes.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 17,
            'locale' => 'en',
            'text' => 'Where does the woodpecker hatch its eggs?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Where does the woodpecker hatch its eggs.mp3',
        ]);

        // id 18
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station04/Ameise1.jpg',
            'number' => 2,
            'level_id' => 3,
            'station_id' => 4,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 18,
            'locale' => 'de',
            'text' => 'Wie viele Ameisen gehören zu einem Ameisenstaat?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/Wie viele Ameisen gehoeren.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 18,
            'locale' => 'en',
            'text' => 'How many ants are part of one ant colonny?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station04/How many ants are part of one ant colonny.mp3',
        ]);

        // id 19
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station05/Bild0.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 5,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 19,
            'locale' => 'de',
            'text' => 'Wie heißt der Pilz mit dem roten Hut und den weißen Punkten?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station05/Wie heist der Pilz mit den Roten Punkten.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 19,
            'locale' => 'en',
            'text' => 'What\'s the name of the red mushroom with white spots?',
            'url_to_audio' => '',
        ]);

        // id 20
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station05/Bild11.jpg',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 5,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 20,
            'locale' => 'de',
            'text' => 'Was ist die Lärche für ein Gewächs?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 20,
            'locale' => 'en',
            'text' => 'What type of plant is the larch?',
            'url_to_audio' => '',
        ]);

        // id 21
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station05/Bild02.jpg',
            'number' => 1,
            'level_id' => 2,
            'station_id' => 5,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 21,
            'locale' => 'de',
            'text' => 'Der Knollenblätterpilz ist...',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station05/Der_Knollenblaetterpilz_ist.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 21,
            'locale' => 'en',
            'text' => 'The amanita is ...?',
            'url_to_audio' => '',
        ]);

        // id 22
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station05/Bild11.jpg',
            'number' => 2,
            'level_id' => 2,
            'station_id' => 5,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 22,
            'locale' => 'de',
            'text' => 'Welcher Nadelbaum verliert im Winter seine Nadeln?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station05/Welcher Nadelbaum verliert im Winter seine Nadeln.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 22,
            'locale' => 'en',
            'text' => 'What conifer loses its needles during winter?',
            'url_to_audio' => '',
        ]);

        // id 23
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station06/Beschneiung.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 6,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 23,
            'locale' => 'de',
            'text' => 'Welchen Zweck erfüllen die Teiche am Schigebiet Gerlitzen?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 23,
            'locale' => 'en',
            'text' => 'What\'s the meaning of the ponds in the ski area of Gerlitzen?',
            'url_to_audio' => '',
        ]);

        // id 24
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station06/Bild11.jpg',
            'number' => 1,
            'level_id' => 2,
            'station_id' => 6,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 24,
            'locale' => 'de',
            'text' => 'Womit fühlen die Bienen?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 24,
            'locale' => 'en',
            'text' => 'How do bees feel?',
            'url_to_audio' => '',
        ]);

        // id 25
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station06/Bild00.jpg',
            'number' => 2,
            'level_id' => 2,
            'station_id' => 6,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 25,
            'locale' => 'de',
            'text' => 'Welche Farben hat eine Biene?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 25,
            'locale' => 'en',
            'text' => 'What colors does a bee have?',
            'url_to_audio' => '',
        ]);

        // id 26
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station06/Bach.jpg',
            'number' => 1,
            'level_id' => 3,
            'station_id' => 6,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 26,
            'locale' => 'de',
            'text' => 'Zu den fließenden Gewässern gehören ...?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 26,
            'locale' => 'en',
            'text' => 'To flowing waters belongs ...?',
            'url_to_audio' => '',
        ]);

        // id 27
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station07/alpen_edelweiss.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 7,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 27,
            'locale' => 'de',
            'text' => 'Wie heißt diese Pflanze, welche hauptsächlich im Hochgebirge wächst?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station07/Fraqe das Edelweiss.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 27,
            'locale' => 'en',
            'text' => 'What\'s the name of the plant, mostly growing in highlands?',
            'url_to_audio' => '',
        ]);

        // id 28
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station07/Murmeltier.jpg',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 7,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 28,
            'locale' => 'de',
            'text' => 'Welches Tier ist vielfach nur im Hochgebirge anzutreffen?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station07/Das Murmeltier.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 28,
            'locale' => 'en',
            'text' => 'What\'s the name of the animal, mostly found in highlands?',
            'url_to_audio' => '',
        ]);

        // id 29
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station07/Kuh frisst Heu.jpg',
            'number' => 1,
            'level_id' => 2,
            'station_id' => 7,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 29,
            'locale' => 'de',
            'text' => 'Wie viel Kilogramm Heu frisst eine Kuh am Tag wenn sie ausschließlich Heu verzehrt?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station07/Kuh frisst Heu.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 29,
            'locale' => 'en',
            'text' => 'How many kilogram hay does a cow eat, if it\'s solely nourished by hay?',
            'url_to_audio' => '',
        ]);

        // id 30
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station07/Biene.jpg',
            'number' => 1,
            'level_id' => 3,
            'station_id' => 7,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 30,
            'locale' => 'de',
            'text' => 'Warum sind Bienen so nützliche Insekten?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station07/Warum sind Bienen nützlich.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 30,
            'locale' => 'en',
            'text' => 'Why are bees such useful animals?',
            'url_to_audio' => '',
        ]);

        // id 31
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station07/Dachs.jpg',
            'number' => 2,
            'level_id' => 3,
            'station_id' => 7,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 31,
            'locale' => 'de',
            'text' => 'Welches Wildtier hat schwarz-weiße Streifen am Kopf?',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Audio/Station07/Der Dachs.mp3',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 31,
            'locale' => 'en',
            'text' => 'Which animal is black-white striped at the head?',
            'url_to_audio' => '',
        ]);

        // id 32
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/Station08/Wald.jpg',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 8,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 32,
            'locale' => 'de',
            'text' => 'Was produzieren Bäume bzw. der Wald, das der Mensch so dringend zum Leben braucht?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 32,
            'locale' => 'en',
            'text' => 'What is produced by a forest and very important for human beings and animals to live?',
            'url_to_audio' => '',
        ]);

        // id 33
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => '',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 9,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 33,
            'locale' => 'de',
            'text' => 'Welches Tier frisst den giftigen Fliegenpilz ohne krank zu werden?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 33,
            'locale' => 'en',
            'text' => 'Which animal is able to eat a fly agaric without bad consequences?',
            'url_to_audio' => '',
        ]);

        // id 34
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => '',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 9,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 34,
            'locale' => 'de',
            'text' => 'Welche Farben können Bienen nicht sehen?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 34,
            'locale' => 'en',
            'text' => 'Which colors can\'t be seen by bees?',
            'url_to_audio' => '',
        ]);

        // id 35
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => '',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 10,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 35,
            'locale' => 'de',
            'text' => 'Welches Tier ähnelt den Menschen genetisch zu 99%?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 35,
            'locale' => 'en',
            'text' => 'Which animal is genetically 99% equivalent to a human being?',
            'url_to_audio' => '',
        ]);

        // id 36
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => '',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 11,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 36,
            'locale' => 'de',
            'text' => 'Was ist die weit verbreitetste Baumart in Mitteleuropa?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 36,
            'locale' => 'en',
            'text' => 'What is the most widespread type of tree in Central Europe?',
            'url_to_audio' => '',
        ]);

        // id 37
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => '',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 11,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 37,
            'locale' => 'de',
            'text' => 'Wer ist die Polizei des Waldes?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 37,
            'locale' => 'en',
            'text' => 'Which animal has a very important role for the environment?',
            'url_to_audio' => '',
        ]);

        // id 38
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => '',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 12,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 38,
            'locale' => 'de',
            'text' => 'Der Wurzelpark befindet sich an einem Bauernhof. Welche Tiere hast du schon gesehen?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 38,
            'locale' => 'en',
            'text' => 'Wurzelpark is part of a farm. Which animal have you seen already?',
            'url_to_audio' => '',
        ]);

        // id 39
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => '',
            'number' => 2,
            'level_id' => 1,
            'station_id' => 12,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 39,
            'locale' => 'de',
            'text' => 'Am Bauernhof, wo sich der Wurzelpark befindet, gibt es Schafe, Kühe, Hühner, Enten, Schweine, '.
                'Hasen und vieles mehr. Welches Nahrungsmittel kannst du neben Käse aus Kuhmilch noch vorfinden?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 39,
            'locale' => 'en',
            'text' => 'At the farm of Wurzelpark you can sheeps, cows, chickens, ducks, pigs, bunnies and many more. '.
                'Besides cheese produced with milk from cows, which product is also available?',
            'url_to_audio' => '',
        ]);

        // id 40
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'url_to_image' => '',
            'number' => 1,
            'level_id' => 1,
            'station_id' => 13,
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 40,
            'locale' => 'de',
            'text' => 'Du startest nun die Quizrally! Du bekommst nun eine Testfrage. Welche ca. 3 Meter große Figur steht am Eingang des Wurzelparks?',
            'url_to_audio' => '',
        ]);

        DB::table('questions_translations')->insert([
            'question_id' => 40,
            'locale' => 'en',
            'text' => 'You started the quiz rally! This is an example question. Which property is besides the entrance of the Wurzelpark and about 3 meters high?',
            'url_to_audio' => '',
        ]);
    }
}
