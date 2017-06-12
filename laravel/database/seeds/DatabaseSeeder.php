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
        DB::table('klanten')->insert([
            'klant_id' => 1,
            'voornaam' => 'Jessey',
            'achternaam' => 'Fransen',
            'password' => bcrypt('admin'),
        ]);
    }
}
