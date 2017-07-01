<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 1
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 1,
            'locale' => 'de',
            'text' => 'Gemüse'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 1,
            'locale' => 'en',
            'text' => 'Vegetables'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 1
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 2,
            'locale' => 'de',
            'text' => 'Fleisch'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 2,
            'locale' => 'en',
            'text' => 'Meat'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 1
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 3,
            'locale' => 'de',
            'text' => 'Nüsse'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 3,
            'locale' => 'en',
            'text' => 'Nuts'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 1
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 4,
            'locale' => 'de',
            'text' => 'Insekten und Würmer'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 4,
            'locale' => 'en',
            'text' => 'Insects and worms'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 2
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 5,
            'locale' => 'de',
            'text' => 'Insekten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 5,
            'locale' => 'en',
            'text' => 'Insects'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 6,
            'locale' => 'de',
            'text' => 'Füchse'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 6,
            'locale' => 'en',
            'text' => 'Foxes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 7,
            'locale' => 'de',
            'text' => 'Menschen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 7,
            'locale' => 'en',
            'text' => 'Human beings'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 8,
            'locale' => 'de',
            'text' => 'Beeren'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 8,
            'locale' => 'en',
            'text' => 'Berries'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 9,
            'locale' => 'de',
            'text' => 'mit den Ohren'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 9,
            'locale' => 'en',
            'text' => 'the ears'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 3
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 10,
            'locale' => 'de',
            'text' => 'mit dem Schwanz'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 10,
            'locale' => 'en',
            'text' => 'the tail'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 11,
            'locale' => 'de',
            'text' => 'mit den Pfoten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 11,
            'locale' => 'en',
            'text' => 'the paws'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 12,
            'locale' => 'de',
            'text' => 'mit der Nase'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 12,
            'locale' => 'en',
            'text' => 'the nose'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 13,
            'locale' => 'de',
            'text' => 'Kaulquappen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 13,
            'locale' => 'en',
            'text' => 'Tadpoles'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 4
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 14,
            'locale' => 'de',
            'text' => 'Laich'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 14,
            'locale' => 'en',
            'text' => 'Spawn'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 15,
            'locale' => 'de',
            'text' => 'Lurche'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 15,
            'locale' => 'en',
            'text' => 'Amphibian'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 16,
            'locale' => 'de',
            'text' => 'Kaviar'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 16,
            'locale' => 'en',
            'text' => 'Caviar'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 17,
            'locale' => 'de',
            'text' => 'Specht'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 17,
            'locale' => 'en',
            'text' => 'The woodpecker'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 18,
            'locale' => 'de',
            'text' => 'Specht'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 18,
            'locale' => 'en',
            'text' => 'The woodpecker'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 5
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 19,
            'locale' => 'de',
            'text' => 'Baummader'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 19,
            'locale' => 'en',
            'text' => 'The tree marten'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 20,
            'locale' => 'de',
            'text' => 'Katze'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 20,
            'locale' => 'en',
            'text' => 'The cat'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 6
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 21,
            'locale' => 'de',
            'text' => '2.000'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 21,
            'locale' => 'en',
            'text' => '2,000'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 6
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 22,
            'locale' => 'de',
            'text' => '4.000'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 22,
            'locale' => 'en',
            'text' => '4,000'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 6
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 23,
            'locale' => 'de',
            'text' => '10.000'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 23,
            'locale' => 'en',
            'text' => '10,000'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 6
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 24,
            'locale' => 'de',
            'text' => '200'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 24,
            'locale' => 'en',
            'text' => '200'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 7
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 25,
            'locale' => 'de',
            'text' => 'Pflanzen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 25,
            'locale' => 'en',
            'text' => 'Plants'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 7
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 26,
            'locale' => 'de',
            'text' => 'Schlangen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 26,
            'locale' => 'en',
            'text' => 'Snakes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 7
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 27,
            'locale' => 'de',
            'text' => 'Andere Regenwürmer'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 27,
            'locale' => 'en',
            'text' => 'Other earthworms'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 7
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 28,
            'locale' => 'de',
            'text' => 'Insekten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 28,
            'locale' => 'en',
            'text' => 'Insects'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 8
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 29,
            'locale' => 'de',
            'text' => 'Zwei Hörner'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 29,
            'locale' => 'en',
            'text' => 'Two horns'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 8
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 30,
            'locale' => 'de',
            'text' => 'Zwei Fühler'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 30,
            'locale' => 'en',
            'text' => 'Two sensors'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 8
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 31,
            'locale' => 'de',
            'text' => 'Zwei Ohren'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 31,
            'locale' => 'en',
            'text' => 'Two ears'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 8
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 32,
            'locale' => 'de',
            'text' => 'Einen Schnurrbart'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 32,
            'locale' => 'en',
            'text' => 'A mustache'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 9
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 33,
            'locale' => 'de',
            'text' => 'Nein'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 33,
            'locale' => 'en',
            'text' => 'No'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 9
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 34,
            'locale' => 'de',
            'text' => 'Ja'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 34,
            'locale' => 'en',
            'text' => 'Yes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 9
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 35,
            'locale' => 'de',
            'text' => 'Manchmal'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 35,
            'locale' => 'en',
            'text' => 'Sometimes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 9
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 36,
            'locale' => 'de',
            'text' => 'Kaum'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 36,
            'locale' => 'en',
            'text' => 'Barely'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 10
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 37,
            'locale' => 'de',
            'text' => 'In trockenen Gebieten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 37,
            'locale' => 'en',
            'text' => 'In dry areas'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 10
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 38,
            'locale' => 'de',
            'text' => 'In feuchten Gebieten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 38,
            'locale' => 'en',
            'text' => 'In moist areas'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 10
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 39,
            'locale' => 'de',
            'text' => 'In heißen Gebieten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 39,
            'locale' => 'en',
            'text' => 'In hot areas'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 10
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 40,
            'locale' => 'de',
            'text' => 'In kalten Gebieten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 40,
            'locale' => 'en',
            'text' => 'In cool areas'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 11
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 41,
            'locale' => 'de',
            'text' => 'Braun'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 41,
            'locale' => 'en',
            'text' => 'Brown'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 11
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 42,
            'locale' => 'de',
            'text' => 'Grün'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 42,
            'locale' => 'en',
            'text' => 'Green'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 11
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 43,
            'locale' => 'de',
            'text' => 'Rot'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 43,
            'locale' => 'en',
            'text' => 'Red'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 11
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 44,
            'locale' => 'de',
            'text' => 'Grau'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 44,
            'locale' => 'en',
            'text' => 'Grey'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 12
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 45,
            'locale' => 'de',
            'text' => 'Nein'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 45,
            'locale' => 'en',
            'text' => 'No'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 12
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 46,
            'locale' => 'de',
            'text' => 'Wenn es regnet'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 46,
            'locale' => 'en',
            'text' => 'If it\'s raining'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 12
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 47,
            'locale' => 'de',
            'text' => 'Ja'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 47,
            'locale' => 'en',
            'text' => 'Yes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 12
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 48,
            'locale' => 'de',
            'text' => 'Wenn es friert'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 48,
            'locale' => 'en',
            'text' => 'If it\'s freezing'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 13
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 49,
            'locale' => 'de',
            'text' => 'Aus Langeweile'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 49,
            'locale' => 'en',
            'text' => 'Because of boredom'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 13
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 50,
            'locale' => 'de',
            'text' => 'Zur Nahrungssuche'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 50,
            'locale' => 'en',
            'text' => 'For food search'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 13
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 51,
            'locale' => 'de',
            'text' => 'Um Aufmerksamkeit zu erlangen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 51,
            'locale' => 'en',
            'text' => 'To attrack attention'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 13
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 52,
            'locale' => 'de',
            'text' => 'Zur Partnersuche'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 52,
            'locale' => 'en',
            'text' => 'For finding a mate'
        ]);

        DB::table('answers')->insert([
        'created_at' => Carbon::now(),
        'correct' => false,
        'question_id' => 14
    ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 53,
            'locale' => 'de',
            'text' => 'Auf einem Baum'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 53,
            'locale' => 'en',
            'text' => 'On trees'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 14
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 54,
            'locale' => 'de',
            'text' => 'In einem Ameisenhaufen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 54,
            'locale' => 'en',
            'text' => 'In anthills'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 14
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 55,
            'locale' => 'de',
            'text' => 'Im Bett'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 55,
            'locale' => 'en',
            'text' => 'In beds'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 14
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 56,
            'locale' => 'de',
            'text' => 'Im Wasser'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 56,
            'locale' => 'en',
            'text' => 'In water'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 15
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 57,
            'locale' => 'de',
            'text' => 'Lang und klebrig'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 57,
            'locale' => 'en',
            'text' => 'Long and sticky'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 15
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 58,
            'locale' => 'de',
            'text' => 'Kurz und klebrig'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 58,
            'locale' => 'en',
            'text' => 'Short and sticky'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 15
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 59,
            'locale' => 'de',
            'text' => 'Lang und nicht klebrig'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 59,
            'locale' => 'en',
            'text' => 'Long and not sticky'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 15
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 60,
            'locale' => 'de',
            'text' => 'Spitz und lang'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 60,
            'locale' => 'en',
            'text' => 'Sharp and long'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 16
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 61,
            'locale' => 'de',
            'text' => 'Die Arbeiterinnen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 61,
            'locale' => 'en',
            'text' => 'Worker ants'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 16
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 62,
            'locale' => 'de',
            'text' => 'Die Männchen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 62,
            'locale' => 'en',
            'text' => 'Male ants'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 16
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 63,
            'locale' => 'de',
            'text' => 'Die Königinnen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 63,
            'locale' => 'en',
            'text' => 'Queens'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 16
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 64,
            'locale' => 'de',
            'text' => 'Die Donen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 64,
            'locale' => 'en',
            'text' => 'Drones'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 17
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 65,
            'locale' => 'de',
            'text' => 'In einer Felshöhle'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 65,
            'locale' => 'en',
            'text' => 'In rock caves'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 17
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 66,
            'locale' => 'de',
            'text' => 'In einer Baumhöhle'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 66,
            'locale' => 'en',
            'text' => 'In tree holes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 17
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 67,
            'locale' => 'de',
            'text' => 'Unter der Erde'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 67,
            'locale' => 'en',
            'text' => 'Under the earth'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 17
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 68,
            'locale' => 'de',
            'text' => 'In den Sträuchern'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 68,
            'locale' => 'en',
            'text' => 'On bushes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 18
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 69,
            'locale' => 'de',
            'text' => '300.000'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 69,
            'locale' => 'en',
            'text' => '300,000'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 18
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 70,
            'locale' => 'de',
            'text' => '30.000'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 70,
            'locale' => 'en',
            'text' => '30,000'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 18
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 71,
            'locale' => 'de',
            'text' => '3.000'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 71,
            'locale' => 'en',
            'text' => '3,000'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 18
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 72,
            'locale' => 'de',
            'text' => '500'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 72,
            'locale' => 'en',
            'text' => '500'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 19
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 73,
            'locale' => 'de',
            'text' => 'Champignon'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 73,
            'locale' => 'en',
            'text' => 'Champignon mushroom'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 19
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 74,
            'locale' => 'de',
            'text' => 'Fliegenpilz'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 74,
            'locale' => 'en',
            'text' => 'Fly agaric'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 19
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 75,
            'locale' => 'de',
            'text' => 'Pfifferling/Eierschwammerl'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 75,
            'locale' => 'en',
            'text' => 'Girolle'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 19
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 76,
            'locale' => 'de',
            'text' => 'Steinpilz'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 76,
            'locale' => 'en',
            'text' => 'Porcini'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 20
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 77,
            'locale' => 'de',
            'text' => 'Nadelbaum'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 77,
            'locale' => 'en',
            'text' => 'Conifer'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 20
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 78,
            'locale' => 'de',
            'text' => 'Laubbaum'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 78,
            'locale' => 'en',
            'text' => 'Broadleaf'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 20
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 79,
            'locale' => 'de',
            'text' => 'Obstbaum'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 79,
            'locale' => 'en',
            'text' => 'Fruit tree'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 20
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 80,
            'locale' => 'de',
            'text' => 'Strauch'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 80,
            'locale' => 'en',
            'text' => 'Bush'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 21
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 81,
            'locale' => 'de',
            'text' => 'Essbar'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 81,
            'locale' => 'en',
            'text' => 'Edible'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 21
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 82,
            'locale' => 'de',
            'text' => 'Köstlich'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 82,
            'locale' => 'en',
            'text' => 'Delicious'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 21
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 83,
            'locale' => 'de',
            'text' => 'Tödlich giftig'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 83,
            'locale' => 'en',
            'text' => 'Fatally poisonous'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 21
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 84,
            'locale' => 'de',
            'text' => 'Krankheitserregend'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 84,
            'locale' => 'en',
            'text' => 'Pathogenic'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 22
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 85,
            'locale' => 'de',
            'text' => 'Fichte'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 85,
            'locale' => 'en',
            'text' => 'Spruce'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 22
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 86,
            'locale' => 'de',
            'text' => 'Lärche'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 86,
            'locale' => 'en',
            'text' => 'Larch'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 22
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 87,
            'locale' => 'de',
            'text' => 'Tanne'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 87,
            'locale' => 'en',
            'text' => 'Fir'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 22
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 88,
            'locale' => 'de',
            'text' => 'Föhre'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 88,
            'locale' => 'en',
            'text' => 'Scots pine'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 23
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 89,
            'locale' => 'de',
            'text' => 'Zum Schwimmen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 89,
            'locale' => 'en',
            'text' => 'For swimming'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 23
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 90,
            'locale' => 'de',
            'text' => 'Zum Fischen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 90,
            'locale' => 'en',
            'text' => 'For fishing'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 23
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 91,
            'locale' => 'de',
            'text' => 'Zum Bescheien der Pisten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 91,
            'locale' => 'en',
            'text' => 'To cover the ski run with artificial snow'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 23
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 92,
            'locale' => 'de',
            'text' => 'Zum Eislaufen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 92,
            'locale' => 'en',
            'text' => 'For ice skating'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 24
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 93,
            'locale' => 'de',
            'text' => 'Mit den Flügeln'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 93,
            'locale' => 'en',
            'text' => 'With its wings'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 24
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 94,
            'locale' => 'de',
            'text' => 'Mit den Fühlern'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 94,
            'locale' => 'en',
            'text' => 'With its sensors'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 24
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 95,
            'locale' => 'de',
            'text' => 'Mit den Augen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 95,
            'locale' => 'en',
            'text' => 'With its eyes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 24
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 96,
            'locale' => 'de',
            'text' => 'Mit den Beinen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 96,
            'locale' => 'en',
            'text' => 'With its feet'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 25
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 97,
            'locale' => 'de',
            'text' => 'Grün/schwarz'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 97,
            'locale' => 'en',
            'text' => 'Green/black'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 25
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 98,
            'locale' => 'de',
            'text' => 'Orange/gelb'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 98,
            'locale' => 'en',
            'text' => 'Orange/yellow'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 25
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 99,
            'locale' => 'de',
            'text' => 'Gelb/schwarz'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 99,
            'locale' => 'en',
            'text' => 'Yellow/black'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 25
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 100,
            'locale' => 'de',
            'text' => 'Rot/schwarz'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 100,
            'locale' => 'en',
            'text' => 'Red/black'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 26
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 101,
            'locale' => 'de',
            'text' => 'Seen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 101,
            'locale' => 'en',
            'text' => 'Lakes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 26
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 102,
            'locale' => 'de',
            'text' => 'Teiche'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 102,
            'locale' => 'en',
            'text' => 'Ponds'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 26
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 103,
            'locale' => 'de',
            'text' => 'Bäche'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 103,
            'locale' => 'en',
            'text' => 'Streams'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 26
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 104,
            'locale' => 'de',
            'text' => 'Meere'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 104,
            'locale' => 'en',
            'text' => 'The sea'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 27
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 105,
            'locale' => 'de',
            'text' => 'Die Almrose'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 105,
            'locale' => 'en',
            'text' => 'Alpine rose'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 27
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 106,
            'locale' => 'de',
            'text' => 'Der Löwenzahn'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 106,
            'locale' => 'en',
            'text' => 'Dandelion'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 27
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 107,
            'locale' => 'de',
            'text' => 'Das Edelweiß'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 107,
            'locale' => 'en',
            'text' => 'Edelweiss'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 27
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 108,
            'locale' => 'de',
            'text' => 'Die Lupine'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 108,
            'locale' => 'en',
            'text' => 'Lupine'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 28
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 109,
            'locale' => 'de',
            'text' => 'Der Rothirsch'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 109,
            'locale' => 'en',
            'text' => 'Red deer'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 28
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 110,
            'locale' => 'de',
            'text' => 'Das Eichhörnchen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 110,
            'locale' => 'en',
            'text' => 'Squirrel'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 28
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 111,
            'locale' => 'de',
            'text' => 'Schafe'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 111,
            'locale' => 'en',
            'text' => 'Sheep'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 28
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 112,
            'locale' => 'de',
            'text' => 'Das Murmeltier'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 112,
            'locale' => 'en',
            'text' => 'Groundhog'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 29
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 113,
            'locale' => 'de',
            'text' => '10 kg'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 113,
            'locale' => 'en',
            'text' => '10 kg'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 29
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 114,
            'locale' => 'de',
            'text' => '20 kg'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 114,
            'locale' => 'en',
            'text' => '20 kg'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 29
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 115,
            'locale' => 'de',
            'text' => '30 kg'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 115,
            'locale' => 'en',
            'text' => '30 kg'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 29
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 116,
            'locale' => 'de',
            'text' => '40 kg'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 116,
            'locale' => 'en',
            'text' => '40 kg'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 30
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 117,
            'locale' => 'de',
            'text' => 'Weil sie die Luft reinigen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 117,
            'locale' => 'en',
            'text' => 'Because they clean the air'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 30
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 118,
            'locale' => 'de',
            'text' => 'Weil sie andere Insekten vertreiben'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 118,
            'locale' => 'en',
            'text' => 'Because they dispel insects'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 30
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 119,
            'locale' => 'de',
            'text' => 'Weil sie Blütenpflanzen bestäuben'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 119,
            'locale' => 'en',
            'text' => 'Because they pollinate flowering plants'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 30
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 120,
            'locale' => 'de',
            'text' => 'Weil sie stechen können'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 120,
            'locale' => 'en',
            'text' => 'Because they might sting'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 31
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 121,
            'locale' => 'de',
            'text' => 'Das Reh'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 121,
            'locale' => 'en',
            'text' => 'Deer'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 31
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 122,
            'locale' => 'de',
            'text' => 'Der Dachs'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 122,
            'locale' => 'en',
            'text' => 'Badger'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 31
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 123,
            'locale' => 'de',
            'text' => 'Der Fuchs'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 123,
            'locale' => 'en',
            'text' => 'Fox'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 31
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 124,
            'locale' => 'de',
            'text' => 'Der Hirsch'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => 124,
            'locale' => 'en',
            'text' => 'Stag'
        ]);
    }
}
