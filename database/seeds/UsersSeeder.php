<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'created_at' => Carbon::now(),
            'name' => 'Mathias Glatz',
            'username' => 'mathiasglatz',
            'email' => 'mathias.glatz@gmx.at',
            'password' => bcrypt('mathias'),
            'year_of_birth' => 1989,
            'language' => 'de'
        ]);

        DB::table('users')->insert([
            'created_at' => Carbon::now(),
            'name' => 'Martin Glatz',
            'username' => 'martinglatz',
            'email' => 'mg.glatz@gmx.at',
            'password' => bcrypt('martin'),
            'year_of_birth' => 1995,
            'language' => 'en'
        ]);
    }
}
