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

        // Periode 1

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 1,
            'naam' => 'IARCH',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 1,
            'naam' => 'IIBPM',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 1,
            'naam' => 'IHBO',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 1,
            'naam' => 'IOPR1',
            'ec' => 4,
            'gehaald' => false,
        ]);

        // Periode 2

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 2,
            'naam' => 'IWDR',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 2,
            'naam' => 'IRDB',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 2,
            'naam' => 'IIBUI',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 2,
            'naam' => 'INET',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 2,
            'naam' => 'IPRODAM',
            'ec' => 2,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 2,
            'naam' => 'IPOMEDT',
            'ec' => 2,
            'gehaald' => false,
        ]);

        // Periode 3

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 3,
            'naam' => 'IMUML',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 3,
            'naam' => 'IOPR2',
            'ec' => 4,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 3,
            'naam' => 'IFIT',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 3,
            'naam' => 'IPOFIT',
            'ec' => 2,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 3,
            'naam' => 'IPOSE',
            'ec' => 2,
            'gehaald' => false,
        ]);

        // Periode 4

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 4,
            'naam' => 'IPROV',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 4,
            'naam' => 'ICOMMP',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 4,
            'naam' => 'ISLP',
            'ec' => 1,
            'gehaald' => false,
        ]);


    }
}
