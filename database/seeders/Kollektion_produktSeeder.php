<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kollektion_produktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kollektion_produkt=array(
            array(
                'produkt_id'=>1,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>2,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>3,
                'kollektion_id'=>2
            ),
            array(
                'produkt_id'=>4,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>5,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>6,
                'kollektion_id'=>2
            ),
            array(
                'produkt_id'=>7,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>8,
                'kollektion_id'=>2
            ),
            array(
                'produkt_id'=>9,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>10,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>11,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>12,
                'kollektion_id'=>2
            ),
            array(
                'produkt_id'=>13,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>14,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>15,
                'kollektion_id'=>2
            ),
            array(
                'produkt_id'=>16,
                'kollektion_id'=>2
            ),
            array(
                'produkt_id'=>17,
                'kollektion_id'=>2
            ),
            array(
                'produkt_id'=>18,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>19,
                'kollektion_id'=>1
            ),
            array(
                'produkt_id'=>20,
                'kollektion_id'=>2
            ),
        );

        DB::table('kollektion_produkt')->insert($kollektion_produkt);
    }
}
