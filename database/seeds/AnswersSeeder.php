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
            'answer_id' => '1',
            'locale' => 'de',
            'text' => 'Gemüse'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '1',
            'locale' => 'en',
            'text' => 'Vegetables'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 1
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '2',
            'locale' => 'de',
            'text' => 'Fleisch'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '2',
            'locale' => 'en',
            'text' => 'Meat'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 1
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '3',
            'locale' => 'de',
            'text' => 'Nüsse'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '3',
            'locale' => 'en',
            'text' => 'Nuts'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 1
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '4',
            'locale' => 'de',
            'text' => 'Insekten und Würmer'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '4',
            'locale' => 'en',
            'text' => 'Insects and worms'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 2
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '5',
            'locale' => 'en',
            'text' => 'Insects'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '6',
            'locale' => 'de',
            'text' => 'Füchse'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '6',
            'locale' => 'en',
            'text' => 'Foxes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '7',
            'locale' => 'de',
            'text' => 'Menschen'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '7',
            'locale' => 'en',
            'text' => 'Human beings'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '8',
            'locale' => 'de',
            'text' => 'Beeren'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '8',
            'locale' => 'en',
            'text' => 'Berries'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '9',
            'locale' => 'de',
            'text' => 'mit den Ohren'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '9',
            'locale' => 'en',
            'text' => 'the ears'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 3
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '10',
            'locale' => 'de',
            'text' => 'mit dem Schwanz'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '10',
            'locale' => 'en',
            'text' => 'the tail'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '11',
            'locale' => 'de',
            'text' => 'mit den Pfoten'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '11',
            'locale' => 'en',
            'text' => 'the paws'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '12',
            'locale' => 'de',
            'text' => 'mit der Nase'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '12',
            'locale' => 'en',
            'text' => 'the nose'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '13',
            'locale' => 'de',
            'text' => 'Zwei Hörner'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '13',
            'locale' => 'en',
            'text' => 'Two horns'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 4
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '14',
            'locale' => 'de',
            'text' => 'Zwei Fühler'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '14',
            'locale' => 'en',
            'text' => 'Two Sensors'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '15',
            'locale' => 'de',
            'text' => 'Zwei Ohren'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '15',
            'locale' => 'en',
            'text' => 'Two ears'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '16',
            'locale' => 'de',
            'text' => 'Einen Schnurrbart'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '16',
            'locale' => 'en',
            'text' => 'A mustache'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 5
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '17',
            'locale' => 'de',
            'text' => 'Braun'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '17',
            'locale' => 'en',
            'text' => 'Brown'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '18',
            'locale' => 'de',
            'text' => 'Grün'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '18',
            'locale' => 'en',
            'text' => 'Green'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '19',
            'locale' => 'de',
            'text' => 'Rot'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '19',
            'locale' => 'en',
            'text' => 'Red'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '20',
            'locale' => 'de',
            'text' => 'Grau'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '20',
            'locale' => 'en',
            'text' => 'Grey'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 6
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '21',
            'locale' => 'de',
            'text' => 'Nein'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '21',
            'locale' => 'en',
            'text' => 'No'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 6
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '22',
            'locale' => 'de',
            'text' => 'Wenn es regnet'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '22',
            'locale' => 'en',
            'text' => 'If it\'s raining'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => true,
            'question_id' => 6
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '23',
            'locale' => 'de',
            'text' => 'Ja'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '23',
            'locale' => 'en',
            'text' => 'Yes'
        ]);

        DB::table('answers')->insert([
            'created_at' => Carbon::now(),
            'correct' => false,
            'question_id' => 6
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '24',
            'locale' => 'de',
            'text' => 'Wenn es friert'
        ]);

        DB::table('answers_translations')->insert([
            'answer_id' => '24',
            'locale' => 'en',
            'text' => 'If it\'s freezing'
        ]);
    }
}
