<?php

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
            'description' => 'leicht'
        ]);

        DB::table('levels')->insert([
            'description' => 'mittel'
        ]);

        DB::table('levels')->insert([
            'description' => 'schwer'
        ]);
    }
}
