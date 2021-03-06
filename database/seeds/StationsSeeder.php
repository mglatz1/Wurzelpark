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

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station04',
            'name' => 'Station04'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '4',
            'locale' => 'de',
            'display_name' => 'Station 4'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '4',
            'locale' => 'en',
            'display_name' => 'Station 4'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station05',
            'name' => 'Station05'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '5',
            'locale' => 'de',
            'display_name' => 'Station 5'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '5',
            'locale' => 'en',
            'display_name' => 'Station 5'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station06',
            'name' => 'Station06'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '6',
            'locale' => 'de',
            'display_name' => 'Station 6'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '6',
            'locale' => 'en',
            'display_name' => 'Station 6'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station07',
            'name' => 'Station07'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '7',
            'locale' => 'de',
            'display_name' => 'Station 7'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '7',
            'locale' => 'en',
            'display_name' => 'Station 7'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station08',
            'name' => 'Station08'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '8',
            'locale' => 'de',
            'display_name' => 'Station 8'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '8',
            'locale' => 'en',
            'display_name' => 'Station 8'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station09',
            'name' => 'Station09'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '9',
            'locale' => 'de',
            'display_name' => 'Station 9'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '9',
            'locale' => 'en',
            'display_name' => 'Station 9'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station10',
            'name' => 'Station10'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '10',
            'locale' => 'de',
            'display_name' => 'Station 10'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '10',
            'locale' => 'en',
            'display_name' => 'Station 10'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station11',
            'name' => 'Station11'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '11',
            'locale' => 'de',
            'display_name' => 'Station 11'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '11',
            'locale' => 'en',
            'display_name' => 'Station 11'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station12',
            'name' => 'Station12'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '12',
            'locale' => 'de',
            'display_name' => 'Station 12'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '12',
            'locale' => 'en',
            'display_name' => 'Station 12'
        ]);

        DB::table('stations')->insert([
            'created_at' => Carbon::now(),
            'url' => config('app.url_prefix').'Station13',
            'name' => 'Station13'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '13',
            'locale' => 'de',
            'display_name' => 'Station 13'
        ]);

        DB::table('stations_translations')->insert([
            'station_id' => '13',
            'locale' => 'en',
            'display_name' => 'Station 13'
        ]);
    }
}
