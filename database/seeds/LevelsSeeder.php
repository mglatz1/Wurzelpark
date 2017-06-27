<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'created_at' => Carbon::now()
        ]);

        DB::table('levels_translations')->insert([
            'level_id' => '1',
            'locale' => 'de',
            'description' => 'leicht'
        ]);

        DB::table('levels_translations')->insert([
            'level_id' => '1',
            'locale' => 'en',
            'description' => 'easy'
        ]);

        DB::table('levels')->insert([
            'created_at' => Carbon::now()
        ]);

        DB::table('levels_translations')->insert([
            'level_id' => '2',
            'locale' => 'de',
            'description' => 'mittel'
        ]);

        DB::table('levels_translations')->insert([
            'level_id' => '2',
            'locale' => 'en',
            'description' => 'medium'
        ]);

        DB::table('levels')->insert([
            'created_at' => Carbon::now()
        ]);

        DB::table('levels_translations')->insert([
            'level_id' => '3',
            'locale' => 'de',
            'description' => 'schwer'
        ]);

        DB::table('levels_translations')->insert([
            'level_id' => '3',
            'locale' => 'en',
            'description' => 'difficult'
        ]);
    }
}
