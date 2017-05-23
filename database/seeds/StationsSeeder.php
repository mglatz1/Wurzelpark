<?php

use Illuminate\Database\Seeder;

class StationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stations')->insert([
            'url' => 'Station01',
            'name' => 'Station01',
            'display_name' => 'Station 1'
        ]);

        DB::table('stations')->insert([
            'url' => 'Station02',
            'name' => 'Station02',
            'display_name' => 'Station 2'
        ]);
    }
}
