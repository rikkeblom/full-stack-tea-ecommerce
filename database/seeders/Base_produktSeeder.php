<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Base_produktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $forbindelser=array(
            array(
                'produkt_id'=>1,
                'base_id'=>1,
            ),
            array(
                'produkt_id'=>2,
                'base_id'=>1,
            ),
            array(
                'produkt_id'=>3,
                'base_id'=>1,
            ),
            array(
                'produkt_id'=>3,
                'base_id'=>6,
            ),
            array(
                'produkt_id'=>4,
                'base_id'=>5,
            ),
            array(
                'produkt_id'=>5,
                'base_id'=>2,
            ),
            array(
                'produkt_id'=>6,
                'base_id'=>3,
            ),
            array(
                'produkt_id'=>7,
                'base_id'=>1,
            ),
            array(
                'produkt_id'=>8,
                'base_id'=>1,
            ),
            array(
                'produkt_id'=>9,
                'base_id'=>5,
            ),
            array(
                'produkt_id'=>10,
                'base_id'=>3,
            ),
            array(
                'produkt_id'=>11,
                'base_id'=>3,
            ),
            array(
                'produkt_id'=>12,
                'base_id'=>2,
            ),
            array(
                'produkt_id'=>13,
                'base_id'=>3,
            ),
            array(
                'produkt_id'=>14,
                'base_id'=>3,
            ),
            array(
                'produkt_id'=>15,
                'base_id'=>1,
            ),
            array(
                'produkt_id'=>16,
                'base_id'=>1,
            ),
            array(
                'produkt_id'=>17,
                'base_id'=>3,
            ),
            array(
                'produkt_id'=>18,
                'base_id'=>1,
            ),
            array(
                'produkt_id'=>19,
                'base_id'=>6,
            )
        );

        DB::table('base_produkt')->insert($forbindelser);
    }
}
