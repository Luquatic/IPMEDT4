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

        // Jaar 1
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

        // Jaar 1
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

        // Jaar 1
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

        // Jaar 1
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

        DB::table('vakken')->insert([
            'jaar' => 1,
            'periode' => 4,
            'naam' => 'IIPMEDT',
            'ec' => 10,
            'gehaald' => false,
        ]);

        // Jaar 2
        // Periode 1
        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 1,
            'naam' => 'IRDBMS',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 1,
            'naam' => 'IPMEDT2',
            'ec' => 6,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 1,
            'naam' => 'IMTD1',
            'ec' => 3,
            'gehaald' => false,
        ]);

        // Jaar 2
        // Periode 2
        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 2,
            'naam' => 'ISCRIPT',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 2,
            'naam' => 'IPMEDT3',
            'ec' => 6,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 2,
            'naam' => 'IMTUE',
            'ec' => 3,
            'gehaald' => false,
        ]);

        // Jaar 2
        // Periode 3
        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 3,
            'naam' => 'IQUA',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 3,
            'naam' => 'IPMEDT5',
            'ec' => 6,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 3,
            'naam' => 'IMTCM',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 3,
            'naam' => 'ICOMMH',
            'ec' => 3,
            'gehaald' => false,
        ]);

        // Jaar 2
        // Periode 4
        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 4,
            'naam' => 'IETH',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 4,
            'naam' => 'IPMEDT4',
            'ec' => 6,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 4,
            'naam' => 'IMTPMD',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 2,
            'periode' => 4,
            'naam' => 'ISLH',
            'ec' => 3,
            'gehaald' => false,
        ]);

        // Jaar 3
        // Periode 1
        DB::table('vakken')->insert([
            'jaar' => 3,
            'periode' => 1,
            'naam' => 'IPMEDTH',
            'ec' => 9,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 3,
            'periode' => 1,
            'naam' => 'ISCP',
            'ec' => 3,
            'gehaald' => false,
        ]);

        // Jaar 3
        // Periode 2
        DB::table('vakken')->insert([
            'jaar' => 3,
            'periode' => 2,
            'naam' => 'IMTMC',
            'ec' => 3,
            'gehaald' => false,
        ]);

        DB::table('vakken')->insert([
            'jaar' => 3,
            'periode' => 2,
            'naam' => 'IMTHMI',
            'ec' => 3,
            'gehaald' => false,
        ]);

        // Jaar 3
        // Periode 3 en 4
        DB::table('vakken')->insert([
            'jaar' => 3,
            'periode' => 3,
            'naam' => 'MINOR',
            'ec' => 30,
            'gehaald' => false,
        ]);

        // Jaar 4
        // Periode 1 en 2
        DB::table('vakken')->insert([
            'jaar' => 4,
            'periode' => 1,
            'naam' => 'ISENMT',
            'ec' => 30,
            'gehaald' => false,
        ]);

        // Jaar 4
        // Periode 3 en 4
        DB::table('vakken')->insert([
            'jaar' => 4,
            'periode' => 3,
            'naam' => 'SCRIPTIE',
            'ec' => 30,
            'gehaald' => false,
        ]);
    }
}
