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
    }
}
