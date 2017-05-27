<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(InformationSeeder::class);
         $this->call(StationsSeeder::class);
         $this->call(QuestionsSeeder::class);
         $this->call(AnswersSeeder::class);
         $this->call(LevelsSeeder::class);
    }
}
