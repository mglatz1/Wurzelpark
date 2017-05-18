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
            'name' => 'Station01'
        ]);
    }
}
