<?php

use Carbon\Carbon;
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
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station01',
            'name' => 'Station01'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '1',
            'locale' => 'de',
            'display_name' => 'Station 1'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '1',
            'locale' => 'en',
            'display_name' => 'Station 1'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station02',
            'name' => 'Station02'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '2',
            'locale' => 'de',
            'display_name' => 'Station 2'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '2',
            'locale' => 'en',
            'display_name' => 'Station 2'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station03',
            'name' => 'Station03'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '3',
            'locale' => 'de',
            'display_name' => 'Station 3'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '3',
            'locale' => 'en',
            'display_name' => 'Station 3'
        ]);
    }
}
