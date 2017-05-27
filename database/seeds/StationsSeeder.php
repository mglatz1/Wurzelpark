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
            'url' => config('app.url_prefix').'Station01',
            'name' => 'Station01',
            'display_name' => 'Station 1'
        ]);

        /*DB::table('stations')->insert([
            'url' => config('app.url_prefix').'Station02',
            'name' => 'Station02',
            'display_name' => 'Station 2'
        ]);

        DB::table('stations')->insert([
            'url' => config('app.url_prefix').'Station03',
            'name' => 'Station03',
            'display_name' => 'Station 3'
        ]);*/
    }
}
