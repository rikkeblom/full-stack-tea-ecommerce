<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produkt_smagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $forbindelser=array(
            array(
                'produkt_id'=>3,
                'smag_id'=>11,
            ),
            array(
                'produkt_id'=>3,
                'smag_id'=>12,
            ),
            array(
                'produkt_id'=>3,
                'smag_id'=>13,
            ),
            array(
                'produkt_id'=>3,
                'smag_id'=>14,
            ),
            array(
                'produkt_id'=>3,
                'smag_id'=>15,
            ),
            array(
                'produkt_id'=>3,
                'smag_id'=>16,
            ),
            array(
                'produkt_id'=>3,
                'smag_id'=>17,
            ),
            array(
                'produkt_id'=>3,
                'smag_id'=>18,
            ),
            array(
                'produkt_id'=>3,
                'smag_id'=>19,
            ),
            array(
                'produkt_id'=>6,
                'smag_id'=>3,
            ),
            array(
                'produkt_id'=>9,
                'smag_id'=>4,
            ),
            array(
                'produkt_id'=>12,
                'smag_id'=>5,
            ),
            array(
                'produkt_id'=>12,
                'smag_id'=>7,
            ),
            array(
                'produkt_id'=>12,
                'smag_id'=>20,
            ),
            array(
                'produkt_id'=>12,
                'smag_id'=>21,
            ),
            array(
                'produkt_id'=>12,
                'smag_id'=>22,
            ),
            array(
                'produkt_id'=>15,
                'smag_id'=>9,
            ),
            array(
                'produkt_id'=>16,
                'smag_id'=>1,
            ),
            array(
                'produkt_id'=>17,
                'smag_id'=>10,
            )
        );

        DB::table('produkt_smag')->insert($forbindelser);
    }
}
