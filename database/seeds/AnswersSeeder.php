<?php

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
            'text' => 'Gemüse',
            'correct' => false,
            'question_id' => 1
        ]);

        DB::table('answers')->insert([
            'text' => 'Fleisch',
            'correct' => false,
            'question_id' => 1
        ]);

        DB::table('answers')->insert([
            'text' => 'Nüsse',
            'correct' => true,
            'question_id' => 1
        ]);

        DB::table('answers')->insert([
            'text' => 'Insekten und Würmer',
            'correct' => false,
            'question_id' => 1
        ]);

        DB::table('answers')->insert([
            'text' => 'Insekten',
            'correct' => true,
            'question_id' => 2
        ]);

        DB::table('answers')->insert([
            'text' => 'Füchse',
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers')->insert([
            'text' => 'Menschen',
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers')->insert([
            'text' => 'Beeren',
            'correct' => false,
            'question_id' => 2
        ]);

        DB::table('answers')->insert([
            'text' => 'mit den Ohren',
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers')->insert([
            'text' => 'mit dem Schwanz',
            'correct' => true,
            'question_id' => 3
        ]);

        DB::table('answers')->insert([
            'text' => 'mit den Pfoten',
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers')->insert([
            'text' => 'mit der Nase',
            'correct' => false,
            'question_id' => 3
        ]);

        DB::table('answers')->insert([
            'text' => 'zwei Hörner',
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers')->insert([
            'text' => 'zwei Fühler',
            'correct' => true,
            'question_id' => 4
        ]);

        DB::table('answers')->insert([
            'text' => 'zwei Ohren',
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers')->insert([
            'text' => 'einen Schnurrbart',
            'correct' => false,
            'question_id' => 4
        ]);

        DB::table('answers')->insert([
            'text' => 'Braun',
            'correct' => true,
            'question_id' => 5
        ]);

        DB::table('answers')->insert([
            'text' => 'Rot',
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers')->insert([
            'text' => 'Grün',
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers')->insert([
            'text' => 'Grau',
            'correct' => false,
            'question_id' => 5
        ]);

        DB::table('answers')->insert([
            'text' => 'Nein',
            'correct' => false,
            'question_id' => 6
        ]);

        DB::table('answers')->insert([
            'text' => 'Wenn es regnet',
            'correct' => false,
            'question_id' => 6
        ]);

        DB::table('answers')->insert([
            'text' => 'Ja',
            'correct' => true,
            'question_id' => 6
        ]);

        DB::table('answers')->insert([
            'text' => 'Wenn es friert',
            'correct' => false,
            'question_id' => 6
        ]);
    }
}
