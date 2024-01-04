<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Billede_produktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $forbindelser=array(
            array(
                'billede_id'=>1,
                'produkt_id'=>1
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>1
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>2
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>2
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>3
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>3
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>4
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>4
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>5
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>5
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>6
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>6
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>7
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>7
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>8
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>8
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>9
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>9
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>10
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>10
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>11
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>11
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>12
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>12
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>13
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>13
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>14
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>14
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>15
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>15
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>16
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>16
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>17
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>17
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>18
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>18
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>19
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>19
            ),
            array(
                'billede_id'=>1,
                'produkt_id'=>20
            ),
            array(
                'billede_id'=>2,
                'produkt_id'=>20
            ),
        );

        DB::table('billede_produkt')->insert($forbindelser);
    }
}